<?php
    include('sidebar.php');
?>

        <div class="cuerpo">

            <div class="container-fluid">

                

                <div class="row">
                <div class="col-md-4">
                <?php 
                    if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

                <?php session_unset(); } ?>
                </div>
                </div>
            
                <!-- </div> -->
                
                <form class="form_ingreso" action="actions/add_noticia.php" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
                <h2 class="form_titulo">Agregar Noticia</h2>
                    <input class="form_input" type="text" name="titulo" id="titulo" placeholder="Nombre..." >
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción..."></textarea>

                    <label for="img" class="mt-4">Seleccionar imagen</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
                    <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">

                    <input class="form_input" type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_noticia" id="guardar_noticia">
                    <input class="form_input" type="reset" value="Borrar" class="btn btn-outline-danger my-2">

                </form>

            <!--    <form action="actions/add_noticia.php" method="POST"  class="d-flex flex-column col-10" enctype="multipart/form-data">
                <div class="d-flex flex-row">
                    <div class="col-5">
                        <input type="text" name="titulo" id="titulo" placeholder="Nombre..." class="form-control my-2">
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" placeholder="Descripción..."></textarea>
                
                </div>
                <div class="col-5">

                    <label for="img" class="mt-4">Seleccionar imagen</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="200000" />
                    <input type="file" name="img" id="img" class="form-control-file mb-1" accept="image/*">

                </div>
                </div>
                    <div>
                        <input type="submit" value="Aceptar" class="btn btn-outline-success my-2 mr-2" name="guardar_noticia" id="guardar_noticia">
                        <input type="reset" value="Borrar" class="btn btn-outline-danger my-2">
                    </div>
                </form>
                    -->            
            
            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            </div>
    </div>
   
       
    <hr>
    <div class="footer">
        <p>Derechos Reservados @2020</p>
        <hr>
    </div>

</body>
</html>