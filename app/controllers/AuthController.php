<?php
require_once __DIR__ . '/../models/Usuario.php';

class AuthController {
    public function login() {
        require_once __DIR__ . '/../../public/login.php'; // Cargar vista de login
    }

    //Autenticar por email. Verifica el usuario y guarda su nombre en $_SESSION['usuario'].
    public function autenticar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Validación CSRF. Agregamos una validación para verificar que el token CSRF enviado en el formulario coincida con el de la sesión. Si el token CSRF es incorrecto, bloquea la petición.
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Error de seguridad: Token CSRF inválido.");
            }            

            // Protección contra fuerza bruta
            if (!isset($_SESSION['intentos'])) {
                $_SESSION['intentos'] = 0;
            }

            if ($_SESSION['intentos'] >= 5) {
                die("Demasiados intentos fallidos. Intenta más tarde.");
            }

            /** Para verificar permisos deberia incluir una columna rol en la bd con tipo de dato ENUM admin, usuario 
             * if ($_SESSION['rol'] !== 'admin') {
             *  die("Acceso denegado.");
             * }
             */

            $email = $_POST['email'];
            //password_hash($password, PASSWORD_DEFAULT)
            //$password = $_POST['password'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //Encriptando: Aprender a ocupar MD5

            $usuarioModel = new Usuario();
            $usuario = $usuarioModel->buscarPorEmail($email);


            if ($usuario && password_verify($password, $usuario['password'])) {
                
                session_regenerate_id(true); // Previene Session Hijacking
                $_SESSION['usuario'] = $usuario['nombre']; // Guardar usuario en sesión
                $_SESSION['email'] = $usuario['email'];

                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Token CSRF. Generamos un token aleatorio ($_SESSION['csrf_token']) para prevenir ataques CSRF.

                $_SESSION['intentos'] = 0; // Reiniciar intentos si el login es exitoso

                //Ojo que estoy redirigiendo a la Vista con las rutas definidas en routes/web.php
                header("Location: /productos"); //O header("Location: ../views/productosView");
                exit();
            } else {
                $_SESSION['intentos']++; // Incrementar intentos fallidos
                $_SESSION['error'] = "Credenciales incorrectas"; 
                header("Location: /login"); //O header("Location: ../views/login");
                exit();
            }
        }
    }

    public function logout() {
        session_destroy(); // Destruir la sesión
        header("Location: /login"); //O header("Location: ../views/login")
        exit();
    }
}
?>