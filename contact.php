<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться с нами</title>
    <link rel="stylesheet" href="style/style3.css"> <!-- Ваши стили -->
</head>
<body>
    <div class="container">
        <h1>Связаться с нами</h1>

        <!-- Форма для отправки сообщения через Formspree -->
        <form action="https://formspree.io/f/xzzbldok" method="POST"> <!-- Замените URL на ваш Formspree URL -->
            <label for="name">Ваше имя</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Ваш email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Сообщение</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Отправить сообщение</button>
        </form>
    </div>
</body>
</html>
