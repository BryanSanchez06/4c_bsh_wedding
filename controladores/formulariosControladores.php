<?php
# registro

class ControladorFormularios

{
    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            if(
            preg_match("/^[a-zA-Z]+$/", $_POST["registroNombre"]) &&
            preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})+$/', $_POST["registroEmail"]) && 
            preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])){

                $tabla = "usuarios";

                $token = md5($_POST["registroNombre"] . "+" . $_POST["registroEmail"]);

                $datos = array(
                    "token" => $token,
                    "nombre" => $_POST["registroNombre"],
                    "email" => $_POST["registroEmail"],
                    "password" => $_POST["registroPassword"]
                );
                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                return $respuesta;
            }else{
                $respuesta = "error";
                return $respuesta;
            }
        }
    }

    # seleccionar registros de la tabla

    static public function ctrSeleccionarRegistros($item, $valor)
    {
        $tabla = "usuarios";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }
    # Ingreso
    public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "usuarios";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            // echo "<pre>";
            // print_r($respuesta);
            // "<pre>";
            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                $_SESSION["trabajo"]= "ok";
                echo "ingreso exitoso";
            } else {
                $tabla = "usuarios";
                $intentos_fallidos = $respuesta["intentos_fallidos"] + 1;
                $actualizarIntentosFallidos = ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos_fallidos, $respuesta["token"]);
                //echo '<pre>'; print_r($intentos_fallidos); echo '</pre>';

                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-danger">Error al ingresar al sistema, email o contraseña
                no coincide</div>';
            
            }
        }
    }
    static public function ctrActualizarRegistro()
    {
        if (isset($_POST["actualizarNombre"])) {
            if(
                preg_match("/^[a-zA-Z]+$/", $_POST["actualizarNombre"]) &&
                preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+
                (\.[a-z0-9-]+)*(\.[a-z]{2,3})+$/', $_POST["actualizarEmail"])){
                
                    $usuarios = ModeloFormularios::mdlSeleccionarRegistros("registros", "token", $_POST["tokenUsuario"] );
                    $compararToken = md5($usuarios["nombre"] .  "+" . $usuarios["email"]);
        
                    if($compararToken == $_POST["tokenUsuario"]){

                        if ($_POST["actualizarPassword"] != "") {
                            if(preg_match('/^[0-9a-zA-Z]+$/', $_POST["actualizarPassword"])){
                                $password = $_POST["actualizarPassword"];
                            }
                        } else {
                            $password = $_POST["passwordActual"];
                        }
            
                        $tabla = "usuarios";
                        $datos = array(
                            "token" => $_POST["tokenUsuario"],
                            "nombre" => $_POST["actualizarNombre"],
                            "email" => $_POST["actualizarEmail"],
                            "password" => $password
                        );
                        $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);
                        return $respuesta;
                    }else{
                        $respuesta = "error";
                        return $respuesta;
                    }
                }else{
                    $respuesta = "error";
                    return "$respuesta";
                }
        }
    }
    public function ctrEliminarRegistro()
    {
        if (isset($_POST["eliminarRegistro"])) {

            $usuarios = ModeloFormularios::mdlSeleccionarRegistros("usuarios", "token", $_POST["eliminarRegistro"] );
            $compararToken = md5($usuarios["nombre"] .  "+" . $usuarios["email"]);

            if($compararToken == $_POST["eliminarRegistro"]){
                $tabla = "usuarios";
                $valor = $_POST["eliminarRegistro"];
    
                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
                if ($respuesta == "ok") {
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    window.location = "index.php?pagina=admin";
                        </script>';
                }
            }
        }
    }
}

//$_SESSION_TRABAJO
