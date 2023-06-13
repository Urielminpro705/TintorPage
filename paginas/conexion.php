<?php
    $host = "localhost";
    $database = "id20898695_catalogo";
    $usuario    = "id20898695_tintor";
    $contrasena = "Tintor1234@";
    try{
        $conn = new PDO("mysql:host=$host;dbname=$database", $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "ERROR: " . $e->getMessage();
    }
?>