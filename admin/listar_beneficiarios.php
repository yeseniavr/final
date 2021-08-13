<?php
include ('../includes/conexionbd.php');
$consultaBenefiario="SELECT DISTINCT personas.dni, nombres, apellidos FROM personas INNER JOIN beneficiarios ON personas.dni=beneficiarios.dni";
$consulBenef=mysqli_query($enlace,$consultaBenefiario);


include('sidebar.php');
?>

<div class="cuerpo">

    <h2 class="form_titulo">Beneficiarios</h2>
    <div class="card shadow">
        <div class="card-body">
            <div>
                <table class="table" width="100%" >
                    <thead>
                        <tr>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Beneficios</th>
                            <th>Editar beneficiario</th>
                            <th>Eliminar beneficiario</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($consulBenef)) { ?>
                        <tr>
                            <td><?php echo $row['dni']; ?></td>
                            <td><?php echo $row['nombres']; ?></td>
                            <td><?php echo $row['apellidos']; ?></td>   

                            <td class="text-center align-middle"><a href="listar_beneficios.php?dni=<?php echo $row['dni']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>                        
                            <td class="text-center align-middle"><a href="index.php?dni=<?php echo $row['dni']?>"><i class="fas fa-edit btn-outline-success"></i></a></td>
                            <td class="text-center align-middle"><a href="index.php?dni=<?php echo $row['dni']?>"><i class="fas fa-trash"></i></a></td>   
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