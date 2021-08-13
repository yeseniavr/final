<?php
    include('includes/header.php');
    include('includes/datos_option.php');

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
                <div id="Tipopersona">
                    <h2 class="titulos">Registro de Voluntario </h2> <br>
                    <h3 class="dato">Tipo de persona</h3>
                    <input type="radio"  name="rad" checked="checked" onclick="mostrar(0)"/> Natural
                    <input type="radio"  name="rad" onclick="mostrar(1)" /> Juridico
                </div>
                <!-- Datos a llenar si el tipo de persona es natutal -->
                <div id="personaNatural" name="nat">
                    <form class="form_ingreso"action="actions/add_miembro.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="number" class="form-control forminput " placeholder="DNI" aria-label="DNI" name="dni"  pattern="[0-9]{10}"  title="Documento de identificación" required>
                            </div>  
                            <div class="col-md-5 forminput">
                                <input type="text" class="form-control forminput " placeholder="Nombres" aria-label="Nombre" name="nombres" required  title=" su nombre. Tamaño mínimo: 2. Tamaño máximo: 25" >
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellido" name="apellidos" minlength="2" maxlength="25"  required>
                            </div>
                        </div>
                        <br>
                        <div class="row">          
                            <div class="col-md-2">
                                <select class="form-select form-control" id="autoSizingSelect" name="sexo" required>
                                    <option selected="">Sexo</option>
                                    <option value="f">Femenino</option>
                                    <option value="m">Masculino</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control" placeholder="Fecha de nacimiento" aria-label="Fecha de Nacimiento" name="fechaNac" max="2003-01-01 title=" Debe ser mayor de edad para participar como voluntario" required><h6>fecha de Nacimiento<h6> 
                            </div>
                            <div class="col-md-7">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" required>
                            </div>
                        </div>    
                        <div class="row"> 
                            <div class="col-md-4">
                                <input type="tel" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefono" pattern="\[0-9]{3}\ [0-9]{3}[ -][0-9]{4}" title=" Un numero de teléfono consta de 3 digitos de código area, un espacio 3 digitos seguidos de un espacio o guión(-) y 4 digitos mas" required>
                            </div>
                            <div class="col-md-2">
                                <select class="form-select form-control" id="autoSizingSelect" name="pais" requireD>
                                    <option selected="">País</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Venezuela">Venezuela</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion" required > <!--pattern="[A-Za-z0-9]{5,200}"
                                title="Letras y números. Tamaño mínimo: 4. Tamaño máximo: 200"-->
                            </div>  
                        </div> <br>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden"  name="MAX_FILE_SIZE" value="2000000" />
                                <i  aria-hidden="true"><input type="file" name="file1" id="file1" title="Foto. No es obligatorio" ></i>
                            </div>
                        </div>
                        <En class="dato">En que área deseas participar</h5>
                        <div class="row">
                            <div class="col-md-4">
                            <label class="visually-hidden" for="autoSizingSelect"></label>
                            <select class="form-select form-control" id="area" name="area">
                                <option selected="">área</option>
                                    <?php while ($consulA = mysqli_fetch_assoc($consulAreas)) {
                                        // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                        echo '<option value="'.$consulA['id_area'].'">'.$consulA['nombre'].'</option>';
                                    }?>
                                </select>
                            </div>
                            <div class="col-md-4" style="display:none">
                                <input type="text" class="form-control"  name="tipo_id" value="2">
                            </div>
                        </div>
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
                                    <input type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" name="direccion">
                                </div> 
                                <div class="col-md-8">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                    <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>
                                </div>        
                                <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" name="telefono" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">  
                                <div class="col-md-4">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" required>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="guardar_miembro" id="guardar_miembro">
                                </div>
                                <div class="col-md-6">    
                                    <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                                </div>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>