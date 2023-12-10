<?php

class DataBase
{
    /*Database::Conectar()*/
    public static  function Conectar()
    {
        try {
            $host = "localhost";
            $dbname = "MODELO"; 
            $username = "root"; 
            $password = ""; 

            $base_de_datos = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $base_de_datos = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            // $base_de_datos = new PDO("sqlsrv:server=YORDY;database=MODELO", "sa", "70836940");
            // $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $base_de_datos;
        } catch (Exception $e) {
            echo "Ocurrió un error con la base de datos: " . $e;
        }       
    }   
}
$baseURL="http://localhost/proyecto";
