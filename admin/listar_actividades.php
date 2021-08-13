<?php
session_start();
include ('../includes/conexionbd.php');
$consultaActividades= "SELECT actividades.titulo, actividades.descripcion as descripcionAct,id_actividad, actividades.imagen as imagenAct,fecha,area_id, areas.nombre  FROM actividades INNER JOIN areas ON actividades.area_id= areas.id_area ORDER BY areas.id_area, actividades.fecha";
$consultaAct= mysqli_query($enlace,$consultaActividades); 
include('sidebar.php');
?>

<div class="cuerpo">

    <h2 class="form_titulo">Actividades</h2>
    <div class="card shadow">
        <div class="card-body">
            <div>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>Área</th>
                            <th>Fecha</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($consultaAct)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['descripcionAct']; ?></td>
                            <td><?php echo $row['imagenAct']; ?></td>                
                        
                            <td class="text-center align-middle"><a href="modificar_actividad.php?id_actividad=<?php echo $row['id_actividad']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="actions/delete_actividad.php?id_actividad=<?php echo $row['id_actividad']?>"><i class="fas fa-trash"></i></a></td>   
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