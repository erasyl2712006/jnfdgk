<?php
// Определяем путь к файлу для хранения сообщений
$file = 'guestbook.txt';

// Если форма отправлена, сохраняем данные в файл
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $timestamp = date("Y-m-d H:i:s");

    // Открываем файл для записи и добавляем новое сообщение
    $fileHandle = fopen($file, 'a');
    fwrite($fileHandle, "$timestamp - $name: $message\n");
    fclose($fileHandle);
}

// Очистка файла при нажатии кнопки "Очистить"
if (isset($_POST['clear'])) {
    file_put_contents($file, ""); // Очищаем файл
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
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
        input[type="text"], textarea {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
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
        .clear-button {
            background-color: #FF6347;
        }
        .clear-button:hover {
            background-color: #e55347;
        }
        .messages-container {
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
            text-decoration: none;
            color: #007BFF;
            font-size: 16px;
        }
        .back-button a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Гостевая книга</h1>

        <form method="POST">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <textarea name="message" placeholder="Ваше сообщение" required></textarea>
            <button type="submit">Отправить</button>
        </form>

        <form method="POST">
            <button type="submit" name="clear" class="clear-button">Очистить книгу</button>
        </form>
    </div>

    <div class="messages-container">
        <h2>Сообщения:</h2>
        <?php
        // Чтение и вывод сообщений из файла
        if (file_exists($file)) {
            $messages = file_get_contents($file);
            if (!empty($messages)) {
                echo nl2br($messages); // nl2br добавляет переводы строк
            } else {
                echo "<p>Сообщений пока нет.</p>";
            }
        }
        ?>
    </div>

    <!-- Кнопка "Назад" -->
    <div class="back-button">
        <a href="../zadanie.php">Назад</a>
    </div>

    <div class="code-container">
        <h2>Описание задания:</h2>
        <p>Задание заключается в создании гостевой книги, в которую пользователи могут отправлять свои сообщения. Все сообщения сохраняются в текстовом файле <code>guestbook.txt</code> и выводятся на странице.</p>
        
        <h3>Ключевые шаги:</h3>
        <ul>
            <li>Создана форма для ввода имени пользователя и его сообщения.</li>
            <li>После отправки формы данные сохраняются в текстовый файл <code>guestbook.txt</code>.</li>
            <li>Все сообщения из файла выводятся на странице с помощью функции <code>file_get_contents()</code>.</li>
            <li>Реализована кнопка для очистки файла с помощью <code>file_put_contents($file, "")</code>.</li>
        </ul>

        <h3>Пример PHP кода:</h3>
        <pre>
&lt;?php
// Определяем путь к файлу для хранения сообщений
$file = 'guestbook.txt';

// Если форма отправлена, сохраняем данные в файл
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $timestamp = date("Y-m-d H:i:s");

    // Открываем файл для записи и добавляем новое сообщение
    $fileHandle = fopen($file, 'a');
    fwrite($fileHandle, "$timestamp - $name: $message\n");
    fclose($fileHandle);
}

// Очистка файла при нажатии кнопки "Очистить"
if (isset($_POST['clear'])) {
    file_put_contents($file, ""); // Очищаем файл
}
?&gt;
        </pre>
    </div>
</body>
</html>
