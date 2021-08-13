<?php
    include('sidebar.php');
    include('actions/datos_option.php');

?>

<script>
  function mostrar(num) {
    var n = document.getElementById('personaNatural');
    var e = document.getElementById('personaEmp');
    if(num==0) {
      n.style.display = 'block';
      e.style.display = 'none';
    }
    else {
      e.style.display = 'block';
      n.style.display = 'none';
    }
  }
</script>

        <div class="cuerpo">
            <div class="contform">

                Tipo de Persona <br>
                <input type="radio" name="rad" checked="checked" onclick="mostrar(0)" /> Natural
                <input type="radio" name="rad" onclick="mostrar(1)" />Juridico
                <br>

                <!-- Datos a llenar si el tipo de persona es natutal -->
                <div id="personaNatural" name="nat">
                    <form class="form_ingreso"action="actions/add_miembro.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3">
                            <input type="text" class="form-control forminput " placeholder="DNI" aria-label="Nombre" name="dni">
                            </div>
                            <div class="col-md-4 forminput">
                                <input type="text" class="form-control forminput " placeholder="Nombres" aria-label="Nombre" name="nombres">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidos">
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
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" placeholder="Fecha de nacimiento" aria-label="Fecha de Nacimiento" name="fechaNac">
                        </div>
                        <div class="col-md-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefono">
                        </div>
                        <div class="col-md-2">
                            <label class="visually-hidden" for="autoSizingSelect">país</label>
                            <select class="form-select" id="autoSizingSelect" name="pais">
                                <option selected="">País</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Mexico">Mexico</option>
                            </select>
                        </div>
                        </div>
                        <br>  
                        <div class="row">
                            <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion">
                            </div>  
                            <div class="col-md-8">
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                            </div>         
                        </div>
                        <br>
                        <h4>En que área deseas participar</h4>
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
                            <div class="col-md-4">
                                    <label class="visually-hidden" for="autoSizingSelect"></label>
                                    <select class="form-select" id="tipo_id" name="tipo_id">
                                        <option selected="">tipo</option>
                                        <?php while ($conTipoNoBenf = mysqli_fetch_assoc($consulTipo_noBenf)) {
                                        // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                        echo '<option value="'.$conTipoNoBenf['id_tipo'].'">'.$conTipoNoBenf['nombre'].'</option>';
                                        }?>
                                    </select>
                                </div>
                            </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="guardar_miembro" id="guardar_miembro">
                            </div>
                            <div class="col-md-6">    
                                <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- campos a llenar si el registro es de una Empresa-->
                <div id="personaEmp"> 
                    <form class="form_ingreso"action="actions/add_miembro.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 forminput">
                                <input type="text" class="form-control forminput " placeholder="Nombre" aria-label="Nombre" name="nombres">
                            </div>
                            <div class="col-md-6">
                                <input style="display:none" type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidos" value="NA">
                            </div>
                        </div>
                        <br>
                        <div class="row">          
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Rif" aria-label="Rif" name="dni">
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
                                    <option value="Argentina">Argentina</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Mexico">Mexico</option>
                                </select>
                                </div>
                            </div>
                            <br>  
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion">
                                </div> 
                                <div class="col-md-8">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                    <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                                </div>        
                                <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefono">
                                </div>
                            </div>
                            <br>
                            <div class="row">  
                                <div class="col-md-4">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                                </div>

                            </div> 
                            <h4>En que área deseas participar</h4>
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
                            <br>
                            <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_miembro" id="guardar_miembro">
                            <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger my-2">
                        </div>  
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>