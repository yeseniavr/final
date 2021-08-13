<?php
    include('sidebar.php');
?>

        <div class="cuerpo">
            <form class="form_ingreso" action="actions/add_noticia.php" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
            <h2 class="form_titulo">Agregar Noticia</h2>
                <input class="form_input" type="text" name="titulo" id="titulo" placeholder="Nombre." >
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción..."></textarea>

                <label for="img" class="mt-4">Seleccionar imagen</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                <i class="fa fa-usd fa-lg" aria-hidden="true"><input type="file" name="file1" id="file1" ></i>

                <div class="row">
                    <div class="col-md-6">
                        <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success" name="guardar_noticia" id="guardar_noticia">
                    </div>                
                    <div class="col-md-6">
                        <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger">
                    </div>
                </div>
            </form>
        </div>
   
    </body>
</html>