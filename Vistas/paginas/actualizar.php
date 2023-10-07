<?php
    if (isset($_GET["id"])) {
        $item = "id";
        $valor = $_GET["id"];
    }
    
    $usuarios = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
?>
<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Sign In
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?Inicio=home">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Sign In
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Error Section Here ========= -->
<section class="error__section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h2 style="text-align: center">Modifie the User Data</h2>
                <div class="d-flex justify-content-center text-center">

                    <form class="p-5 bg-light" method="post">
                        <div class="form-group">
                            <label class="text-dark" for="nombre">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                </div>
                                <input value=<?php echo $usuarios["nombre"]?> type="text" class="form-control" placeholder="Type your name" id=nombre" name="actualizarNombre" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="email">Correo electronico</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                </div>
                                <input value=<?php echo $usuarios["email"]?> type="email" class="form-control" placeholder="Type your email" id="email" name="actualizarEmail" />
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="pwd">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                </div>
                                <input type="hidden" value=<?php echo $usuarios["password"]?> name="passwordActual"/>
                                <input type="hidden" value=<?php echo $usuarios["id"]?> name="idUsuario"/>
                                <input type="password" class="form-control" placeholder="Type your Password" id="pwd" name="actualizarPassword" />
                            </div>

                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                            </label>
                        </div>
                
                     <?php
                         //forma en que se instancia la clase statica
                         $actualizar = ControladorFormularios::ctrActualizarRegistro();
                        if ($actualizar == "ok") {
                            echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null, window.location.href);
        }
        </script>';
                            echo '<div class = "alert alert-success">El usuario ha sido actualizado</div>';
                        }
                        ?>
                        <button type= "submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Error Section End ========= -->