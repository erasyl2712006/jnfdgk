<?php
// config.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
} else {
    // Успешное подключение
    error_log("Подключение к базе данных прошло успешно");  // Логируем успешное подключение
}
?>
