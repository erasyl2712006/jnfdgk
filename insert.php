<?php
// insert.php

// Подключаем конфигурационный файл
include 'config.php';

// Проверяем, был ли отправлен запрос на добавление данных
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    // Вставляем данные в таблицу
    $sql = "INSERT INTO users (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Новая запись успешно добавлена!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

// Закрываем соединение
$conn->close();
?>

<!-- Форма для ввода данных -->
<form method="POST" action="insert.php">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Добавить</button>
</form>
