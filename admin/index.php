<?php
    session_start();
    include('sidebar.php');
?>

        <div class="cuerpo">
        Bienvenida <?php  echo $_SESSION['nombres']. '  '.  $_SESSION['apellidos']; ?>
        <img src="../img/logoGrande.png" alt="">
        <h2>Selecciona a la izquierda la opción que deseas realizar</h2>
                
        </div>
    </div>
   
       
    <hr>
    <div class="footer">
        <p id="footer">Derechos Reservados @2021</p>
        <hr>
    </div>



</body>
</html>