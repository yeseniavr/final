<?php
include('includes/header.php');
if(isset($_GET["varCliente"]))
{
  $idPersona = $_GET["varCliente"];
  include ('../includes/conexionbd.php'); 
  $consulta="";

  $consUsuario="select * from personas where dni= '$idPersona'";
  $consulta=mysqli_query($enlace,$consUsuario);

   if ($arrayConsul=mysqli_fetch_array($consulta)){
     $id=$arrayConsul['nombres'];
     echo 'Bienvenida';
     echo $id;
   }

}
echo 'hola';

?>