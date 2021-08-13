<?php
    include ('../includes/conexionbd.php');

    if (isset($_POST['guardar_actividad'])) { // si el bonton fué precionado
        $titulo = $_POST['titulo'];
        $descripcion =  $_POST['descripcion'];
        $fecha= date('y-m-d',strtotime($_POST['fechaAct']));

        $img= 'hola';
        $area_id=$_POST['area'];

        if ($_FILES["file1"]["error"]>0)
        {
            echo 'selecciones una imagen'; 
          
        }
        else
        {
           
            $nom_archivo=$_FILES['file1']['name'];
            $ruta="../../img/actividades/".$nom_archivo;
            $archivo=$_FILES['file1']['tmp_name'];
            $subir=move_uploaded_file($archivo,$ruta);
            $rutabd="img/actividades/".$nom_archivo;

            $insertAct = "INSERT INTO actividades VALUES (null,'$titulo', '$descripcion','$fecha','$rutabd',$area_id)";

            $result = mysqli_query($enlace, $insertAct);
            if(!$result) {
                die("Fallo la carga");
            }
        }
        header("Location: ../agregar_actividad.php");

    }

    include("desconnect_db.php");