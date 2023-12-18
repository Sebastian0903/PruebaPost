<?php
    class conexion{
        function conectar(){
            $host = 'localhost';
            $bdname = 'prueba1';
            $username = 'postgres';
            $password = 'root';

            try {
                $connect = new PDO ("pgsql:host=$host; dbname=$dbname; $username, $password");
                echo "Se conecta";
            } catch (PDOException $exp) {
                echo ("No se conecta," $exp);
            }

            return $connect;
        }
    }
?>