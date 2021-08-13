<?php
    include('sidebar.php');
    include('actions/datos_option.php');

      
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
        <form class="form_ingreso"action="actions/add_beneficio.php" method="POST">
                    <div class="row">                    
                        <div class="col-md-3">
                        <input type="text" name="dni" value="<?php echo $_GET["dni"] ?>" style="display:none">
                        <input type="text" class="form-control forminput " placeholder="DNI" aria-label="DNI" name="dnis" value="<?php echo $_GET["dni"] ?>" disabled >
                        </div>
                    <br>
                    <h4>En que área será otorgado el Beneficio</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="visually-hidden" for="autoSizingSelect"></label>
                            <select class="form-select" id="lista1" name="lista1" > 
                            
                                <?php while ($consulA = mysqli_fetch_assoc($consulAreas)) {
                                    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                    echo '<option value="'.$consulA['id_area'].'">'.$consulA['nombre'].'</option>';
                                }?>
                            </select>
                        </div>
                    </div>
                    <h4>Actividad del área</h4>
                    <div class="row">
                        <div class="col-md-4">
                                
                            <div id="select2lista"></div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Fecha del beneficio " aria-label="Fecha del Beneficio " name="fechaBenf">
                        </div>
                        <br>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_beneficio" id="guardar_beneficio">
                        </div>
                        <div class="col-md-6">
                            <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger my-2">
                            </div>
                            </div>
        </form>
    </div>
</div>                            

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datosactividad.php",
			data:"continente=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
