<?php
include('sidebar.php');
include('actions/update_noticia.php');
?>


    <form action="actions/update_noticia.php?id_noticia=<?php echo $_GET['id_noticia']?>" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
    <div class="d-flex flex-row">
        <div class="col-5">

            <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" class="form-control my-2">

            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" value="<?php echo $descripcion ?>"><?php echo $descripcion ?></textarea>
    
        </div>
        <div class="col-5">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                    <span>Imagen actual: </span>
            
            <img src="../<?php echo $row['imagen'] ?>" value = "<?php echo $row['imagen'] ?>" alt="profile-image" class="img-thumbnail"/>
            <br><input  name="imagenNot" value = "<?php echo $row['imagen'] ?>">

        </div>

    <div class="row">
        <div class="col-md-6">
        
            <input class="form_input" type="submit" value="Actualizar" class="btn btn-outline-success " name="modif_noticia" id="modif_noticia">
        </div>
        <div class="col-md-6">
            <input  class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
        </div>    
        </div>
    </form>
      
  
</div>


</div>

<?php
//require_once 'includes/footer.php';
?>