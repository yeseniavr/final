<!doctype html>
<html lang="es">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Control de datos</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <?php 
    include('includes/header.php');
    ?>
  <!--ACA COMIENZA EL CONTAINER-->
      <div class="container">

      <!--  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         

            <a class="navbar-brand" href="#">
              <img class="logo"src="images/logo.png" alt="SISTEMA SOCIOS -MACABI JAIFA"  height="90">
            </a>
  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="ingresar.html">Listar socios</a>
                <a class="nav-link" href="registro.html">Ingresar socios</a>
          
              </div>
            </div>
          
        </nav>

-->

   


  <!--      <div class= "Fondo_encabezado">
          <img clas="person"src="images/card-checklist.svg" alt="Control de Datos"><h3> 
          CONTROL DE DATOS</h3>

        </div> <div class=contform>
          <br>
        <h4>Datos ingresados</h4>

-->
<br> <br> <br> <br>



<?php
echo $_GET['nombre'];
echo $_GET['apellido'];

include ('includes/conexionbd.php');
/*
$conectar=mysqli_connect("localhost","root","","alumnos2020","3307");
if (mysqli_connect_errno()){
  echo "error"; 
}else{
  echo "se conecto finoooooooo";
}

echo "<br>";


$enlace = mysqli_connect("localhost","root","","amate","3307");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
*/

$consulTipoPers='select * from tipo_persona';
$consulta=mysqli_query($enlace,$consulTipoPers);
echo "esto es lo que traje";
var_dump ($consulta);
while ($arrayConsul=mysqli_fetch_array($consulta)){
  echo $arrayConsul['nombre'];
  echo "<br>";
}

$insertTipoPers= "INSERT INTO tipo_persona VALUES (12,'Voluntario')";

if (mysqli_query($enlace,$insertTipoPers)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $insertTipoPers . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);


?>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati asperiores eos, ipsam, dignissimos pariatur exercitationem quo labore, perferendis accusantium repellendus incidunt in quis magnam animi? Pariatur nulla maxime libero.<p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, quaerat modi praesentium ab dolores voluptatem id omnis facere laudantium harum enim quis asperiores explicabo ducimus? Temporibus recusandae sed libero odio.</p>
 </div>
  <!-- footer-->
  <?php 
    include('includes/footer.php');
    ?>
<!-- termina footer-->
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
  

  </body>
  
  
</html>

