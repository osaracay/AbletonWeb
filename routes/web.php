<?php
    /* Definicion de rutas y controladores asociados:
    Si el usuario visita /productos, se carga el controlador ProductoController y se ejecuta index(). 
    */
    require_once __DIR__ . '/../app/config/config.php';
    require_once __DIR__ . '/../app/controllers/AuthController.php';
    require_once __DIR__ . '/../app/controllers/ProductoController.php';
    require_once __DIR__ . '/../app/controllers/ProveedorController.php';
    require_once __DIR__ . '/../app/controllers/InsumoController.php';
    require_once __DIR__ . '/../app/controllers/ClienteController.php';

    $uri = trim($_SERVER['REQUEST_URI'], '/');
    if ($uri == 'login') {
        $controller = new AuthController();
        $controller->login();
    } elseif ($uri == 'autenticar') {
        $controller = new AuthController();
        $controller->autenticar();
    } elseif ($uri == 'logout') {
        $controller = new AuthController();
        $controller->logout();

    } elseif ($uri == 'productos') {
        $controller = new ProductoController();
        $controller->index();
    }
    // Rutas de proveedores
    else if ($uri === '/proveedores') {
        $controller = new ProveedorController();
        $controller->index();
    } elseif (preg_match('/^\/proveedor\/editar\/(\d+)$/', $uri, $matches)) {
        $controller = new ProveedorController();
        $controller->editar($matches[1]);
    } elseif (preg_match('/^\/proveedor\/eliminar\/(\d+)$/', $uri, $matches)) {
        $controller = new ProveedorController();
        $controller->eliminar($matches[1]);
    }

    // Rutas de insumos
    elseif ($uri === '/insumos') {
        $controller = new InsumoController();
        $controller->index();
    } elseif (preg_match('/^\/insumo\/editar\/(\d+)$/', $uri, $matches)) {
        $controller = new InsumoController();
        $controller->editar($matches[1]);
    } elseif (preg_match('/^\/insumo\/eliminar\/(\d+)$/', $uri, $matches)) {
        $controller = new InsumoController();
        $controller->eliminar($matches[1]);
    } 
    // Rutas de clientes
    elseif ($uri === '/clientes') {
        $controller = new ClienteController();
        $controller->index();
    } elseif (preg_match('/^\/cliente\/editar\/(\d+)$/', $uri, $matches)) {
        $controller = new ClienteController();
        $controller->editar($matches[1]);
    } elseif (preg_match('/^\/cliente\/eliminar\/(\d+)$/', $uri, $matches)) {
        $controller = new ClienteController();
        $controller->eliminar($matches[1]);
    }
    else {
        http_response_code(404);
        echo "Página no encontrada.";
    }
?>