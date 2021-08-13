
<?php
    include ('../../includes/conexionbd.php');
    if (isset($_POST['guardar_beneficiario'])) 
    {
        //datos de la persona
        $dni=$_POST['dni'];
        $nombres= $_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $sexo=$_POST['sexo'];
        $fecha_nac=$_POST['fechaNac'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $pais=$_POST['pais'];
        $direccion=$_POST['direccion'];
        $foto= 'NA'; //$_POST['foto'];
        $actividad_id=$_POST['actividad'];
        $area_id=$_POST['area'];
        $tipo='1';
        if ($apellidos=="NA"){
            $tipo="2";
        }
        //datos del beneficio
        $fecha_Benf= $_POST['fechaBenf'];
        

        // Busca en la base datos  si la persona se encuentra registrada  como BENEFICIARIO
        $consultaBenefiario="SELECT * FROM personas INNER JOIN beneficiarios ON personas.dni=beneficiarios.dni WHERE personas.dni='$dni'";
        $consulBenef=mysqli_query($enlace,$consultaBenefiario);
        if (mysqli_num_rows($consulBenef)==1) // sila persona se encuentra registrada como BENEFICIARIO
        { 
            echo "<script>alert( 'Dni ya registrado como Beneficiario, continua el registro del usuario')</script>";
            echo 'Dni ya se encuentra registrado con beneficios. si desea Registrar un nuevo beneficio, haga click en la opcion ver beneficiarios';
            header("location:../agregar_beneficiario.php");
        }
        else{
            // Busca en la base datos  si la persona se encuentra registrada SIN BENEFICIOS
            $consultaPersona="SELECT * FROM personas WHERE personas.dni='$dni'";
            $consulPers=mysqli_query($enlace,$consultaPersona);
            if (mysqli_num_rows($consulPers)==1) // sila persona se encuentra registrada SIN BENEFICIOS
            { 
                 echo 'Dni ya registrado, se agrega solo el beneficio';
                $insertUsu= "INSERT INTO beneficiarios VALUES ('$dni',$actividad_id,'$fecha_Benf')";
                $result = mysqli_query($enlace, $insertUsu);
                if(!$result) 
                {
                    die("Fallo la carga del usuario");
                } 
                else
                {
                        
                    header("location:../index.php");
                }
                
            }
            else
            { // Si la persona no se enceuntra registrada en la tabla persona, se registra completa  (persona y beneficarios)
                $insertPers= "INSERT INTO personas VALUES ('$dni','$nombres','$apellidos','$sexo','$fecha_nac','$email','$telefono','$pais','$direccion','$foto','3','$area_id')";
                if (mysqli_query($enlace,$insertPers)) 
                {
                    $insertUsu= "INSERT INTO beneficiarios VALUES ('$dni',$actividad_id,'$fecha_Benf')";
                    $result = mysqli_query($enlace, $insertUsu);
                    if(!$result) 
                    {
                        die("Fallo la carga del usuario");
                    } 
                    else
                    {
                            
                        header("location:../index.php");
                    }

                } else 
                {
                    echo "Error: " . $insertPers . "<br>" . mysqli_error($enlace);
                }
            } 
        }
    }
    include("../../includes/desconectarbd.php");