<?php
    include ('../includes/conexionbd.php');

    if (isset($_POST['guardar_noticia'])) { // si el bonton fué precionado
        $titulo = $_POST['titulo'];
        $descripcion =  $_POST['descripcion'];
     /* $img =  $_FILES['img']['titulo'];*/
        $img= 'hola';
        $insertNotic = "INSERT INTO noticias VALUES (null,'$titulo', '$descripcion','$img')";

        $result = mysqli_query($enlace, $insertNotic);
        if(!$result) {
            die("Fallo la carga");
        }
        header("Location: ../agregar_noticia.php");

    }


    include("desconnect_db.php");