<h2>Lista de Proveedores</h2>
<table>
    <tr><th>Nombre</th><th>Contacto</th><th>Teléfono</th><th>Email</th></tr>
    <?php foreach ($proveedores as $proveedor) : ?>
        <tr>
            <td><?php echo htmlspecialchars($proveedor['nombre']); ?></td>
            <td><?php echo htmlspecialchars($proveedor['contacto']); ?></td>
            <td><?php echo htmlspecialchars($proveedor['telefono']); ?></td>
            <td><?php echo htmlspecialchars($proveedor['email']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- VALIDAR ENLACE -->
<a href="/proveedor/registrar">Registrar Proveedor</a>
