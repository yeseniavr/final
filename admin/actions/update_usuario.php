<?php
   include ('../includes/conexionbd.php');
    if(isset($_GET['dni'])) {
        $dni = $_GET['dni'];
        $query = "SELECT * FROM usuarios WHERE dni = $dni";
    
        $result = mysqli_query($enlace, $query);
    
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $password = $row['password'];
        }
    }

    if(isset($_POST['modif_usuario'])) {  /* modificar la noticia */
        $dni = $_GET['dni'];
        $password = $_POST['password'];
        $query = "UPDATE usuarios SET password = '$password' WHERE dni ='$dni'";
        mysqli_query($enlace, $query);
        header("Location: ../listar_usuarios.php");
        
    }

?>