<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Sign In
            </h1>
            <ul class="right__content">
                <li>
                    <a href="href="index.php?pagina=home">
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
                <h2 style="text-align: center">Registrate en la plataforma</h2>
                <div class="d-flex justify-content-center text-center">

                    <form class="p-5 bg-light" method="post">
                        <div class="form-group">
                            <label class="text-dark" for="nombre">Nombre</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Escribe su nombre" id="nombre" name="registroNombre" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="email">Correo electronico</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="registroEmail" />
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="pwd">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="registroPassword" />
                            </div>

                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" />
                                <label class="text-dark" for="">Recuerdame</label>
                            </label>
                        </div>
                        <!-- Esto es una plantilla no estatica -->
                        <?php
                        // $registro = new ControladorFormularios();
                        //  $registro -> ctrRegistro();

                        //  forma en que se instancia la clase statica
                        $registro = ControladorFormularios::ctrRegistro();
                        // echo $registro;
                        if ($registro == "ok") {
                            echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null, window.location.href);
        }
        </script>';
                            echo '<div class = "alert alert-success">El usuario ha sido registrado</div>';
                        }

                        if ($registro == "error") {
                            echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null, window.location.href);
        }
        </script>';
                            echo '<div class = "alert alert-danger">¡Error! No se permiten caracteres especiales.</div>';
                        }
                        ?>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Error Section End ========= -->