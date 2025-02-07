<?php require_once __DIR__ . '/../../../routes/web.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <title>Floristeria</title>
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">                        
                <!-- BARRA DE NAVEGACION -->
                <nav class="navbar navbar-expand-md navbar-dark col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <div class="container-fluid">                        
                        <a class="navbar-brand" href="../../../public/index.php">
                            <img src="images/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                            Floristeria
                          </a>                      
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../../../public/index.php">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Tienda</a>
                                <ul class="dropdown-menu bg-dark-subtle">
                                <li><a class="dropdown-item" href="#">Arreglos</a></li>                                
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                                <ul class="dropdown-menu bg-dark-subtle">
                                <li><a class="dropdown-item" href="#">Eventos</a></li> 
                                </ul>
                            </li>
                            </ul>                            
                        </div>
                    </div>
                </nav>
            
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Buscar..." aria-label="Search">
                </form>
                <!-- MANEJO DE SESIONES-->
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2"><a class="nav-link text-decoration-none" href="../../../public/login.php">Iniciar sesión</a></button>
                    <button type="button" class="btn btn-warning"><a class="nav-link text-decoration-none" href="#">Regístrate</a></button>
                </div>
            </div>
        </div>
    </header>