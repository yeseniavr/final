<?php
   include ('../includes/conexionbd.php');
$valor=$_REQUEST['act'];
echo 'llego el valor';
echo $valor;
$consultaActividades= "SELECT *  FROM actividades WHERE area_id='$valor'";
$consultaAct= mysqli_query($enlace,$consultaActividades);
//header("Location: listar_actividades.php")
/*if (!empty ($_SERVER['HTTP_X_REQUESTED_WITH'])){
    $valor=$_POST["valor "];
    switch ($valor){
    case 1:
        $datos="<option value=''>selecciones </option>";
        $datos=$datos."<option value='1'>opcion A 1 </option>";
        $datos=$datos."<option value='1'>opcion A 2 </option>";
    break;
    case 2:
        $datos=$datos."<option value='1'>opcion B 1 </option>";
        $datos=$datos."<option value='1'>opcion B 2 </option>";        
    break;
    defaul:
    $datos=$datos."<option value='1'>opcion C 1 </option>";
    $datos=$datos."<option value='1'>opcion C 2 </option>";        

    }
    $resp=[
    "error"=>$error,
    "mensaje"=>$mensaje,
    "datos"=>$datos
    ];
    echo json_encode($resp);
}*/

?>