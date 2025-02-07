    <h2>Iniciar Sesión</h2>

    <?php
    if (isset($_SESSION['error'])) : ?>
        <p style="color: red;"><?php echo htmlspecialchars($_SESSION['error']); //Evita ataques XSS. ?></p> 
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <!-- VALIDAR EL ACTION DE LO CONTRARIO SE OBTIENE: The requested resource /autenticar was not found on this server. -->
    <form action="/autenticar" method="POST">
        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="password" placeholder="Contraseña" required>

        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; //Protección contra CSRF ?>">

        <button type="submit">Ingresar</button>
    </form>
