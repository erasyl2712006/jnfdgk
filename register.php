<?php
// register.php
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
$success = ''; // Переменная для сообщения об успехе
$username = $email = ''; // Переменные для сохранения данных формы

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Проверяем, что поля не пустые
    if (empty($username) || empty($email) || empty($password)) {
        $error = 'Пожалуйста, заполните все поля.';
    } else {
        // Хешируем пароль
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Подготавливаем SQL-запрос для вставки данных
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

        // Подготавливаем и выполняем запрос
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('sss', $username, $email, $hashedPassword);

            if ($stmt->execute()) {
                $success = 'Регистрация прошла успешно! <a href="login.php">Войти</a>';
                $username = $email = ''; // Очищаем поля формы после успешной регистрации
            } else {
                $error = 'Ошибка при регистрации: ' . $stmt->error;
            }

            $stmt->close();
        } else {
            $error = 'Ошибка подготовки запроса: ' . $conn->error;
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
    <title>Регистрация</title>
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <div class="container">
        <h1>Регистрация</h1>
        <?php if (!empty($error)): ?>
            <div class="error" style="color: red;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($success)): ?>
            <div class="success" style="color: green;">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="register.php">
            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Зарегистрироваться</button>
        </form>
        <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
    </div>
</body>
</html>
