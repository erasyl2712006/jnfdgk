<?php
session_start();
require_once 'config.php'; // Подключаем файл конфигурации

if (isset($_SESSION['user'])) {
    header('Location: welcome.php');
    exit();
}

if (!isset($conn) || $conn->connect_error) {
    die('Ошибка подключения к базе данных. Проверьте config.php.');
}

$error = ''; // Переменная для хранения ошибок

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Проверяем, что поля не пустые
    if (empty($email) || empty($password)) {
        $error = 'Пожалуйста, заполните все поля.';
    } else {
        // Подготавливаем SQL-запрос для проверки пользователя
        $sql = "SELECT email, password FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($dbEmail, $dbPassword);
                $stmt->fetch();

                // Проверяем пароль
                if (password_verify($password, $dbPassword)) {
                    $_SESSION['user'] = $dbEmail; // Сохраняем пользователя в сессии
                    header('Location: welcome.php'); // Переход на страницу приветствия
                    exit();
                } else {
                    $error = 'Неправильный пароль!';
                }
            } else {
                $error = 'Пользователь с таким email не найден!';
            }

            $stmt->close();
        } else {
            $error = 'Ошибка запроса: ' . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <div class="container">
        <h1>Вход</h1>
        <?php if (!empty($error)): ?>
            <div class="error" style="color: red;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
        <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
    </div>
</body>
</html>
