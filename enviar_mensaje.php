<?php
include 'db.php';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$nombre, $email, $mensaje]);
echo "Mensaje enviado correctamente.";
?>