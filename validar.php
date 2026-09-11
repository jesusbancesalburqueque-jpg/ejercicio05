<?php

$usuarios = [
    [
        "correo" => "admin@gmail.com",
        "clave"  => "123456",
        "nombre" => "Administrador"
    ],
    [
        "correo" => "juan@gmail.com",
        "clave"  => "abc123",
        "nombre" => "Juan Pérez"
    ],
    [
        "correo" => "maria@gmail.com",
        "clave"  => "maria123",
        "nombre" => "María López"
    ]
];

$correo = $_POST["txtCorreo"];
$clave = $_POST["txtClave"];

function buscarUsuario($usuarios, $correo, $clave) {
    foreach ($usuarios as $user) {
        if ($user["correo"] === $correo && $user["clave"] === $clave) {
            return $user["nombre"];
        }
    }
    return null;
}

$nombreEncontrado = buscarUsuario($usuarios, $correo, $clave);

if ($nombreEncontrado !== null) {
    header("Location: bienvenida.php?nombre=" . urlencode($nombreEncontrado));
    exit;
} else {
    header("Location: login.php?error=si");
    exit;
}