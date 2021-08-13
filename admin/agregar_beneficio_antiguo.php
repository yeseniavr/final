<?php
    include('sidebar.php');
    include('actions/datos_option.php');

      
?>
<?php

if (isset($_REQUEST['rutear'])){
    echo 'voy a rutear';
}
?>

<script>
  function mostrar(num) {

    var n =document.getElementById('area').value;
    if(num==0) {
        alert('entre actividad cero');
        alert(n);
    }
    else {
        alert('entre actividad 1');
    }

  }
  </script>



        <div class="cuerpo">
            <div class="contform">
                <form class="form_ingreso"action="actions/add_beneficio.php" method="POST">
                    <div class="row">                    
                        <div class="col-md-3">
                        <input type="text" name="dni" value="<?php echo $_GET["dni"] ?>" style="display:none">
                        <input type="text" value="<?php $cono;?>">
                        <input type="text" class="form-control forminput " placeholder="DNI" aria-label="DNI" name="dnis" value="<?php echo $_GET["dni"] ?>" disabled >
                        </div>
                    <br>
                    <h4>En que área será otorgado el Beneficio</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="visually-hidden" for="autoSizingSelect"></label>
                            <select class="form-select" id="area" name="area" onchange="mostrar(0)"> 
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
                                <input type="hidden" name="rutear" value="1">
                                <label class="visually-hidden" for="autoSizingSelect"></label>
                                <select class="form-select" id="actividad" name="actividad">
                                <option selected="">Actividad</option>
                                <?php while ($consul = mysqli_fetch_assoc($consultaAct)) {
                                    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                                    echo '<option value="'.$consul['id_actividad'].'">'.$consul['titulo'].'</option>';
                                }?>
                                </select>
                            </div>
                    </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Fecha del beneficio " aria-label="Fecha del Beneficio " name="fechaBenf">
                        </div>
                    </div>

                    <br>
                    <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_beneficio" id="guardar_beneficio">
                    <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger my-2">
                </form>
            </div>    
    </body>
<?php

    if (isset($_REQUEST['rutear'])){
        echo 'voy a rutear';
    }
?>
</html>