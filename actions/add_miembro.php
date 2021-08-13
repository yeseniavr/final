<?php
include ('../includes/conexionbd.php');
    
    if (isset($_POST['guardar_miembro'])) 
    {
        
        //datos de la persona
        $dni=$_POST['dni'];
        $nombres= $_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $sexo=$_POST['sexo'];
        $fecha_nac=$_POST['fechaNac']; 
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $pais=$_POST['pais'];
        $direccion=$_POST['direccion'];
        $area_id=$_POST['area'];
        $tipo_id=$_POST['tipo_id'];
        
        if ($apellidos=="NA"){
            $tipo_id="2";
        }

       // Busca en la base datos si la persona ya ha sido registrada con usuario
        
        $consultaPersona="SELECT * FROM personas WHERE personas.dni='$dni' ";
        $consulta=mysqli_query($enlace,$consultaPersona);
        if (mysqli_num_rows($consulta)==1)// sila persona se encuentra registrada con usuario, envía mensaje de que ya existe
        {
            
            //consulta si a pesar de estrar registrada la persona , solo lo está como benefiiario y lo modifica a miembro
            $consultaBenefiario="SELECT * FROM personas  WHERE personas.dni='$dni' and personas.tipo_id='3'";
            $consulBenef=mysqli_query($enlace,$consultaBenefiario);
            if (mysqli_num_rows($consulta)==1){ // si la persona se encuentra registrada como BENEFICIARIO
                $UpdatePers = "UPDATE personas SET tipo_id='$tipo_id' WHERE dni ='$dni'";
                mysqli_query($enlace, $UpdatePers);
                            
               // header("location:https://api.whatsapp.com/send?phone=$telefono&text=Estimado%20$nombres%20Gracias%20unirte%20a%20la%20Fundacion%20Amate%20.%20Nos%20estaremos%20comunicado%20por%20esta%20vía");
                echo '<script>console.log("Usted se ha unido correctamente. Gracias. Presione aceptar para continuar")</scrpipt>';
                header("location:../index.php");
                
            }
            else
            {    
                echo "<script>alert( 'Dni ya registrado')</script>";
                header("location:../participar.php");
            }
        }
        else
        {

            if ($_FILES["file1"]["error"]>0)
            {
                $nom_archivo="img/logoPeq.png";
                $ruta="../img/miembros/".$nom_archivo;
                $archivo="img/logoPeq.png";
                $subir=move_uploaded_file($archivo,$ruta);
                $rutabd="img/miembros/".$nom_archivo;              
            }
            else
            {
                /*if ($_FILES['imagen']['size'] <= 2000000) */
                $nom_archivo=$_FILES['file1']['name'];
                $ruta="../img/miembros/".$nom_archivo;
                $archivo=$_FILES['file1']['tmp_name'];
                $subir=move_uploaded_file($archivo,$ruta);
                $rutabd="img/miembros/".$nom_archivo;
            }        
            $insertPers= "INSERT INTO personas VALUES ('$dni','$nombres','$apellidos','$sexo','$fecha_nac','$email','$telefono','$pais','$direccion','$rutabd','$tipo_id','$area_id')";
            $result = mysqli_query($enlace, $insertPers);
            if(!$result) {
                die("no se pudo agregar");
            } 
            else
            {
            //    header("location:https://api.whatsapp.com/send?phone=$telefono&text=Estimado%20$nombres%20Gracias%20unirte%20a%20la%20Fundacion%20Amate%20.%20Nos%20estaremos%20comunicado%20por%20esta%20vía");
             echo '<script>console.log("Usted se ha unido correctamente. Gracias. Presione aceptar para continuar")</scrpipt>';
                header("location:../index.php");
            }     
        } 
    }         
    include("../includes/desconectarbd.php");