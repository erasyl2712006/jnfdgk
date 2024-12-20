<?php
// Начало сессии
session_start();

// Если массив контактов не существует, создаем его
if (!isset($_SESSION['contacts'])) {
    $_SESSION['contacts'] = [];
}

// Функция для добавления контакта
function addContact($name, $phone, $email) {
    $_SESSION['contacts'][] = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email
    ];
}

// Функция для удаления контакта по имени
function deleteContact($name) {
    foreach ($_SESSION['contacts'] as $key => $contact) {
        if ($contact['name'] == $name) {
            unset($_SESSION['contacts'][$key]);
            return true;
        }
    }
    return false;
}

// Функция для поиска контакта по имени
function searchContact($name) {
    foreach ($_SESSION['contacts'] as $contact) {
        if ($contact['name'] == $name) {
            return $contact;
        }
    }
    return null;
}

// Обработка данных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        addContact($_POST['name'], $_POST['phone'], $_POST['email']);
    } elseif (isset($_POST['delete'])) {
        $deleteResult = deleteContact($_POST['name']);
    } elseif (isset($_POST['search'])) {
        $searchResult = searchContact($_POST['name']);
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная книга</title>
    <style>
        
            body {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}
        .container {
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 80%;  /* Увеличьте ширину */
    max-width: 800px;  /* Увеличьте максимальную ширину */
    border-radius: 8px;
}
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, button {
            padding: 10px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        button:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .message {
            margin-top: 20px;
            text-align: center;
        }
        .back-button {
            margin-top: 20px;
            text-align: center;
        }
        .back-button a {
            background-color: #2196F3;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button a:hover {
            background-color: #1976D2;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Контактная книга</h1>

    <!-- Описание задания -->
    <div class="form-group">
        <h2>Описание задания:</h2>
        <p><strong>Цель:</strong> Создать контактную книгу, в которой пользователь может:</p>
        <ul>
            <li>Добавить контакт с данными (имя, телефон, email).</li>
            <li>Удалить контакт по имени.</li>
            <li>Искать контакт по имени.</li>
        </ul>

        <p><strong>Технологии:</strong></p>
        <ul>
            <li><strong>PHP:</strong> Обрабатывает данные для добавления, удаления и поиска контактов.</li>
            <li><strong>HTML:</strong> Формирует форму для ввода данных и отображение контактов.</li>
            <li><strong>CSS:</strong> Используется для стилизации страницы и улучшения внешнего вида.</li>
        </ul>

        <p><strong>Логика работы:</strong></p>
        <ul>
            <li><strong>Добавление контакта:</strong> Пользователь вводит имя, телефон и email. Эти данные сохраняются в массив <code>$contacts</code>.</li>
            <li><strong>Удаление контакта:</strong> Если имя контакта совпадает с введенным пользователем, контакт удаляется из массива.</li>
            <li><strong>Поиск контакта:</strong> Если введенное имя найдено в массиве, отображается информация о соответствующем контакте.</li>
        </ul>
        <p><strong>Пример кода для добавления контакта:</strong></p>
        <pre>
            // Функция для добавления контакта
            function addContact($name, $phone, $email) {
                global $contacts;
                $contacts[] = [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email
                ];
            }
        </pre>
    </div>

    <!-- Форма для добавления контакта -->
    <div class="form-group">
        <h2>Добавить контакт</h2>
        <form method="POST">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" required>
            <label for="phone">Телефон</label>
            <input type="text" id="phone" name="phone" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <button type="submit" name="add">Добавить контакт</button>
        </form>
    </div>

    <!-- Форма для удаления контакта -->
    <div class="form-group">
        <h2>Удалить контакт</h2>
        <form method="POST">
            <label for="delete_name">Имя для удаления</label>
            <input type="text" id="delete_name" name="name" required>
            <button type="submit" name="delete">Удалить контакт</button>
        </form>
        <?php
        if (isset($deleteResult) && $deleteResult) {
            echo "<p class='message'>Контакт успешно удален!</p>";
        } elseif (isset($deleteResult) && !$deleteResult) {
            echo "<p class='message'>Контакт не найден.</p>";
        }
        ?>
    </div>

    <!-- Форма для поиска контакта -->
    <div class="form-group">
        <h2>Поиск контакта</h2>
        <form method="POST">
            <label for="search_name">Имя для поиска</label>
            <input type="text" id="search_name" name="name" required>
            <button type="submit" name="search">Найти контакт</button>
        </form>
        <?php
        if (isset($searchResult)) {
            if ($searchResult) {
                echo "<p class='message'>Контакт найден: " . $searchResult['name'] . ", Телефон: " . $searchResult['phone'] . ", Email: " . $searchResult['email'] . "</p>";
            } else {
                echo "<p class='message'>Контакт не найден.</p>";
            }
        }
        ?>
    </div>

    <!-- Таблица для отображения списка контактов -->
<h2>Список контактов</h2>
<table>
    <thead>
        <tr>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['contacts'] as $contact): ?>
            <tr>
                <td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['phone']; ?></td>
                <td><?php echo $contact['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    <!-- Кнопка "Назад" -->
    <div class="back-button">
        <a href="../zadanie.php">Назад</a>
    </div>
</div>

</body>
</html>
