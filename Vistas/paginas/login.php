<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!--==== Scroll-Up Section End ======= -->

<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Login
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
                    Login
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Login Section Here ========= -->
<section class="error__section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <h2 style="text-align: center">Access the platform</h2>
                <div class="d-flex justify-content-center text-center">

                    <form class="p-5 bg-light" method="post">
                        <div class="form-group">
                            <label class="text-dark" for="email">E-mail</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="height: 100%;" class=" input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="write your email" id="email" name="ingresoEmail" />
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="pwd">Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span style="height: 100%;" class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Write your password" id="pwd" name="ingresoPassword" />
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
                        $ingreso = new ControladorFormularios();
                        $ingreso->ctrIngreso();
                        ?>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>*/
<!--=========== Login Section End ========= -->