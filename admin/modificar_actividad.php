<?php
include('sidebar.php');
include('actions/update_actividad.php');
include('actions/datos_option.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3">Modificar Actividad</h1>
    
    <!-- Content Row -->
    <!-- <div id="okMessage"> -->
    <div class="row">
    <div class="col-md-4">

    </div>
    </div>
</div>  
    <!-- </div> -->

    <form action="actions/update_actividad.php?id_actividad=<?php echo $_GET['id_actividad']?>" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
        <div class="d-flex flex-row">
        <div class="row">
            <div class="col-8">

                <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" class="form-control my-2">

                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" value="<?php echo $descripcion ?>"><?php echo $descripcion ?></textarea>
    
                <input type="date" class="form-control" placeholder="Fecha de la Actividad" aria-label="Fecha de la Actividad" name="fecha" value="<?php echo $fecha ?>">
           
            </div>
            <div class="col-8">
            
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                <br>  <span>Imagen actual: </span> 
                
                <img src="../<?php echo $imagen ?>" value = "<?php echo $row['imagenAct']; ?>" alt="image de la actividad" class="img-thumbnail"/>
                <br><input  name="imagenAct" value = "<?php echo $row['imagenAct'] ?>" disabled>

            </div> 
            <div class="col-8">
                <label class="visually-hidden" for="autoSizingSelect"></label>
                <select class="form-select" id="area" name="area_id">
                    <?php while ($consulA = mysqli_fetch_assoc($consulAreas)) {
                        // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                        
                        if($consulA['id_area'] == $area_id){
                            echo '<option'.' value="'.$consulA['id_area'].'" selected="selected">'.$consulA['nombre']. '</option>';
                            }
                            else{    
                        echo '<option'.' value="'.$consulA['id_area'].'">'.$consulA['nombre']. '</option>';
                            }
                    }?>
                </select>
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <input  class="form_input" type="submit" value="Actualizar" class="btn btn-outline-success " name="modif_actividad" id="guardar_actividad">
                </div>
                <div class="col-md-6">  
                    <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                </div>
            </div>    
        </div> 
        </div>   
    </form>
      
  
</div>


</div>

<?php
//require_once 'includes/footer.php';
?>