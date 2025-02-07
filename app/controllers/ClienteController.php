<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController {
    public function index() {
        $clienteModel = new Cliente();
        $clientes = $clienteModel->obtenerTodos();
        require_once __DIR__ . '/../views/clientes/lista.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $telefono = htmlspecialchars($_POST['telefono']);
            $direccion = htmlspecialchars($_POST['direccion']);

            $clienteModel = new Cliente();
            $clienteModel->registrar($nombre, $email, $telefono, $direccion);

            $_SESSION['mensaje'] = "Cliente registrado correctamente.";
            header("Location: /clientes");
            exit();
        }

        require_once __DIR__ . '/../views/clientes/registro.php';
    }

    public function editar($id) {
        $clienteModel = new Cliente();
        $cliente = $clienteModel->obtenerPorId($id);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $telefono = htmlspecialchars($_POST['telefono']);
            $direccion = htmlspecialchars($_POST['direccion']);
    
            $clienteModel->editar($id, $nombre, $email, $telefono, $direccion);
            $_SESSION['mensaje'] = "Cliente actualizado correctamente.";
            header("Location: /clientes");
            exit();
        }
    
        require_once __DIR__ . '/../views/clientes/editar.php';
    }
    
    public function eliminar($id) {
        $clienteModel = new Cliente();
        $clienteModel->eliminar($id);
        $_SESSION['mensaje'] = "Cliente eliminado correctamente.";
        header("Location: /clientes");
        exit();
    }
    
}
?>
