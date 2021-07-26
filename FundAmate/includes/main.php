<?php
    include ('includes/conexionbd.php');
    $consulEquipo="select * from personas where tipo_id='1'";
    $consultaEq=mysqli_query($enlace,$consulEquipo);   
    $consultaNoticias="select * from noticias";
    $consultaNot= mysqli_query($enlace,$consultaNoticias); 
?>
   
<div id="demo" class="carousel carousel-dark slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/logoGrande.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3><a href="img/logoGrande.png"></a></h3>
        <!--<p>We had such a great time in LA!</p>-->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/slider2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Chicago</h3>
        <p>Thank you, Chicago!</p>-->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/slider3.jpg"alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Atención </h3>
        <p>We love the Big Apple!</p>-->
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
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
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php

                while($tablaEq = mysqli_fetch_array($consultaEq))
                {?>
                    <div class="col">
                        <div id="card" class="card text-white bg-dark mb-3">
                            <img class="imgprueba" src=<?php echo $tablaEq['foto'];?> class="card-img-top"  alt="foto_articulo...">
                            <div class="card text-white bg-dark mb-3">
                                <p class="card-title"> Nombres: <?php echo $tablaEq['nombres'] ."  ". $tablaEq['apellidos'] ;?>    </p>
                            </div>
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
          <div>
              <a href="participar.php">Participar</a>
          </div>
          <div>
             <a href="Donar.php">Donar</a>
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
                           <!-- <div class="card-footer text-white bg-dark mb-3">
                        
                                <small class="text-muted">  <a href="#">COMPRAR</a> </small>
                            </div>-->

                    
                    </div>
                
                <?php } ?>
 
        </div>



<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</section>

<section id="contact" class="content">
<h2>Contact</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</body>
</html>

