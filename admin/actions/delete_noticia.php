<?php
   include ('../includes/conexionbd.php');
echo 'entre';
if(isset($_GET['id_noticia'])) {
    echo 'entre a eliminar';
    $id_noticia = $_GET['id_noticia'];
    $query = "DELETE FROM noticias WHERE id_noticia = $id_noticia";
    $result = mysqli_query($enlace, $query);
    if(!$result) {
        die("no se pudo eliminar");
    }
    header("Location: ../listar_noticias.php");
};
?>