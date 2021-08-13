<?php
    include ('../../includes/conexionbd.php');
    if (isset($_POST['guardar_usuario'])) 
    {
        //datos de la persona
        $tipo='1';
        $dni=$_POST['dni'];
        $password=$_POST['password'];
        echo $dni;
        // Busca en la base datos si la persona ya ha sido registrada con usuario
        
        $consultaPersona="SELECT * FROM personas INNER JOIN usuarios ON personas.dni=usuarios.dni WHERE personas.dni='$dni' ";
        $consulta=mysqli_query($enlace,$consultaPersona);
        if (mysqli_num_rows($consulta)==1)// sila persona se encuentra registrada con usuario, envía mensaje de que ya existe
        { 
            echo "<script>alert( 'El Usuario ya se encuentra registrado')</script>";
            header("location:../agregar_usuario.php");
        }
        else
        {   //  consulta si la persona se encuentra registrada pero no con usuario
            $consultaPersona="SELECT * FROM personas  WHERE personas.dni='$dni'";
            $consultaPers=mysqli_query($enlace,$consultaPersona);
            if (mysqli_num_rows($consultaPers)==1) // si la persona se encuentra registrada
            { 
                $UpdatePers = "UPDATE personas SET  tipo_id='$tipo' WHERE dni ='$dni'";
                mysqli_query($enlace, $UpdatePers);
                $insertUsu= "INSERT INTO usuarios VALUES ('$password','$dni')";
                $result = mysqli_query($enlace, $insertUsu);
                if(!$result) {
                    die("Fallo la carga");
                } 
                else
                {
                    echo 'usuario ingresado';
                    header("location:../index.php");
                }
                
            } 
            else
            {
                echo "<script>alert('Debe registrar a la persona como miembro para poder agregarlo como uasuario')</script>";
                header("location:../agregar_usuario.php"); 
            }         
        } 
    }
    include("../../includes/desconectarbd.php");