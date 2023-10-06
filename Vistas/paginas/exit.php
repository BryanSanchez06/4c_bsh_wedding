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
                Exit
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?pagina=login">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Exit
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
                <div style="display: flex; justify-content: center" class="">
                    <img style="width: 400px; " src="html/assets/img/celebrate/flower.png" alt="flower__image">
                </div>
                <div class="error__content">
                    <h3>
                        Good bye!!!
                    </h3>
                    <p>
                        See you later... </p>
                    <a href="#index.php?pagina=login" class="cmn--btn mt-3">
                        Home
                    </a>
                    <?php
                    session_destroy();
                    echo '<script> window.location = "index.php?pagina=ingreso";</script>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Error Section End ========= -->