<?php
	$host = "localhost";    
	$bd = "amate";    
	$usuariodb = "root";    
	$clavedb = ""; 
    $puerto="3307";

    $enlace = mysqli_connect($host,$usuariodb,$clavedb,$bd,$puerto);

    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>