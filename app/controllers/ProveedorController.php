<?php
require_once __DIR__ . '/../models/Proveedor.php';

class ProveedorController {
    public function index() {
        $proveedorModel = new Proveedor();
        $proveedores = $proveedorModel->obtenerTodos();
        require_once __DIR__ . '/../views/proveedores/lista.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']);
            $contacto = htmlspecialchars($_POST['contacto']);
            $telefono = htmlspecialchars($_POST['telefono']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            $proveedorModel = new Proveedor();
            $proveedorModel->registrar($nombre, $contacto, $telefono, $email);

            $_SESSION['mensaje'] = "Proveedor registrado correctamente.";
            header("Location: /proveedores");
            exit();
        }

        require_once __DIR__ . '/../views/proveedores/registro.php';
    }

    public function editar($id) {
        $proveedorModel = new Proveedor();
        $proveedor = $proveedorModel->obtenerPorId($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']);
            $contacto = htmlspecialchars($_POST['contacto']);
            $telefono = htmlspecialchars($_POST['telefono']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
            $proveedorModel->editar($id, $nombre, $contacto, $telefono, $email);
            $_SESSION['mensaje'] = "Proveedor actualizado correctamente.";
            header("Location: /proveedores");
            exit();
        }
    
        require_once __DIR__ . '/../views/proveedores/editar.php';
    }
    
    public function eliminar($id) {
        $proveedorModel = new Proveedor();
        $proveedorModel->eliminar($id);
        $_SESSION['mensaje'] = "Proveedor eliminado correctamente.";
        header("Location: /proveedores");
        exit();
    }
    
}
?>
