<?php 
    require_once("controladores/plantillaControladores.php");
    require_once("controladores/formulariosControladores.php");

    require_once("modelos/conexion.php");

    $conexion = Conexion::conectar();
    //echo '<pre>'; print_r($conexion); echo '</pre>';

    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrTraerplantilla();

?>