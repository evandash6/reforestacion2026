<?php

class Database
{
    private static $conexion = null;

    public static function conectar()
    {
        if (self::$conexion === null) {

            self::$conexion = new mysqli(
                "localhost",
                "admin_refo",
                "2424123abcA@",
                "refopage"
            );

            if (self::$conexion->connect_error) {
                die("Error de conexión: " . self::$conexion->connect_error);
            }

            self::$conexion->set_charset("utf8mb4");
        }

        return self::$conexion;
    }
}
