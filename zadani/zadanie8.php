<?php
session_start();

// Пример каталога товаров
$products = [
    1 => ['name' => 'Товар 1', 'price' => 100],
    2 => ['name' => 'Товар 2', 'price' => 200],
    3 => ['name' => 'Товар 3', 'price' => 300],
    4 => ['name' => 'Товар 4', 'price' => 400],
];

// Инициализация корзины
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Добавление товара в корзину
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];

    if (isset($products[$product_id])) {
        $_SESSION['cart'][$product_id] = $_SESSION['cart'][$product_id] ?? 0;
        $_SESSION['cart'][$product_id]++;
    }
}

// Удаление товара из корзины
if (isset($_GET['remove_from_cart'])) {
    $product_id = $_GET['remove_from_cart'];

    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// Функция для получения общей суммы
function getTotalAmount() {
    global $products;
    $total = 0;
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $total += $products[$product_id]['price'] * $quantity;
    }
    return $total;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <style>
        .product, .cart-item {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
        }
        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .cart-item button {
            background-color: #f44336;
        }
        .cart-item button:hover {
            background-color: #e53935;
        }
        .description {
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h2 {
            margin-bottom: 15px;
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
    <h1>Каталог товаров</h1>
    <div>
        <?php foreach ($products as $id => $product): ?>
            <div class="product">
                <span><?php echo $product['name']; ?></span>
                <span>Цена: <?php echo $product['price']; ?> ₽</span>
                <a href="?add_to_cart=<?php echo $id; ?>"><button>Добавить в корзину</button></a>
            </div>
        <?php endforeach; ?>
    </div>

    <hr>
    <h2>Корзина</h2>
    <div>
        <?php if (empty($_SESSION['cart'])): ?>
            <p>Ваша корзина пуста.</p>
        <?php else: ?>
            <?php foreach ($_SESSION['cart'] as $product_id => $quantity): ?>
                <div class="cart-item">
                    <span><?php echo $products[$product_id]['name']; ?> (x<?php echo $quantity; ?>)</span>
                    <span><?php echo $products[$product_id]['price'] * $quantity; ?> ₽</span>
                    <a href="?remove_from_cart=<?php echo $product_id; ?>"><button>Удалить</button></a>
                </div>
            <?php endforeach; ?>
            <div class="cart-item">
                <strong>Итого: <?php echo getTotalAmount(); ?> ₽</strong>
            </div>
            <a href="checkout.php"><button>Перейти к оформлению</button></a>
        <?php endif; ?>
    </div>

    <!-- Описание задания -->
    <div class="description">
        <h2>Описание задания:</h2>
        <p><strong>Цель:</strong> Создать интернет-магазин, который позволяет пользователю просматривать каталог товаров, добавлять товары в корзину, удалять товары из корзины и просматривать итоговую сумму заказа.</p>
        <ul>
            <li><strong>Каталог товаров:</strong> Отображает список товаров с ценами и кнопками для добавления в корзину.</li>
            <li><strong>Корзина:</strong> Пользователь может просматривать товары, которые были добавлены в корзину, с возможностью удаления товаров и просмотра общей суммы.</li>
            <li><strong>Функционал:</strong> При добавлении товаров в корзину их количество увеличивается, а при удалении товар убирается из корзины.</li>
        </ul>

        <p><strong>Технологии:</strong></p>
        <ul>
            <li><strong>PHP:</strong> Обрабатывает логику добавления и удаления товаров из корзины, а также подсчёт общей суммы.</li>
            <li><strong>HTML/CSS:</strong> Формирует структуру страницы и стилизует элементы для улучшения пользовательского интерфейса.</li>
        </ul>

        <p><strong>Пример кода для добавления товара в корзину:</strong></p>
        <pre>
            if (isset($_GET['add_to_cart'])) {
                $product_id = $_GET['add_to_cart'];

                if (isset($products[$product_id])) {
                    $_SESSION['cart'][$product_id] = $_SESSION['cart'][$product_id] ?? 0;
                    $_SESSION['cart'][$product_id]++;
                }
            }
        </pre>
    </div>

    <!-- Кнопка "Назад" -->
    <div class="back-button">
    <a href="../zadanie.php">Назад</a>
    </div>
</body>
</html>
