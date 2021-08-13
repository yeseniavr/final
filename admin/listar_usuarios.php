<?php
session_start();
include ('../includes/conexionbd.php');
$consultaPersonaAdmin="SELECT * FROM personas INNER JOIN usuarios ON personas.dni=usuarios.dni and personas.tipo_id='1'";
$consultaPersonaVolun="SELECT * FROM personas INNER JOIN usuarios ON personas.dni=usuarios.dni and personas.tipo_id='2'";
$consultaAdmin=mysqli_query($enlace,$consultaPersonaAdmin);
$consutaVolun= mysqli_query($enlace,$consultaPersonaVolun);

include('sidebar.php');
?>

<div class="cuerpo">
    <h2>Usuarios registrados</h2>
    <div class="container" >
        <h3>Administrativos </h3>
        <div class="row row-cols-1 row-cols-md-3">
            <?php
            while($row = mysqli_fetch_array($consultaAdmin))
            {?>
                <div class="col">
                    <div id="card" class="card cardEquipo">
                        <img class="imgUsu" src=../<?php echo $row['foto'];?>   alt="imagen del usuario">
                        <div class="card">
                            <h3 class="equipo"> Nombres: <?php echo $row['nombres'] ."  ". $row['apellidos'] ;?>    </h3>
                        </div>
                        <h2 class="usuario">Usuario<?php echo $row['dni']; ?></h3>
                        <div class="icon-block">
                            <a href="modificar_usuario.php?dni=<?php echo $row['dni']?>"><i class="fas fa-edit btn-outline-success"></i></a>
                            <a href="actions/delete_usuario.php?dni=<?php echo $row['dni']?>"> <i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <h3> Voluntario </h3>
        <div class="row row-cols-1 row-cols-md-3">
            <?php
            while($row2 = mysqli_fetch_array($consutaVolun))
            {?>
                <div class="col">
                    <div id="card" class="card cardEquipo">
                        <img class="imgUsu" src=../<?php echo $row['foto'];?> alt="imagen del usuario">
                        <div class="card">
                        <h3 class="equipo"> Nombres: <?php echo $row2['nombres'] ."  ". $row2['apellidos'] ;?>    </h3>
                        </div>
                        <h2 class="usuario"><?php echo $row2['dni']; ?></h3>
                        <div class="icon-block">
                            <a href="modificar_usuario.php?dni=<?php echo $row2['dni']?>"><i class="fas fa-edit btn-outline-success"></i></a>
                            <a href="actions/delete_usuario.php?dni=<?php echo $row2['dni']?>"> <i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>        
    </div>   
</div>
</body>
</html>  


