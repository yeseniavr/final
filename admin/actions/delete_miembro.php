<?php
   include ('../includes/conexionbd.php');
    if(isset($_GET['dni'])) {
        echo 'entre a eliminar';
        $dni = $_GET['dni'];

        $consultaPersona="SELECT * FROM personas INNER JOIN beneficiarios ON personas.dni=beneficiarios.dni WHERE personas.dni='$dni' ";
        $consulta=mysqli_query($enlace,$consultaPersona);
        if (mysqli_num_rows($consulta)==1)// sila persona se encuentra registrada con usuario, y BENEFICIOS , solo se eliminará el usuario no en la tabla personas
        { 
            echo "<script>alert( 'la persona posee beneficios, solo se elminará como miembro')</script>";
            $UpdatePers = "UPDATE personas SET  tipo_id='3' WHERE dni ='$dni'";
            mysqli_query($enlace, $UpdatePers);
            header("Location: ../listar_miembros.php");    
        }
        else
        {
            $query = "DELETE FROM personas WHERE dni = $dni";
            $result = mysqli_query($enlace, $query);
            if(!$result) {
                die("no se pudo eliminar");
            }
            else{
                header("Location: ../listar_miembros.php");
            }   
        }    
    };

?>