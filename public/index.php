<!DOCTYPE html>
<html lang="en">
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
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                            Floristeria
                          </a>                      
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                                <ul class="dropdown-menu bg-dark-subtle">
                                <li><a class="dropdown-item" href="#">Eventos</a></li>
                                <li><a class="dropdown-item" href="#">Arreglos</a></li>                                
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
                    <button type="button" class="btn btn-outline-light me-2"><a class="nav-link text-decoration-none" href="#">Iniciar sesión</a></button>
                    <button type="button" class="btn btn-warning"><a class="nav-link text-decoration-none" href="#">Regístrate</a></button>
                </div>
            </div>
        </div>
    </header>
      
    

    <!-- Contenido -->
    <main class="container-md col-12 col-md-8 col-lg-6">
        <div class="card mt-2 col">
            <h1 class="card-header bg-dark-subtle">Floristeria</h1>
            <div class="card-body">                
                <h2 class="card-title m-4">Eventos</h2>
                <p class="card-text m-4 mt-2">Organizamos eventos</p>                

        </div>
        <!-- FORMULARIOS -->
        <div class="card mt-2">            
            <h1 class="card-header bg-dark-subtle">Formularios para el proyecto</h1>
            <div class="card-body col-12 col-lg-9 m-md-auto">
                <p class="card-text m-2">Los formularios a utilizar son</p>

                <h2 class="card-title mt-4">Registrar Usuario</h2>
                <!-- Modificar referencias -->
                <form id="registrar" method="post" action="php/registrar.php">
                    
                    <div class="input-group m-1">
                        <label for="nombre" class="input-group-text col-form-label-lg">Nombres</label>
                        <input type="text" name="nombre" placeholder="Nombres" maxlength="30" class="form-control"/>    
                    </div>

                    <div class="input-group m-1">
                        <label for="apellido" class="input-group-text col-form-label-lg">Apellidos</label>
                        <input type="text" name="apellido" placeholder="Apellidos" maxlength="30" class="form-control"/>    
                    </div>
                    <div class="input-group m-1">
                        <label for="telefono" class="input-group-text col-form-label-lg">Teléfono</label>
                        <input type="tel" name="telefono" placeholder="Teléfono" maxlength="20" class="form-control"/>    
                    </div>
                    <div class="input-group m-1">
                        <label for="correo" class="input-group-text col-form-label-lg">E-mail</label>
                        <input type="email" name="correo" placeholder="Correo electrónico" maxlength="80" class="form-control"/>    
                    </div>
                    <div class="input-group m-1">
                        <label for="dob" class="input-group-text col-form-label-lg">Fecha de nacimiento</label>
                        <input type="date" name="dob" placeholder="Fecha de nacimiento" class="form-control"/>    
                    </div>
                    <div class="input-group m-1">
                        <label for="user" class="input-group-text col-form-label-lg">Usuario</label>
                        <input type="text" name="user" placeholder="Usuario" maxlength="30" class="form-control"/>    
                    </div>
                    <div class="input-group m-1">
                        <label for="pass" class="input-group-text col-form-label-lg">Contraseña</label>
                        <input type="password" name="pass" placeholder="Contraseña" maxlength="30" class="form-control"/>    
                    </div>
                    <input type="submit" value="Registrar" class="btn btn-primary col-12 col-lg-5 mt-1"/>
                    <input type="reset" value="Limpiar" class="btn btn-secondary col-12 col-lg-5 mt-1"/>
                    
                    
                    
                </form>

                <div class="formulario">

                
                    <h2 class="card-title mt-5">Iniciar sesión</h2>
                    <form id="iniciar_sesion" method="post" action="">
                        <div class="input-group m-1">
                            <label for="user" class="input-group-text col-form-label-lg">Usuario</label>
                            <input type="text" name="user" placeholder="Usuario" maxlength="30" class="form-control"/>    
                        </div>
                        <div class="input-group m-1">
                            <label for="pass" class="input-group-text col-form-label-lg">Contraseña</label>
                            <input type="password" name="pass" placeholder="Contraseña" maxlength="30" class="form-control"/>    
                        </div>
                        <input type="submit" value="Iniciar sesión" class="btn btn-primary col-12 col-lg-5 mt-1"/>
                        <input type="reset" value="Limpiar" class="btn btn-secondary col-12 col-lg-5 mt-1"/>
                        
                    </form>
                </div>

                <h2 class="card-title mt-5">Observaciones</h2>
                <p class="card-text m-2">Aun puede mejorar que los inputs y labels sean </p>
            </div>            
        </div>

        <!-- SERVICIOS-->
        <div class="card mt-2">
            <h1 class="card-header bg-dark-subtle">Servicios</h1>
            <div class="card-body col-12 col-md-8">
                <p class="card-text m-4">Los servicios que ofrecemos son:</p>



        </div>
    </main>

    <footer class="col-12 mt-4 text-center">
        <hr>
        <p class="m-4 text-black-50">&copy; Helios 2025</p>
    </footer>
    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>