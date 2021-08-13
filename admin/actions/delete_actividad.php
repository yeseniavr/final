<?php
   include ('../includes/conexionbd.php');
echo 'entre';
if(isset($_GET['id_actividad'])) {
    echo 'entre a eliminar';
    $id_actividad = $_GET['id_actividad'];
    $query = "DELETE FROM actividades WHERE id_actividad = $id_actividad";
    $result = mysqli_query($enlace, $query);
    if(!$result) {
        die("no se pudo eliminar");
    }
    header("Location: ../listar_actividades.php");
};
?>