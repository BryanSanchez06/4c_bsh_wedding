<?php
class Conexion
{

    static public function conectar()
    {
        $link = new PDO("mysql:host=localhost:3308 ; dbname=wedding;", "soporte3c", "soporte3c");
        $link->exec("set names utf8");
        return $link;
    }
}
?>