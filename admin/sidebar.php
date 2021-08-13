<!doctype html>
<html lang="es">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fundación Amate</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://kit.fontawesome.com/e15e8c34af.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png"  href="../img/logoPeq.png">
  </head>
  <body>
    <div class="header">
        <h1>Módulo Administrativo Amate</h1>
        <div id="cerrar">
        <a href="actions/cerrar_session.php"> <h7> salir</h7></a>  
</div>
    </div>
    <div class="principal">
        <div class="sidebar"> 
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li>
                        <a href="../index.php"> <img  class="logo" src="../img/logoPeq.png" alt=""></a>  
                    </li>
                    <hr>
                    <i class="fa fa-user-o fa-lg" aria-hidden="true"><br> usuarios</i>     
                      
                    <div class="acciones"> 
                        <li class="nav-item">
                            <a class="nav-link" href="agregar_usuario.php">
                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_usuarios.php">
                                <i class="fa fa fa-eye fa-lg"></i>
                            </a>
                        </li>
                    </div> 
                    <hr>
                    <i class="fa fa-user-o fa-lg" aria-hidden="true"><br> Miembros</i>     
                    <div class="acciones"> 
                        <li class="nav-item">
                            <a class="nav-link" href="agregar_miembro.php">
                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_miembros.php">
                                <i class="fa fa fa-eye fa-lg"></i>
                            </a>
                        </li>
                    </div>   
                    <hr>
                    <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"><br>Actividades</i>
                    <div class="acciones">
                        <li class="nav-item ">
                            <a class="nav-link" href="agregar_actividad.php">
                            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                            <span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_actividades.php">
                            <i class="fa fa fa-eye fa-lg"></i>
                            <span></span></a>
                        </li>
                    </div>    
                    <hr>
                    <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"><br>noticias</i>
                    <div class="acciones">
                        <li class="nav-item ">
                            <a class="nav-link" href="agregar_noticia.php">
                            <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                            <span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_noticias.php">
                            <i class="fa fa fa-eye fa-lg"></i>
                            <span></span></a>
                        </li>
                    </div>    
                    <hr>
                    <i class="fa fa-users fa-lg" aria-hidden="true"><br>Beneficiarios</i>
                    <div class="acciones">
                        <li class="nav-item">
                            <a class="nav-link" href="verificar_beneficiario.php">
                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar_beneficiarios.php">
                                <i class="fa fa fa-eye fa-lg"></i>
                            </a>
                        </li>
                    </div>
                    <hr>
                    <i class="fa fa-usd fa-lg" aria-hidden="true"><br> Donativos</i>
                    <li class="nav-item">
                        <a class="nav-link" href="listar_donativos.php">
                            <i class="fa fa fa-eye fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </nav> 
        </div>