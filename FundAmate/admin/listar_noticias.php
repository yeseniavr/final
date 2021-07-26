<?php
include ('../includes/conexionbd.php');
$consultaNoticias="select * from noticias";
$consultaNot= mysqli_query($enlace,$consultaNoticias); 

include('sidebar.php');
?>

<div class="cuerpo">

    <h2>Noticias</h2>
    <div class="card shadow">
        <div class="card-body">
            <div>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($consultaNot)) { ?>
                        <tr>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['imagen']; ?></td>                
                        
                            <td class="text-center align-middle"><a href="modificar_noticia.php?id_noticia=<?php echo $row['id_noticia']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="actions/delete_noticia.php?id_noticia=<?php echo $row['id_noticia']?>"><i class="fas fa-trash"></i></a></td>   
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