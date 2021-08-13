<?php
    include ('includes/conexionbd.php');
    $consulEquipo="select * from personas where tipo_id='1'";
    $consultaEq=mysqli_query($enlace,$consulEquipo);   
    $consultaNoticias="select * from noticias";
    $consultaNot= mysqli_query($enlace,$consultaNoticias); 
    $consultaAreas="select * from areas WHERE id_area<>5";
    $consultaArea= mysqli_query($enlace,$consultaAreas);  
?>
   
    <div id="demo" class="carousel carousel-dark slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/fundacion.png" alt="logo" width="1100" height="500">   
        </div>
        <div class="carousel-item">
          <img src="img/slider2.jpg" alt="niños" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/slider3.jpg"alt="niños" width="1100" height="500">
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <br>
    <section id="about" class="content">
        <div class="row">
            <div class="col-md-6">
                <h2>¿Qué es Amate?</h2>
                <p>Es una fundación creada con el objetivo de elaborar, impulsar y sostener programas y proyectos de caracter social, educativo, deportivos, recreativos, profesionales o de cualquier índoles, acorde con el objetivo de promover, suministrar y coordinar la ayuda humanitaria</p>
            </div>
            <div class="col-md-6 cuadro">
                <img class="logo" src="img/letraAmate.png" alt="Amate" height="50" >
            <div>
        </div>
    </section>
    <section id="equipo" class="content">
        <h2>Nuestro Equipo</h2>
        <div class="container" >
            <div class="row row-cols-1 row-cols-md-3">
            <?php

                while($tablaEq = mysqli_fetch_array($consultaEq))
                {?>
                    <div class="col">
                        <div class="card cardEquipo">
                            <div>
                              <img class="img-fluid" src=<?php echo $tablaEq['foto'];?>   alt="foto equipo">
                            </div>
                            <div>
                                <h3 class="equipo"><?php echo $tablaEq['nombres'] ."  ". $tablaEq['apellidos'] ;?>    </h3>
                            </div>
                        </div>
                    </div>
                
                <?php } ?>
            </div>
        </div>
    </section>
    <section id="iniciativas" class="content">
      <h2>Iniciativas</h2>
      <br>
      <div class="container" >
        <div class="row row-cols-1 row-cols-md-3">
          <?php
          while($tablaAreas = mysqli_fetch_array($consultaArea))
          {?>
            <div class="cards">
              <div class="imgBx">
                <img src=<?php echo $tablaAreas['imagen'];?> alt="images">
              </div>
              <div class="details">
                <h2><?php echo $tablaAreas['nombre'] ;?><br><span><a href="actividades.php?area_id=<?php echo $tablaAreas['id_area'];?>&nombre=<?php echo $tablaAreas['nombre'];?>&descripcion=<?php echo $tablaAreas['descripcion'];?> ">Conoce mas...</a></span></h2>
              </div>
            </div> 
          <?php } ?> 
        </div>
      </div>
    </section>
    <section id="participar" class="content">
      <h2>Participar</h2>
      <div class="row">
        <div class="principalParti col-md-12">
        <img id="imgPrueba" src="img/participar.png"   alt="participar">
        <div class="cuadroParticipar">
          <div class="part">
              <button class="btnPart1"><a href="participar.php">Participar</a></button>
          </div>
          <div class="part">
          <button class="btnPart2"><a href="index.php">Donar</a></button>
          </div>
        </div>  
      </div> 
    </section>
    <section id="noticias" class="content">
    <h2>Noticias</h2>
      <div class="container" >
        <?php
        while($tablaNot = mysqli_fetch_array($consultaNot))
        {?>
          <div class="row">
            <div class="col-md-6">
                <img class="imgprueba" src=<?php echo $tablaNot['imagen'];?> class="card-img-top"  alt="foto_articulo...">
            </div>
            <div class="col-md-6">
              <p> Título: <?php echo $tablaNot['titulo'] ;?>    </p>
              <p> <?php echo $tablaNot['descripcion'];?> </p>     
            </div>    
          </div>
        <?php } ?>
        </div>
    </section>
  </body>
</html>

