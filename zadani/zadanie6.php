<?php
// Ставки валют для конвертации
$exchangeRates = [
    'USD' => 1,    // 1 USD
    'EUR' => 0.94,  // 1 USD = 0.94 EUR
    'KZT' => 464.70 // 1 USD = 464.70 KZT
];

// Переменные для обработки формы
$amount = 0;
$fromCurrency = 'USD';
$toCurrency = 'EUR';
$result = 0;

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $fromCurrency = $_POST['from_currency'];
    $toCurrency = $_POST['to_currency'];

    // Конвертация суммы
    if ($fromCurrency == $toCurrency) {
        $result = $amount; // Если валюты одинаковые, результат = введенной сумме
    } else {
        // Конвертируем через USD (обменные курсы привязаны к USD)
        $amountInUSD = $amount / $exchangeRates[$fromCurrency];
        $result = $amountInUSD * $exchangeRates[$toCurrency];
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор валют</title>
    <style>
        /* Основные стили для страницы */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            max-width: 600px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .description {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        input, select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-top: 20px;
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
        <h1>Калькулятор валют</h1>

        <!-- Описание задания -->
        <div class="description">
            <h2>Описание задания:</h2>
            <p>
                В этом задании мы создаем калькулятор валют, который позволяет конвертировать одну валюту в другую.
                Пользователь может выбрать валюту для конвертации (например, USD, EUR, KZT), ввести сумму в одной валюте
                и получить результат в другой валюте.
            </p>
            <p>
                Используются фиксированные курсы обмена:
                <ul>
                    <li>1 USD = 1 USD</li>
                    <li>1 USD = 0.94 EUR</li>
                    <li>1 USD = 464.70 KZT</li>
                </ul>
            </p>
            <p>Для конвертации мы используем простую форму, где можно выбрать валюты и ввести сумму для пересчета.</p>
        </div>

        <!-- Форма для ввода данных -->
        <form method="POST">
            <input type="number" name="amount" placeholder="Введите сумму" value="<?php echo $amount; ?>" required step="0.01">
            <select name="from_currency" required>
                <option value="USD" <?php echo $fromCurrency == 'USD' ? 'selected' : ''; ?>>USD</option>
                <option value="EUR" <?php echo $fromCurrency == 'EUR' ? 'selected' : ''; ?>>EUR</option>
                <option value="KZT" <?php echo $fromCurrency == 'KZT' ? 'selected' : ''; ?>>KZT</option>
            </select>
            <select name="to_currency" required>
                <option value="USD" <?php echo $toCurrency == 'USD' ? 'selected' : ''; ?>>USD</option>
                <option value="EUR" <?php echo $toCurrency == 'EUR' ? 'selected' : ''; ?>>EUR</option>
                <option value="KZT" <?php echo $toCurrency == 'KZT' ? 'selected' : ''; ?>>KZT</option>
            </select>
            <button type="submit">Конвертировать</button>
        </form>

        <!-- Результат конвертации -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result">
                <?php
                echo "Результат: $amount $fromCurrency = " . round($result, 2) . " $toCurrency";
                ?>
            </div>
        <?php endif; ?>

        <!-- Кнопка назад -->
        <div class="back-button">
            <a href="../zadanie.php">Назад</a>
        </div>
    </div>

    <!-- Описание кода -->
    <div class="description">
        <h2>Описание кода:</h2>
        <p>В этом проекте использованы следующие технологии:</p>
        <ul>
            <li><strong>PHP:</strong> Используется для обработки формы, выполнения расчетов и вывода результатов.</li>
            <li><strong>HTML:</strong> Для создания формы ввода данных и отображения результата.</li>
            <li><strong>CSS:</strong> Для стилизации страницы, улучшения внешнего вида интерфейса.</li>
        </ul>

        <p><strong>Ключевые части кода:</strong></p>
        <pre>
&lt;?php
// Курсы валют
$exchangeRates = [
    'USD' => 1,    // 1 USD
    'EUR' => 0.94,  // 1 USD = 0.94 EUR
    'KZT' => 464.70 // 1 USD = 464.70 KZT
];

// Обработка данных формы
$amount = $_POST['amount'];
$fromCurrency = $_POST['from_currency'];
$toCurrency = $_POST['to_currency'];

// Конвертация через USD
$amountInUSD = $amount / $exchangeRates[$fromCurrency];
$result = $amountInUSD * $exchangeRates[$toCurrency];
?&gt;
        </pre>
    </div>

</body>
</html>
