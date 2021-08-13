<?php
    include('sidebar.php');
    include('actions/datos_option.php');
    include('actions/update_beneficio.php');

      
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>
<div class="cuerpo">
    <div class="contform">
        <form class="form_ingreso"action="actions/update_beneficio.php" method="POST">
                    <div class="row">                    
                        <div class="col-md-3">
                        <input type="text" name="dni" value="<?php echo $_GET["dni"] ?>" style="display:none">
                        <input type="text" class="form-control forminput " placeholder="DNI" aria-label="DNI" name="dnis" value="<?php echo $_GET["dni"] ?>" disabled >
                    </div>
                    <br>
                    <h4>Actividad del Beneficio</h4>
                    <input type="text" name="actividad_id" value="<?php echo $actividad_id ?>" style="display:none">
                    <input type="text" class="form-control forminput"  value="<?php echo $titulo; ?>" disabled >

                        <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Fecha del beneficio " aria-label="Fecha del Beneficio " name="fechaBenf" value="<?php echo $fecha_beneficio?>">
                        </div>
                        <br>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="modif_beneficio" id="modif_beneficio">
                        </div>
                        <div class="col-md-6">                        
                            <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                        </div>
                    </div>    
        </form>
    </div>
</div>                            
