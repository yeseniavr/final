<?php
include('sidebar.php');
include('actions/update_noticia.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3">Modificar Noticia</h1>
    
    <!-- Content Row -->
    <!-- <div id="okMessage"> -->
    <div class="row">
    <div class="col-md-4">

    </div>
    </div>
</div>  
    <!-- </div> -->

    <form action="actions/update_noticia.php?id_noticia=<?php echo $_GET['id_noticia']?>" method="POST"  class="d-flex flex-column col-10">
    <div class="d-flex flex-row">
        <div class="col-5">

            <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" class="form-control my-2">

            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" value="<?php echo $descripcion ?>"><?php echo $descripcion ?></textarea>
    
    </div>
    <div class="col-5">
        <label for="img" class="mt-4">Seleccionar imagen</label>
        <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">
            <img src="actions/img_uploads/<?php echo $imagen ?>"  alt="profile-image" class="img-thumbnail"/></br>


    </div>
    </div>
        <div>
            <input type="submit" value="Actualizar" class="btn btn-outline-success my-2 mr-2" name="modif_noticia" id="guardar_emp">
            <input type="reset" value="Borrar" class="btn btn-outline-danger my-2">
        </div>
    </form>
      
  
</div>


</div>

<?php
//require_once 'includes/footer.php';
?>