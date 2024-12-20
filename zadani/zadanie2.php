<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .form-group {
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
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
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
            background-color: #45a049;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Список студентов</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Имя студента</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Массив студентов
                $students = ["Иванов", "Петров", "Сидоров", "Кузнецов", "Смирнов"];
                
                // Вывод студентов в таблице
                foreach ($students as $index => $student) {
                    echo "<tr>
                            <td>" . ($index + 1) . "</td>
                            <td>$student</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Поиск студента</h2>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="search" placeholder="Введите имя студента" required>
            </div>
            <button type="submit">Искать</button>
        </form>

        <?php
        // Поиск студента
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = trim($_POST["search"]);
            if (in_array($search, $students)) {
                echo "<div class='result'>Студент найден: $search</div>";
            } else {
                echo "<div class='result'>Студент не найден: $search</div>";
            }
        }
        ?>
    </div>

    <div class="code-container">
        <h2>Описание задания:</h2>
        <p>В этом задании реализован список студентов в виде массива, который отображается в HTML-таблице. Также добавлена HTML-форма для поиска студента по имени.</p>
        <p><strong>Ключевые шаги:</strong></p>
        <ul>
            <li>Создан массив студентов: <code>$students = ["Иванов", "Петров", "Сидоров", "Кузнецов", "Смирнов"];</code></li>
            <li>С помощью цикла <code>foreach</code> имена студентов выводятся в HTML-таблице.</li>
            <li>Реализован поиск студента с помощью функции <code>in_array()</code>.</li>
            <li>Форма отправляет имя методом POST, а PHP-скрипт проверяет наличие имени в массиве.</li>
        </ul>
        <p><strong>Пример PHP-кода:</strong></p>
        <pre>
$students = ["Иванов", "Петров", "Сидоров"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = trim($_POST["search"]);
    if (in_array($search, $students)) {
        echo "Студент найден: $search";
    } else {
        echo "Студент не найден.";
    }
}
        </pre>
    </div>

    <div class="back-button">
        <a href="../zadanie.php">Назад</a>
    </div>
</body>
</html>
