
<html lang="es">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ingresar datos</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body> 
    <div class="container">
      <form id="form_ingresoUsu" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h2 class="form_titulo">Ingreso de Usuario</h2>
        <input class ="form_input" type="text" placeholder="&#128272; Usuario" name="usuario" required>
        <input class ="form_input" type="password" placeholder="&#128272; Password" name="password" required>
        <input class ="form_input" type="submit" name="Ingresar" value="Ingresar"></input>
        <br>
        <h6>Usuario prueba: 15203027 Contraseña:1234</h2>
        <br>
        <a href="index.php" placeholder="&#128272;"> ir al Inicio</a>
      </form>
    </div>
    <?php
   session_start();
      
    if(isset($_POST['Ingresar'])) 
    {
      $dni = $_POST['usuario'];
      $password= $_POST['password'];
      $consulta="";
      include ('includes/conexionbd.php');
      $consUsuario="select * from usuarios INNER JOIN personas ON usuarios.dni=personas.dni where usuarios.dni= '$dni' and password='$password'";
      $consulta=mysqli_query($enlace,$consUsuario);
      $filas=mysqli_num_rows($consulta);
      if ($filas>0){
        $row = mysqli_fetch_assoc($consulta);
        $_SESSION['usuario']= $dni;
        $_SESSION['pass']=$row['password'];
        $_SESSION['nombres']=$row['nombres'];
        $_SESSION['apellidos']=$row['apellidos'];
        header("location:admin/index.php");
        }
      else{
        echo "Error en la autenticación";
      }
        include('includes/desconectarbd.php');
    } 
    exit();
    ?>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            -->
      
  </body>
</html>
