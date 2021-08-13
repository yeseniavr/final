<?php
    include('sidebar.php');
    include('actions/datos_option.php');
?>



        <div class="cuerpo">
            <div class="contform">
                <form class="form_ingreso"action="actions/add_beneficiario.php" method="POST">
                    <h2 class="form_titulo">Agregar Beneficiario</h2>
                    <div class="row">                    
                        <div class="col-md-3">
                        <input type="text" class="form-control forminput " placeholder="DNI" aria-label="DNI" name="dni" value="<?php echo $_GET["dni"] ?>">
                        </div>
                        <div class="col-md-6 forminput">
                            <input type="text" class="form-control forminput " placeholder="Nombres" aria-label="Nombre" name="nombres">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" name="apellidos">
                        </div>
                    </div>
                    <br>
                    <div class="row">          
                        <div class="col-md-3">
                            <label class="visually-hidden" for="autoSizingSelect">sexo</label>
                            <select class="form-select" id="autoSizingSelect" name="sexo">
                                <option selected="">Sexo</option>
                                <option value="f">Femenino</option>
                                <option value="m">Masculino</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" placeholder="Fecha de nacimiento" aria-label="Fecha de Nacimiento" name="fechaNac">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Celular" aria-label="Celular" name="telefono">
                        </div>
                        <div class="col-md-3">
                            <label class="visually-hidden" for="autoSizingSelect">país</label>
                            <select class="form-select" id="autoSizingSelect" name="pais">
                                <option selected="">País</option>
                                <option value="f">colombia</option>
                                <option value="m">Brasil</option>
                            </select>
                        </div>
                    </div>
                    <br>  
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion">
                        </div>  
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Foto" aria-label="Foto" name="foto">
                        </div>         
                    </div>
                    <br>
                    <h4>En que área será otorgado el Beneficio</h4>
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
                    <h4>Actividad del área</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="visually-hidden" for="autoSizingSelect"></label>
                            <select class="form-select" id="actividad" name="actividad">
                            <option selected="">área</option>
                                <?php while ($consulAct = mysqli_fetch_assoc($consulActividad)) {
                                    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                    echo '<option value="'.$consulAct['id_actividad'].'">'.$consulAct['titulo'].'</option>';
                                }?>
                            </select>
                        </div>
                    </div>

                        <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Fecha del beneficio " aria-label="Fecha del Beneficio " name="fechaBenf">
                        </div>
                    </div>

                    <br>
                    <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_beneficiario" id="guardar_beneficiario">
                    <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger my-2">
                </form>
            </div>    
    </body>
</html>