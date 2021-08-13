
<?php
    include ('../../includes/conexionbd.php');
    if (isset($_POST['guardar_beneficio'])) 
    {
        //datos de la persona
        $dni=$_POST['dni'];
        $actividad_id=$_POST['lista2'];

        //datos del beneficio
        $fecha_Benf= $_POST['fechaBenf'];
        echo $fecha_Benf;

        $consultaPersona="SELECT * FROM personas WHERE personas.dni='$dni'";
        $consulPers=mysqli_query($enlace,$consultaPersona);
        if (mysqli_num_rows($consulPers)==1) // sila persona se encuentra registrada SIN BENEFICIOS
        { 
                echo 'Dni ya registrado, se agrega solo el beneficio';
            $insertUsu= "INSERT INTO beneficiarios VALUES ('$dni','$actividad_id','$fecha_Benf')";
            $result = mysqli_query($enlace, $insertUsu);
            if(!$result) 
            {
                die("Fallo la carga del usuario");
            } 
            else
            {
                    
             header("location:../listar_beneficios.php?dni=$dni");
            }
            
        }
 
    }
    include("../../includes/desconectarbd.php");