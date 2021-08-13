<?php
include('sidebar.php');
include('actions/update_usuario.php');
?>

<div class="cuerpo">

    <form class= "form_ingresoUsu" class="form_ingreso" action="actions/update_usuario.php?dni=<?php echo $_GET['dni']?>" method="POST"  class="d-flex flex-column col-10">
    <h2 class="form_titulo">Actualización contraseña</h2>
        <div class="col-5">
            <input class ="form_input" type="text" placeholder="&#128272; Usuario" value="<?php echo $dni; ?>" name="dni" disabled>
            <input class ="form_input" type="text" placeholder="&#128272; Password" value="<?php echo $password; ?>" name="password" required>
        </div>
     
        <div class="row">
            <div class="col-md-6">
            <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="modif_usuario" id="guadar_usuario">
            </div>
            <div class="col-md-6">    
                <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
            </div>   
        </div>
    </form>
      
  
</div>


</div>

