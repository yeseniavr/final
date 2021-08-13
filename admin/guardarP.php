<?php
    if (isset($_POST['guadar'])){
        $dni=$_POST['cedula'];
        $nombres= $_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $sexo=$_POST['sexo'];
        $fecha_nac=$_POST['fechaNac'];
        $profesion=$_POST['profesion'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $pais=$_POST['pais'];
        $direccion=$_POST['direccion'];
        $foto=$_POST['foto'];
        $area=$_POST['area'];
        
  /*     $usuario=$_POST['usuario']; se usará para el registro de un administrativo
        $password=$_POST['password'];*/

        include('../includes/conexionbd.php');
        $consultaPersona="select * from personas where dni='$dni'";
        $consulta=mysqli_query($enlace,$consultaPersona);
        if (mysqli_num_rows($consulta)==1){
            echo "<script>alert( 'Dni ya registrado')</script>";
            header("location:participar.php");
        }else{ /* COMO ES UN REGISTRO DE VOLUNTARIO, CONTINUA CON EL REGISTRO*/ 
            /*si la persona no ha sido registrada verifica el usuario*/ 
            /*$consultaPersona="select * from usuarios where usuario='$usuario'";
            $consulta=mysqli_query($enlace,$consultaPersona);
            if ($consulta){
                echo "usuario ya registrado";
                header("location:../participar.php");
            }
            else{
                registrar en tabla persona y tabla usuario
            }
            */
            $insertPers= "INSERT INTO personas VALUES ('$dni','$nombres','$apellidos','$sexo','$fecha_nac','$profesion','$email','$telefono','$pais','$direccion','$foto','$area','2')";
            if (mysqli_query($enlace,$insertPers)) {
                echo "usuario registrado con exito";
                header("location:index.php"); 
            } else {
                echo "Error: " . $inserPers . "<br>" . mysqli_error($enlace);
            }   
        }
        mysqli_close($enlace);
    }      
?>