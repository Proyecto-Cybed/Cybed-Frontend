<?php
function login()
{
    require_once('bd.php');
    $sql = "SELECT usuario, nombre, email, password FROM usuarios WHERE usuario = :usuario";
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario']]);
    $usuario = $consulta->fetch();

    if (!empty($usuario) and password_verify($_POST['password'], $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['email'] = $usuario['email'];
        return true;
    } else {
        return $error = 'Usuario o clave incorrectos';
    }
}
