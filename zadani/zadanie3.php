<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
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
            max-width: 800px;
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
        select {
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
        <h1>Каталог товаров</h1>

        <!-- Форма для фильтрации по категории -->
        <form method="POST">
            <div class="form-group">
                <select name="category" required>
                    <option value="">Выберите категорию</option>
                    <option value="electronics">Электроника</option>
                    <option value="clothing">Одежда</option>
                    <option value="furniture">Мебель</option>
                </select>
            </div>
            <button type="submit">Фильтровать</button>
        </form>

        <h2>Товары</h2>
        <table>
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Категория</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ассоциативный массив с товарами
                $products = [
                    ["name" => "Телевизор", "price" => 50000, "category" => "electronics"],
                    ["name" => "Смартфон", "price" => 25000, "category" => "electronics"],
                    ["name" => "Футболка", "price" => 1500, "category" => "clothing"],
                    ["name" => "Диван", "price" => 25000, "category" => "furniture"],
                    ["name" => "Ноутбук", "price" => 60000, "category" => "electronics"],
                    ["name" => "Куртка", "price" => 4000, "category" => "clothing"]
                ];

                // Получаем выбранную категорию из формы
                $selectedCategory = isset($_POST['category']) ? $_POST['category'] : '';

                // Фильтруем и выводим товары
                foreach ($products as $product) {
                    if ($selectedCategory === '' || $product['category'] === $selectedCategory) {
                        echo "<tr>
                                <td>{$product['name']}</td>
                                <td>{$product['price']} ₽</td>
                                <td>{$product['category']}</td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="code-container">
        <h2>Описание задания:</h2>
        <p>В этом задании создается каталог товаров, представленный ассоциативным массивом. Каждый товар включает в себя название, цену и категорию.</p>
        <p><strong>Ключевые шаги:</strong></p>
        <ul>
            <li>Создан массив товаров с ключами "name", "price" и "category".</li>
            <li>С помощью формы реализована фильтрация товаров по категории.</li>
            <li>Если категория выбрана, отображаются только товары выбранной категории.</li>
        </ul>
        <p><strong>Пример PHP-кода:</strong></p>
        <pre>
$products = [
    ["name" => "Телевизор", "price" => 50000, "category" => "electronics"],
    ["name" => "Смартфон", "price" => 25000, "category" => "electronics"],
    ["name" => "Футболка", "price" => 1500, "category" => "clothing"],
    ["name" => "Диван", "price" => 25000, "category" => "furniture"]
];
$selectedCategory = isset($_POST['category']) ? $_POST['category'] : '';
foreach ($products as $product) {
    if ($selectedCategory === '' || $product['category'] === $selectedCategory) {
        echo "{$product['name']} - {$product['price']} ₽ ({$product['category']})<br>";
    }
}
        </pre>
    </div>

    <div class="back-button">
        <a href="../zadanie.php">Назад</a>
    </div>
</body>
</html>
