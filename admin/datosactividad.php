<?php 
   include ('../includes/conexionbd.php');

$continente=$_POST['continente'];


$consultaActividades= "SELECT *  FROM actividades WHERE area_id='$continente'";
$consultaAct= mysqli_query($enlace,$consultaActividades);

	$cadena="<label>Actividades</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($consultaAct)) {
		$cadena=$cadena.'<option value='.$ver['0'].'>'.utf8_encode($ver['1']).'</option>';
	}

	echo  $cadena."</select>";
	

?>