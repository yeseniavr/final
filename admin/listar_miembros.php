<?php
include ('../includes/conexionbd.php');
$consultaPersonaAdmin="SELECT * FROM personas INNER JOIN areas ON personas.area_id=areas.id_area WHERE  personas.tipo_id='1'";
$consultaPersonaVolun="SELECT * FROM personas INNER JOIN areas ON personas.area_id=areas.id_area WHERE personas.tipo_id='2'";
$consultaAdmin=mysqli_query($enlace,$consultaPersonaAdmin);
$consutaVolun= mysqli_query($enlace,$consultaPersonaVolun);


include('sidebar.php');
?>

<div class="cuerpo">
    <h2 class="form_titulo">Miembros Registrados</h2>
    <div class="container" >
        <h3>Administrativos </h3>
        <div class="card shadow">
        <div class="card-body">
            <div>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Imagen</th>
                            
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($consultaAdmin)) { ?>
                        <tr>
                            <td><?php echo $row['dni']; ?></td>
                            <td><?php echo $row['nombres']; ?></td>
                            <td><?php echo $row['apellidos']; ?></td> 
                            <td><img src="../<?php echo $row['foto']; ?>" alt=""> </td> 
                                        
                        
                            <td class="text-center align-middle"><a href="modificar_miembro.php?dni=<?php echo $row['dni']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="actions/delete_miembro.php?dni=<?php echo $row['dni']?>"><i class="fas fa-trash"></i></a></td>   
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <h3> Voluntario </h3>
        <div class="card shadow">
        <div class="card-body">
            <div>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row2 = mysqli_fetch_assoc($consutaVolun)) { ?>
                        <tr>
                            <td><?php echo $row2['dni']; ?></td>
                            <td><?php echo $row2['nombres']; ?></td>
                            <td><?php echo $row2['apellidos']; ?></td>   
                            <td><img src="../<?php echo $row2['foto']; ?>" alt=""> </td>          
                        
                            <td class="text-center align-middle"><a href="modificar_miembro.php?dni=<?php echo $row2['dni']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="actions/delete_miembro.php?dni=<?php echo $row2['dni']?>"><i class="fas fa-trash"></i></a></td>   
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>       

    </div>

    
</div>
</body>
</html>  
