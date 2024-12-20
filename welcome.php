<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Если нет сессии, перенаправляем на логин
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать</title>
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
        <p>Вы успешно вошли в систему.</p>
        <a href="logout.php">Выйти</a>
        <br>
        <a href="index.php">На главную страницу</a>
    </div>
</body>
</html>
