<?php
// Начало сессии
session_start();

// Если пользователь отправил форму, сохраняем имя в сессии
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && !empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

// Если пользователь нажал кнопку сброса, удаляем данные из сессии
if (isset($_POST['reset'])) {
    session_unset(); // Очистить все данные сессии
    session_destroy(); // Уничтожить сессию
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие пользователя</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .reset-button {
            margin-top: 20px;
            background-color: #FF6347;
        }
        .reset-button:hover {
            background-color: #e55347;
        }
        .code-container {
            margin-top: 40px;
            text-align: left;
            max-width: 600px;
            width: 100%;
            background: #f4f4f4;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        pre {
            margin: 0;
            overflow-x: auto;
            font-size: 14px;
        }

        .back-button {
            margin-top: 20px;
        }
        .back-button a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button a:hover {
            background-color: #45a049;}
    </style>
</head>
<body>
    <div class="container">
        <h1>Введите ваше имя</h1>

        <?php
        // Если имя пользователя уже сохранено в сессии
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            echo "<h2>Привет, " . htmlspecialchars($_SESSION['username']) . "!</h2>";
            echo "<form method='POST'><button type='submit' name='reset' class='reset-button'>Сбросить данные</button></form>";
        } else {
            // Если имя не сохранено, показываем форму
            echo "<form method='POST'>
                    <input type='text' name='username' placeholder='Введите ваше имя' required>
                    <button type='submit'>Отправить</button>
                  </form>";
        }
        ?>
    </div>

    <div class="code-container">
        <h2>Описание задания:</h2>
        <p>В этом задании создается форма для ввода имени пользователя, которая сохраняется в сессии. После того как пользователь введет имя, на странице будет отображаться приветствие, например, "Привет, Иван!". Также реализована кнопка для сброса данных из сессии, которая очищает имя пользователя и возвращает форму для ввода нового имени.</p>
        
        <h3>Ключевые шаги:</h3>
        <ul>
            <li>Создана форма для ввода имени пользователя через текстовое поле.</li>
            <li>После отправки формы сохраняется имя в сессии с помощью <code>$_SESSION['username'] = $_POST['username'];</code>.</li>
            <li>Если имя сохранено, на странице отображается приветствие с этим именем.</li>
            <li>Добавлена кнопка для сброса данных из сессии, которая очищает все данные с помощью <code>session_unset();</code> и <code>session_destroy();</code>.</li>
        </ul>

        <h3>Пример PHP кода:</h3>
        <pre>
&lt;?php
// Начало сессии
session_start();

// Если пользователь отправил форму, сохраняем имя в сессии
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && !empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

// Если пользователь нажал кнопку сброса, удаляем данные из сессии
if (isset($_POST['reset'])) {
    session_unset(); // Очистить все данные сессии
    session_destroy(); // Уничтожить сессию
}
?&gt;
        </pre>
        <div class="back-button">
        <a href="../zadanie.php">Назад</a>
    </div>
    </div>
</body>
</html>
