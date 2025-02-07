<h2>Registrar Proveedor</h2>

<!-- VALIDAR EL ACTION DE LO CONTRARIO SE OBTIENE: The requested resource /autenticar was not found on this server. -->
<form action="/proveedor/registrar" method="POST">
    <label>Nombre:</label><input type="text" name="nombre" required>
    <label>Contacto:</label><input type="text" name="contacto">
    <label>Teléfono:</label><input type="text" name="telefono">
    <label>Email:</label><input type="email" name="email" required>
    <button type="submit">Registrar</button>
</form>

<!-- VALIDAR ENLACE -->
<a href="/proveedores">Ver Proveedores</a>
