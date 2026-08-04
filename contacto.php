<?Php

require_once 'config/database.php';

$db = Database::conectar();

$nombre = trim($_POST['nombre']);
$correo = trim($_POST['email']);

if (empty($nombre) || empty($correo)) {
    die("Todos los campos son obligatorios.");
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    die("Correo inválido.");
}

$sql = "INSERT INTO usuarios(nombre, correo)
        VALUES (?, ?)";

$stmt = $db->prepare($sql);

$stmt->bind_param(
    "ss",
    $nombre,
    $correo
);

if ($stmt->execute()) {

    echo "Usuario guardado correctamente.<br><br>";

} else {

    echo "Error al guardar.";

}

$stmt->close();



// if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
//     die('Solicitud inválida');
// } else {
//     echo 'ok';
// }
