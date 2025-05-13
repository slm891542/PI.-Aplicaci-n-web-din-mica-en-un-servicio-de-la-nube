<?php
$host = getenv("DB_HOST");
$db = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASSWORD");
$port = getenv("DB_PORT");
$conn = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
?>