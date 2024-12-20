<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            min-height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }
        input, select, button {
            flex: 1 1 calc(33% - 20px);
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0;
            min-width: 300px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #e8f5e9;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .description {
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            line-height: 1.8;
            font-size: 16px;
            text-align: justify;
        }
        .highlight {
            font-weight: bold;
            color: #333;
        }
        .back-button {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-button a:hover {
            background-color: #0056b3;
        }
        pre {
            background: #f4f4f4;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Простой калькулятор</h1>
        <form method="POST">
            <input type="number" name="number1" placeholder="Введите первое число" required>
            <input type="number" name="number2" placeholder="Введите второе число" required>
            <select name="operation" required>
                <option value="add">Сложение</option>
                <option value="subtract">Вычитание</option>
                <option value="multiply">Умножение</option>
                <option value="divide">Деление</option>
            </select>
            <button type="submit">Вычислить</button>
        </form>

        <?php
        // Обработка формы
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $operation = $_POST["operation"];
            
            // Проверяем, что числа корректны
            if (!is_numeric($number1) || !is_numeric($number2)) {
                echo "<div class='result'>Пожалуйста, введите корректные числа.</div>";
                exit;
            }

            // Выполняем операцию
            $result = null;
            switch ($operation) {
                case "add":
                    $result = $number1 + $number2;
                    break;
                case "subtract":
                    $result = $number1 - $number2;
                    break;
                case "multiply":
                    $result = $number1 * $number2;
                    break;
                case "divide":
                    if ($number2 == 0) {
                        echo "<div class='result'>Ошибка: Деление на ноль недопустимо.</div>";
                        exit;
                    }
                    $result = $number1 / $number2;
                    break;
                default:
                    echo "<div class='result'>Выбрана некорректная операция.</div>";
                    exit;
            }

            // Отображаем результат
            echo "<div class='result'>Результат: $result</div>";
        }
        ?>
    </div>

    <div class="description">
        <p><span class="highlight">Описание задания:</span> Этот проект представляет собой простой калькулятор на PHP.</p>
        <p>Программа включает:</p>
        <ul>
            <li>Форма на HTML с двумя полями для ввода чисел и выпадающим списком для выбора операции.</li>
            <li>Обработку данных на PHP для выполнения математических операций.</li>
            <li>Стилизацию формы с помощью CSS, чтобы она занимала всю ширину страницы.</li>
            <li>Проверку данных, включая защиту от деления на ноль.</li>
            <li>Кнопку "Назад", которая возвращает пользователя на страницу <span class="highlight">zadanie.php</span>.</li>
        </ul>
        <p>Пример исходного кода калькулятора:</p>
        <pre>
&lt;form method="POST"&gt;
    &lt;input type="number" name="number1" placeholder="Введите первое число" required&gt;
    &lt;input type="number" name="number2" placeholder="Введите второе число" required&gt;
    &lt;select name="operation" required&gt;
        &lt;option value="add"&gt;Сложение&lt;/option&gt;
        &lt;option value="subtract"&gt;Вычитание&lt;/option&gt;
        &lt;option value="multiply"&gt;Умножение&lt;/option&gt;
        &lt;option value="divide"&gt;Деление&lt;/option&gt;
    &lt;/select&gt;
    &lt;button type="submit"&gt;Вычислить&lt;/button&gt;
&lt;/form&gt;
        </pre>
    </div>

    <div class="back-button">
    <a href="../zadanie.php">Назад</a>
    </div>
</body>
</html>
