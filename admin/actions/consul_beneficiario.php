
<?php
    include ('../../includes/conexionbd.php');
    if (isset($_POST['verificar_beneficiario'])) 
    {
        //datos de la persona
        $dni=$_POST['dni'];

        // Busca en la base datos  si la persona se encuentra registrada  como BENEFICIARIO
        $consultaBenefiario="SELECT * FROM personas WHERE personas.dni='$dni'";
        $consulBenef=mysqli_query($enlace,$consultaBenefiario);
        if (mysqli_num_rows($consulBenef)==1) // sila persona se encuentra registrada 
        { 
            //agregar beneficio 
            header("location:../agregar_beneficio.php?dni=$dni");
        }

        else
        { // Si la persona no se encuentra registrada en la tabla persona, se registra completa  (persona y beneficarios)
            header("location:../agregar_beneficiario.php?dni=$dni"); 
        }
    }
    include("../../includes/desconectarbd.php");