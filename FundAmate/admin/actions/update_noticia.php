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
    $imagen = $_POST['imagen'];
    $query = "UPDATE noticias SET titulo = '$titulo', descripcion = '$descripcion', imagen = 'xxx' WHERE id_noticia ='$id_noticia'";
    mysqli_query($enlace, $query);
    header("Location: ../listar_noticias.php");
       
}

?>