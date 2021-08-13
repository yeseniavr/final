<?php
   include ('../includes/conexionbd.php');
    if(isset($_GET['dni'])) {
        $dni = $_GET['dni'];
        $query = "SELECT * FROM personas  WHERE dni = $dni";
    
        $result = mysqli_query($enlace, $query);
    
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombres = $row['nombres'];
            $apellidos=$row['apellidos'];
            $sexo=$row['sexo'];
            $fecha_nac=$row['fecha_nac'];
            $email=$row['email'];
            $telefono=$row['telefono'];
            $pais=$row['pais'];
            $direccion=$row['direccion'];
            $foto= $row['foto'];
            $area_id=$row['area_id'];
            $tipo_id= $row['tipo_id'];
        }
    }

    if(isset($_POST['modif_miembro'])) {  /* modificar la noticia */
        $dni = $_GET['dni'];
        $nombres= $_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $sexo=$_POST['sexo'];
        $fecha_nac=$_POST['fechaNac'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $pais=$_POST['pais'];
        $direccion=$_POST['direccion'];
        if ($apellidos=='NA'){
            $tipo_id='2';
        }
        else
        {    
            $tipo_id=$_POST['tipo_id'];
        }
        $area_id=$_POST['area_id'];
        $query = "UPDATE personas SET nombres = '$nombres', apellidos='$apellidos',sexo='$sexo',fecha_nac='$fecha_nac',email='$email',telefono='$telefono',pais='$pais',direccion='$direccion',foto='$foto',tipo_id=$tipo_id, area_id='$area_id' WHERE dni ='$dni'";
        mysqli_query($enlace, $query);

        if ($_FILES["file1"]["error"]>0)
        {
            $img = $_POST['imagenMiemb'];
            $query = "UPDATE personas SET foto=' = '$img' WHERE dni ='$dni'";   
        }
        else{
  
            $nom_archivo=$_FILES['file1']['name'];
            $ruta="../../img/miembros/".$nom_archivo;
            $archivo=$_FILES['file1']['tmp_name'];
            $subir=move_uploaded_file($archivo,$ruta);
            $rutabd="img/miembros/".$nom_archivo;
            echo $rutabd;
            $query = "UPDATE personas SET foto = '$rutabd' WHERE dni ='$dni'";  
            mysqli_query($enlace, $query);
            echo 'si pidio modificar';
        }

        header("Location: ../listar_miembros.php");
        
    }

?>