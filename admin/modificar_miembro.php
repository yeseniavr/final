<?php
include('sidebar.php');
include('actions/update_miembro.php');
include('actions/datos_option.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3">Modificar Miembro</h1>
    
    <!-- Content Row -->
    <!-- <div id="okMessage"> -->
    <div class="row">
        <div class="col-md-4">

        </div>
    </div>

    <!-- </div> -->
    <!-- Datos a llenar si el tipo de persona es natutal -->
    <div class="cuerpo">
        <div class="contform">
           <?php if  ($apellidos !='NA'){?>
                <div id="personaNatura" name="nat">
                    <form action="actions/update_miembro.php?dni=<?php echo $_GET['dni']?>" method="POST"  class="d-flex flex-column col-10"  enctype="multipart/form-data">
                        
                        <div class="row">
                            <div class="col-md-3">
                            <input type="text" class="form-control forminput " placeholder="DNI" aria-label="Nombre" name="dni" value="<?php echo $dni; ?>" disabled>
                            </div>
                            <div class="col-md-4 forminput">
                                <input type="text" class="form-control forminput " placeholder="Nombres" aria-label="Nombre" name="nombres" value="<?php echo $nombres; ?>">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidos" value="<?php echo $apellidos; ?>">
                            </div>
                        </div>
                        <br>
                        <div class="row">          
                            <div class="col-md-2">
                            <label class="visually-hidden" for="autoSizingSelect">sexo</label>
                            <select class="form-select" id="autoSizingSelect" name="sexo">
                                <option selected="">Sexo</option>
                                <option value="f">Femenino</option>
                                <option value="m">Masculino</option>
                                <?php if($sexo == "f"){
                                        echo '<option'.' value="'.$sexo.'" selected="selected">'.'femenino'. '</option>';
                                     }
                                     else{    
                                        echo '<option'.' value="'.$sexo.'" selected="selected">'.'masculino'. '</option>';
                                    }
                                ?>     
                            </select>
                        </div>
                        <div class="col-md-3">

                        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" aria-label="Fecha de la Nacimiento" name="fechaNac" value="<?php echo $fecha_nac ?>">

                        </div>
                        <div class="col-md-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email"  value="<?php echo $email; ?>">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefono"  value="<?php echo $telefono; ?>">
                        </div>
                        <div class="col-md-2">
                            <label class="visually-hidden" for="autoSizingSelect">país</label>
                            <select class="form-select" id="autoSizingSelect" name="pais">
                                <option selected="">País</option>
                                <option value="Colombia">colombia</option>
                                <option value="Brasi">Brasil</option>
                            </select>
                        </div>
                        </div>
                        <br>  
                        <div class="row">
                            <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion"  value="<?php echo $direccion; ?>">
                            </div>  
                            <div class="col-5">
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                                        <span>Imagen actual: </span>
                                
                                <img src="../<?php echo $row['foto'] ?>" value = "<?php echo $row['foto'] ?>" alt="profile-image" class="img-thumbnail"/>
                                <br><input  name="imagenMiemb" value = "<?php echo $row['foto'] ?>" disabled>

                            </div>         
                        </div>
                        <br>
                        <h4>En que área deseas participar</h4>
                        <div class="row">
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                    <label class="visually-hidden" for="autoSizingSelect"></label>
                                    <select class="form-select" id="tipo_id" name="tipo_id">
                                    <?php while ($consulT = mysqli_fetch_assoc($consulTipo_noBenf)) {
                                    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                    
                                    if($consulT['id_tipo'] == $tipo_id){
                                        echo '<option'.' value="'.$consulT['id_tipo'].'" selected="selected">'.$consulT['nombre']. '</option>';
                                     }
                                     else{    
                                    echo '<option'.' value="'.$consulT['id_tipo'].'">'.$consulT['nombre']. '</option>';
                                     }
                                }?>
                            </select>
                                </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                            <input  class="form_input" type="submit" value="Actualizar" class="btn btn-outline-success" name="modif_miembro" id="guardar_miembro">
                            </div>
                            <div class="col-md-6">    
                            <input  class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                            </div>
                    </form>
                </div>
                <!-- campos a llenar si el registro es de una Empresa-->
            <?php } 
            else {?>   
                <div id="personaEm">
                  
                    <form action="actions/update_miembro.php?dni=<?php echo $_GET['dni']?>" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 forminput">
                                <input type="text" class="form-control forminput " placeholder="Nombre" aria-label="Nombre" name="nombres" value="<?php echo $nombres; ?>">
                            </div>
                            <div class="col-md-6">
                                <input style="display:none" type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidos" value="NA" >
                            </div>
                        </div>
                        <br>
                        <div class="row">          
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Rif" aria-label="Rif" name="dni" value="<?php echo $dni; ?>" disablet>
                            </div>
                            <div class="col-md-3">
                                <input style="display:none" type="datetime" class="form-control" placeholder="Fecha de nacimiento" aria-label="Fecha de Nacimiento" name="fechaNac" value="20/07/2021">
                            </div>
                            <div class="col-md-3" style="display:none">
                                <label class="visually-hidden" for="autoSizingSelect">sexo</label>
                                <select class="form-select" id="autoSizingSelect" name="sexo" value="NA">
                                    <option selected="">Sexo</option>
                                    <option value="f">Femenino</option>
                                    <option value="m">Masculino</option>
                                </select>
                                </div> 
                                <div class="col-md-3">
                                <label class="visually-hidden" for="autoSizingSelect">país</label>
                                <select class="form-select" id="autoSizingSelect" name="pais">
                                    <option selected="">País</option>
                                    <option value="colombia">colombia</option>
                                    <option value="Brasil">Brasil</option>
                                </select>
                                </div>
                            </div>
                            <br>  
                            <div class="row">
                                <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion" value="<?php echo $direccion; ?>">
                                </div> 
                                <div class="col-md-8">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                    <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                                            <span>Imagen actual: </span>
                                    
                                    <img src="../<?php echo $row['foto'] ?>" value = "<?php echo $row['foto'] ?>" alt="profile-image" class="img-thumbnail"/>
                                    <br><input  name="imagenMiemb" value = "<?php echo $row['foto'] ?>" disabled>
                                </div>         
                                <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefono" value="<?php echo $telefono; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">  
                                <div class="col-md-4">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" value="<?php echo $email; ?>">
                                </div>

                            </div> 
                            <h4>En que área deseas participar</h4>
                            <div class="row">
                                <div class="col-md-4">
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
                            </div>
                            <br>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input  class="form_input" type="submit" value="Actualizar" class="btn btn-outline-success my-2 mr-2" name="modif_miembro" id="guardar_miembro">
                            </div>
                            <div class="col-md-6">
                                <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger my-2">
                            </div>
                        </div>    
                    </form>
                </div>
                <?php } ?>

  
</div>
</div>  

</div>

<?php
//require_once 'includes/footer.php';
?>