<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <title>Начальный программист - Задания</title>
   
</head>
<body>
<header>
        <h1>PHP</h1>
        <nav>
            <a href="index.php">Главная</a>
            <a href="zadanie.php" class="active">Задание</a>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h2>Добро пожаловать!</h2>
            <p>На этом сайте вы найдете множество заданий для практики.</p>
        </section>

        <section class="tasks">
            <h2>Список заданий</h2>
            <div class="task">
                <h3>Задание 1</h3>
                <p>Простой калькулятор.
                </p>
                <a href="zadani/zadanie1.php" class="btn">Подробнее</a>
            </div>

            <div class="task">
                <h3>Задание 2</h3>
                <p>Список студентов</p>
                <a href="zadani/zadanie2.php" class="btn">Подробнее</a>
            </div>

            <div class="task">
                <h3>Задание 3</h3>
                <p>Каталог товаров.</p>
                <a href="zadani/zadanie3.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 4</h3>
                <p>Введите ваше имя</p>
                <a href="zadani/zadanie4.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 5</h3>
                <p>Гостевая книга</p>
                <a href="zadani/zadanie5.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 6</h3>
                <p>Калькулятор валют</p>
                <a href="zadani/zadanie6.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 7</h3>
                <p>Контактная книга</p>
                <a href="zadani/zadanie7.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 8</h3>
                <p>Каталог товаров</p>
                <a href="zadani/zadanie8.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 9</h3>
                <p></p>
                <a href="zadani/zadanie9.php" class="btn">Подробнее</a>
            </div>
            <div class="task">
                <h3>Задание 10</h3>
                <p></p>
                <a href="zadani/zadanie7.php" class="btn">Подробнее</a>
            </div>

        </section>
    </main>

   

    <script>
    // Функция для изменения стиля header при прокрутке
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    
    // Если прокрутка больше 100px, добавляем класс "scrolled"
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    // Обновляем активные ссылки при прокрутке
    updateActiveLink();
});
</script>
</body>
</html>
