<?php
    include ('includes/conexionbd.php');
    $area_id=$_GET['area_id'];
    $consultaAreas="select * from actividades  WHERE area_id=$area_id";
    $consultaArea= mysqli_query($enlace,$consultaAreas);  
?>

    <!doctype html>
    <html lang="es">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Fundación Amate</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <?php 
        include('includes/header.php');?>
        
        <section id="iniciativas" class="content">
            <br>
            <h2><?php echo $_GET['nombre'];?></h2>
            <p><?php echo $_GET['descripcion'];?></p>
            <div class="container" >

                <?php

                    while($tablaAreas = mysqli_fetch_array($consultaArea))
                    {?>
                        <div class="blog-card alt">
                            <div class="meta">
                                <div class="photo" style="background-image: url(<?php  echo $tablaAreas['imagen'];?>)"></div>
                                <ul class="details">
                                    <!--<li class="author"><a href="#">Jane Doe</a></li>-->
                                    <li class="date"> Fecha: <?php  echo $tablaAreas['fecha'];?></li>
                                    <!--li class="tags">-->
                                        <ul>
                                            <li><a href="participar.php">Únete y participa</a></li>
                                            <!--<li><a href="#">Code</a></li>
                                            <li><a href="#">JavaScript</a></li>-->
                                        </ul>
                                    </!--li>
                                </ul>
                            </div>
                            <div class="description">
                                <h1><?php  echo $tablaAreas['titulo'];?></h1>
                                <h2>Descripción de la Actividad</h2>
                                <p><?php echo $tablaAreas['descripcion'];?>.</p>
                                <p class="read-more">
                                    <a href="#">Más</a>
                                </p>
                            </div>
                        </div>
                    
                    <?php } ?>
            </div>
        <a href="index.php">regresar</a>

        </section>




       <!--para iniciativas -->


    <?php include('includes/footer.php');
    ?>
  </body>
</html>  


