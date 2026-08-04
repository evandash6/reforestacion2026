<?Php
date_default_timezone_set('America/Mexico_City');

require_once 'config/database.php';

$db = Database::conectar();
session_start();


function obtenerIP()
{
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ips[0]);
    }

    return $_SERVER['REMOTE_ADDR'];
}

if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    die('Solicitud inválida');
} else {
    $ip = obtenerIP();
    $nombre = trim($_POST['nombre']);
    $sexo = trim($_POST['sexo']);
    $edad = trim($_POST['edad']);
    $telefono = trim($_POST['telefono']);
    $etnia = trim($_POST['etnia']);
    $email = trim($_POST['email']);
    $estado = trim($_POST['estado']);
    $fecha_registro = date('d-m-Y H:i:s');


    if (empty($nombre) || empty($email) || empty($sexo) || empty($edad) || empty($telefono) || empty($estado) || empty($etnia)) {
        die("Todos los campos son obligatorios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo inválido.");
    }

    $sql = "INSERT INTO registros_pagina(ip, nombre, sexo, edad, telefono, etnia, email, estado, fecha_hora_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $db->prepare($sql);

    $stmt->bind_param($ip, $nombre, $sexo, $edad, $telefono, $etnia, $email, $estado, $fecha_registro);

    if ($stmt->execute()) {
        echo "Usuario guardado correctamente.<br><br>";
    } else {

        echo "Error al guardar.";
    }

    $stmt->close();
}
