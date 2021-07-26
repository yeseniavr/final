<?php
    session_start();
    include('sidebar.php');
?>

        <div class="cuerpo">
        Bienvenida <?php  echo $_SESSION['usuario'];?>
        <img src="../img/logoGrande.png" alt="">
        <h2>Selecciona a la izquierda la opción que deseas realizar</h2>
                
        </div>
    </div>
   
       
    <hr>
    <div class="footer">
        <p>Derechos Reservados @2020</p>
        <hr>
    </div>



</body>
</html>