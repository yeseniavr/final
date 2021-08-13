<?php
   include ('../includes/conexionbd.php'); 
    if(isset($_GET['id_actividad'])) {
        $id_actividad = $_GET['id_actividad'];
        $query = "SELECT actividades.titulo, actividades.descripcion as descripcionAct,id_actividad, actividades.imagen as imagenAct,fecha,area_id, areas.descripcion as descripcionArea FROM actividades INNER JOIN areas ON actividades.area_id= areas.id_area WHERE id_actividad=$id_actividad";
        $result = mysqli_query($enlace, $query);
    
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $titulo = $row['titulo'];
            $descripcion = $row['descripcionAct'];
            $imagen = $row['imagenAct'];
            $fecha=$row['fecha'];
            $area_id=$row['area_id'];
            $descripcionArea=$row['descripcionArea'];

        }
    }

    if(isset($_POST['modif_actividad'])) {  /* modificar la actividad */
        $id_actividad = $_GET['id_actividad'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fecha=$_POST['fecha'];
        $id_area=$_POST['area_id'];
        $query = "UPDATE actividades SET titulo = '$titulo', descripcion = '$descripcion' WHERE id_actividad ='$id_actividad'";
        mysqli_query($enlace, $query);


        if ($_FILES["file1"]["error"]>0)
        {
            $img = $_POST['imagenAct'];
            $query = "UPDATE actividades SET imagen = '$img' WHERE id_actividad ='$id_actividad'";    
        }
        else{
            /*if ($_FILES['imagen']['size'] <= 2000000) */
            $nom_archivo=$_FILES['file1']['name'];
            $ruta="../../img/actividades/".$nom_archivo;
            $archivo=$_FILES['file1']['tmp_name'];
            $subir=move_uploaded_file($archivo,$ruta);
            $rutabd="img/actividades/".$nom_archivo;
            $query = "UPDATE actividades SET imagen = '$rutabd' WHERE id_actividad ='$id_actividad'";
            mysqli_query($enlace, $query);
        }

        header("Location: ../listar_actividades.php");
        
    }

?>