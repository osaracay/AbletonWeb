<?php
require_once __DIR__ . '/../models/Insumo.php';
require_once __DIR__ . '/../models/Proveedor.php';

class InsumoController {
    public function index() {
        $insumoModel = new Insumo();
        $insumos = $insumoModel->obtenerTodos();
        require_once __DIR__ . '/../views/insumos/lista.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']);
            $cantidad = intval($_POST['cantidad']);
            $unidad = htmlspecialchars($_POST['unidad']);
            $id_proveedor = intval($_POST['id_proveedor']);

            $insumoModel = new Insumo();
            $insumoModel->registrar($nombre, $cantidad, $unidad, $id_proveedor);

            $_SESSION['mensaje'] = "Insumo registrado correctamente.";
            header("Location: /insumos");
            exit();
        }

        $proveedorModel = new Proveedor();
        $proveedores = $proveedorModel->obtenerTodos();
        require_once __DIR__ . '/../views/insumos/registro.php';
    }

    public function editar($id) {
        $insumoModel = new Insumo();
        $proveedorModel = new Proveedor();
        $insumo = $insumoModel->obtenerPorId($id);
        $proveedores = $proveedorModel->obtenerTodos();
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']);
            $cantidad = intval($_POST['cantidad']);
            $unidad = htmlspecialchars($_POST['unidad']);
            $id_proveedor = intval($_POST['id_proveedor']);
    
            $insumoModel->editar($id, $nombre, $cantidad, $unidad, $id_proveedor);
            $_SESSION['mensaje'] = "Insumo actualizado correctamente.";
            header("Location: /insumos");
            exit();
        }
    
        require_once __DIR__ . '/../views/insumos/editar.php';
    }
    
    public function eliminar($id) {
        $insumoModel = new Insumo();
        $insumoModel->eliminar($id);
        $_SESSION['mensaje'] = "Insumo eliminado correctamente.";
        header("Location: /insumos");
        exit();
    }
    
}
?>
