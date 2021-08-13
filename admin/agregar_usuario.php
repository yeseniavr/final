<?php
    include('sidebar.php');
?>

        <div class="cuerpo">
                <form id="form_ingresoUsu"class="form_ingreso"action="actions/add_usuario.php" method="POST">
                    <h2 class="form_titulo">Registro de Usuario</h2>
                    <input class ="form_input" type="text" placeholder="&#128272; Usuario" name="dni" required>
                    <input class ="form_input" type="password" placeholder="&#128272; Password" name="password" required>

                    <div class="row">
                        <div class="col-md-6">
                            <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="guardar_usuario" id="guardar_usuario">
                        </div>
                        <div class="col-md-6">    
                            <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </body>
</html>































































