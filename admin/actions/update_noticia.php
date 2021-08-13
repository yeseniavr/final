<?php
   include ('../includes/conexionbd.php');
    if(isset($_GET['id_noticia'])) {
        $id_noticia = $_GET['id_noticia'];
        $query = "SELECT * FROM noticias WHERE id_noticia = $id_noticia";
    
        $result = mysqli_query($enlace, $query);
    
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
            $imagen = $row['imagen'];
        }
    }

    if(isset($_POST['modif_noticia'])) {  /* modificar la noticia */
        $id_noticia = $_GET['id_noticia'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $query1 = "UPDATE noticias SET titulo = '$titulo', descripcion = '$descripcion' WHERE id_noticia ='$id_noticia'";
        mysqli_query($enlace, $query1);

        if ($_FILES["file1"]["error"]>0)
        {
            $img = $_POST['imagenNot'];
            $query = "UPDATE noticias SET imagen = '$img' WHERE id_noticia ='$id_noticia'";    
        }
        else{
            $nom_archivo=$_FILES['file1']['name'];
            $ruta="../../img/noticias/".$nom_archivo;
            $archivo=$_FILES['file1']['tmp_name'];
            $subir=move_uploaded_file($archivo,$ruta);
            $rutabd="img/noticias/".$nom_archivo;
            $query = "UPDATE noticias SET imagen = '$rutabd' WHERE id_noticia ='$id_noticia'";
            mysqli_query($enlace, $query);
        }
        header("Location: ../listar_noticias.php");
        
    }

?>