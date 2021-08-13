<?php
include ('../includes/conexionbd.php');
$consultaNoticias="select * from donativos";
$consultaNot= mysqli_query($enlace,$consultaNoticias); 

include('sidebar.php');
?>

<div class="cuerpo">

    <h2 class="form_titulo">Listado de Donativos</h2>
    <div class="card shadow">
        <div class="card-body">
            <div>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>email</th>
                            <th>servicio</th>
                            <th>referencia</th>
                            <th>monto</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($consultaNot)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['telefono']; ?></td> 
                            <td><?php echo $row['servicio']; ?></td>
                            <td><?php echo $row['referencia']; ?></td>
                            <td><?php echo $row['monto']; ?></td>                
                        
                            <td class="text-center align-middle"><a href="#"><i class="fas fa-envelope"></i></a></td>
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