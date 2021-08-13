<?php
    include('sidebar.php');
    include('actions/datos_option.php');
?>

        <div class="cuerpo">
            <form class="form_ingreso" action="actions/add_actividad.php" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
            <h2 class="form_titulo">Agregar Actividad</h2>
            <h4>Área a la que pertenece la Actividad</h4>
                <div class="row">
                <div class="col-md-4">
                            <label class="visually-hidden" for="autoSizingSelect"></label>
                            <select class="form-select" id="area" name="area">
                            <option selected="">área</option>
                                <?php while ($consulA = mysqli_fetch_assoc($consulAreas)) {
                                    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                    echo '<option value="'.$consulA['id_area'].'">'.$consulA['nombre'].'</option>';
                                }?>
                            </select>
                        </div>
                </div>
                <input class="form_input" type="text" name="titulo" id="titulo" placeholder="Nombre..." >
                
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción..."></textarea>
                <div class="col-md-3">
                        <input type="date" class="form-control" placeholder="Fecha de la Actividad" aria-label="Fecha de la Actividad" name="fechaAct">
                </div>
                <label for="img" class="mt-4">Seleccionar imagen</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>

                <div class="row">
                    <div class="col-md-6">
                        <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="guardar_actividad" id="guardar_actividad">
                    </div>            
                    <div class="col-md-6">
                        <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-dange">
                    </div>
                </div>     
            </form>


        </div>
    </body>
</html>