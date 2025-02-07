<?php
    include '../app/views/layouts/header.php'; 
?>
    <!-- Wrapper del contenido -->
    <main class="container-md col-12 col-md-8 col-lg-6">
        
        <div class="card mt-2 col">
            <h1 class="card-header bg-dark-subtle">Floristeria</h1>
            <div class="card-body">                
                <h2 class="card-title m-4">Eventos</h2>
                <p class="card-text m-4 mt-2">Organizamos eventos</p>                
            </div>
        </div>
        
        <!-- FORMULARIOS -->
        <div class="card mt-2 col">        
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

    <?php
    include '../app/views/layouts/footer.php'; 
    ?>