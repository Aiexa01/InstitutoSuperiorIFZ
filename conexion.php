<?php
    $servername  = "localhost";
    $username= "root";
    $password="";
    $dbname="ifz2025";

    $conexion = mysqli_connect($servername, $username, $password, $dbname);
    $conexion -> set_charset('utf8mb4');
    ?>