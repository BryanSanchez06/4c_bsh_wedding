<?php
# registro

class ControladorFormularios

{
    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            // return $_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPassword"]."<br>";
            $tabla = "usuarios";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
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

            if ($_POST["actualizarPassword"] != "") {
                $password = $_POST["actualizarPassword"];
            } else {
                $password = $_POST["passwordActual"];
            }

            $tabla = "usuarios";
            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );
            $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);
            return $respuesta;
        }
    }
    public function ctrEliminarRegistro()
    {
        if (isset($_POST["eliminarRegistro"])) {
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

//$_SESSION_TRABAJO
