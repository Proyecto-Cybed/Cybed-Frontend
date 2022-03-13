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


function insertar()
{
    require_once('bd.php');
    $sql = "INSERT INTO usuarios(usuario,nombre,apellidos, email, password) VALUES (:usuario,:nombre,:apellidos,:email,:password)";
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario'], "nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "email" => $_POST['email'], "password" => password_hash($_POST['contrasenya1'], PASSWORD_DEFAULT)]);
}



// var usuario = new FormData();

//     var contrasenya1 = document.getElementById("contrasenya1").value;
//     var contrasenya2 = document.getElementById("contrasenya2").value;

//     if (contrasenya1 === contrasenya2) {
//         usuario.append("nombre", document.getElementById("nombre").value);
//         usuario.append("usuario", document.getElementById("usuario").value);
//         usuario.append("apellidos", document.getElementById("apellidos").value);
//         usuario.append("email", document.getElementById("email").value);
//         usuario.append("password", contrasenya1);

//         fetch("http://localhost:8000/api/usuarios/", {
//                 method: "POST", // Indicar método POST
//                 body: usuario, // Con cuerpo
//             })
//             .then((result) => {
//                 document.getElementById('usuarioInsertado').innerHTML = '<p class="text-success"> Usuario registrado con éxito </p>';
//             })

//         // (D) SERVER RESPONSE
//         .then((response) => {
//             console.log(response);
//         })

//         // (E) HANDLE ERRORS - OPTIONAL
//         .catch((error) => {
//             console.log(error);
//         });
//     }