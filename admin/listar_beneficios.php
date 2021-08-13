<?php
include ('../includes/conexionbd.php');
$dni = $_GET['dni'];
$consultaBeneficios="SELECT  * FROM beneficiarios INNER JOIN actividades ON beneficiarios.actividad_id=actividades.id_actividad WHERE beneficiarios.dni='$dni' ";
$consulBenef=mysqli_query($enlace,$consultaBeneficios);


include('sidebar.php');
?>

<div class="cuerpo">

    <h2 class="form_titulo">Beneficios <?php echo $dni;?></h2>
    <div class="card shadow">
        <div class="card-body">
            <div>
                
                <a class="nav-link" href="agregar_beneficio.php?dni=<?php echo $dni?>">
                   <i class="fa fa-plus-circle fa-lg" aria-hidden="true">Agregar Beneficio</i>
                </a>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>Area</th>
                            <th>Fecha</th>
                            <th>Editar beneficio</th>
                            <th>Eliminar beneficio</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($consulBenef)) { ?>
                        <tr>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['fecha_beneficio']; ?></td>

                            <td class="text-center align-middle"><a href="modificar_beneficio.php?dni=<?php echo $row['dni']?>&actividad_id=<?php echo $row['actividad_id']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="actions/delete_beneficio.php?dni=<?php echo $row['dni']?>&actividad_id=<?php echo $row['actividad_id']?>"><i class="fas fa-trash"></i></a></td>   
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