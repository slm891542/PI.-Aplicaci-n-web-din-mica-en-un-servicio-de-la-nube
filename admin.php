<?php
include 'db.php';
$mensajes = $conn->query("SELECT * FROM mensajes")->fetchAll(PDO::FETCH_ASSOC);
echo "<h1>Mensajes recibidos</h1><ul>";
foreach ($mensajes as $m) {
  echo "<li><strong>{$m['nombre']}</strong> ({$m['email']}): {$m['mensaje']}</li>";
}
echo "</ul>";
?>