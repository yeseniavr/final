
<?php
   include ('../includes/conexionbd.php');

    //selecciona todas las areas
    $consultaAreas = "SELECT * FROM areas";
    $consulAreas = mysqli_query($enlace, $consultaAreas);

        //selecciona todas las areas
    $consultaActividades = "SELECT * FROM actividades";
    $consulActividad = mysqli_query($enlace, $consultaActividades);

    //selecciona los tipos de personas
    $consultatiperson_noBenf = "SELECT * FROM tipo_persona WHERE id_tipo='1' OR id_tipo='2'";
    $consulTipo_noBenf = mysqli_query($enlace, $consultatiperson_noBenf);
?>
