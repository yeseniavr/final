<?php
   include ('../includes/conexionbd.php'); 
    if(isset($_GET['actividad_id'])) {
        $actividad_id = $_GET['actividad_id'];
        $dni = $_GET['dni'];
        $query = "SELECT * FROM beneficiarios  INNER JOIN actividades ON beneficiarios.actividad_id= actividades.id_actividad WHERE beneficiarios.actividad_id='$actividad_id' and dni='$dni'";
        $result = mysqli_query($enlace, $query);
    
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $area_id = $row['area_id'];
            $fecha_beneficio=$row['fecha_beneficio'];
            $titulo=$row['titulo'];

        }
    }

    if(isset($_POST['modif_beneficio'])) {  /* modificar la actividad */
        $actividad_id = $_POST['actividad_id'];
        $fecha_beneficio=$_POST['fechaBenf'];
        $dni=$_POST['dni'];
        echo $actividad_id; echo '<br>';
        echo $fecha_beneficio; echo '<br>';
        echo $dni;
        $query = "UPDATE beneficiarios SET fecha_beneficio = '$fecha_beneficio' WHERE actividad_id ='$actividad_id' and  dni='$dni'";
        mysqli_query($enlace, $query);

    header("Location: ../listar_beneficios.php?dni=$dni");
        
    }

?>