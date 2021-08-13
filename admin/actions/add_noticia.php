<?php
    include ('../includes/conexionbd.php');

    if (isset($_POST['guardar_noticia'])) { // si el bonton fué precionado
        $titulo = $_POST['titulo'];
        $descripcion =  $_POST['descripcion'];
    
        if ($_FILES["file1"]["error"]>0)
        {
            echo 'selecciones una imagen';
          
        }
        else
        {

            $nom_archivo=$_FILES['file1']['name'];
            $ruta="../../img/noticias/".$nom_archivo;
            $archivo=$_FILES['file1']['tmp_name'];
            $subir=move_uploaded_file($archivo,$ruta);
            $rutabd="img/noticias/".$nom_archivo;
        
            $insertNotic = "INSERT INTO noticias VALUES (null,'$titulo', '$descripcion','$rutabd')";

            $result = mysqli_query($enlace, $insertNotic);
            if(!$result) {
                die("Fallo la carga");
            }
            header("Location: ../agregar_noticia.php");

        }

    }

    include("desconnect_db.php");