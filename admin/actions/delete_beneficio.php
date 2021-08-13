<?php
   include ('../includes/conexionbd.php');
echo 'entre';
if(isset($_GET['actividad_id'])) {
    echo 'entre a eliminar';
    $actividad_id = $_GET['actividad_id'];
    $dni = $_GET['dni'];
    $query = "DELETE FROM beneficiarios WHERE actividad_id = $actividad_id AND dni='$dni'";
    $result = mysqli_query($enlace, $query);
    if(!$result) {
        die("no se pudo eliminar");
    }
    header("Location: ../listar_beneficios.php?dni=$dni&actividad=$actividad_id");

};
?>