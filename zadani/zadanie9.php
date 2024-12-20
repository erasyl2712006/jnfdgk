<?php
// Обработка загрузки файла
if (isset($_POST['upload'])) {
    // Папка для хранения загруженных файлов
    $target_dir = "uploads/";

    // Получаем информацию о загружаемом файле
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Проверка размера файла (макс. 5 МБ)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Извините, файл слишком большой.";
        $uploadOk = 0;
    }
    
    // Разрешенные типы файлов (только изображения)
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Извините, только изображения (JPG, JPEG, PNG, GIF) разрешены.";
        $uploadOk = 0;
    }
    
    // Если $uploadOk установлен в 0, то файл не загружается
    if ($uploadOk == 0) {
        echo "Извините, файл не был загружен.";
    } else {
        // Если все проверки пройдены, загружаем файл
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Файл ". htmlspecialchars(basename($_FILES["file"]["name"])) . " был успешно загружен.";
        } else {
            echo "Извините, произошла ошибка при загрузке файла.";
        }
    }
}

// Список загруженных файлов
$directory = 'uploads/';
if (!is_dir($directory)) {
    mkdir($directory, 0777, true);  // Создаем папку, если её нет
}

$files = scandir($directory);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файлов</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="file"] {
            padding: 10px;
            width: 100%;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        .file-list {
            margin-top: 20px;
        }
        .file-list ul {
            list-style-type: none;
            padding: 0;
        }
        .file-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Загрузка файлов</h1>

    <!-- Форма загрузки файла -->
    <div class="form-group">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="file">Выберите файл для загрузки:</label>
            <input type="file" name="file" id="file" required>
            <button type="submit" name="upload">Загрузить</button>
        </form>
    </div>

    <!-- Список загруженных файлов -->
    <div class="file-list">
        <h2>Список загруженных файлов:</h2>
        <?php
        if (count($files) > 2) { // Если в папке есть файлы
            echo '<ul>';
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    echo "<li><a href='$directory$file' target='_blank'>$file</a></li>";
                }
            }
            echo '</ul>';
        } else {
            echo '<p>Пока нет загруженных файлов.</p>';
        }
        ?>
    </div>

    <!-- Описание задания -->
    <div>
        <h3>Описание задания:</h3>
        <p>Цель задания – создать систему для загрузки файлов, которая выполняет следующие действия:</p>
        <ul>
            <li>Пользователь может выбрать файл для загрузки через форму на веб-странице.</li>
            <li>Система проверяет тип файла и его размер перед загрузкой на сервер.</li>
            <li>Файл сохраняется в папке на сервере (папка <code>uploads/</code>).</li>
            <li>Система отображает список загруженных файлов, с возможностью их просмотра по ссылке.</li>
        </ul>

        <h3>Технологии:</h3>
        <ul>
            <li><strong>PHP:</strong> Обрабатывает загрузку файла, проверку размера и типа файла.</li>
            <li><strong>HTML:</strong> Формирует форму для загрузки файлов и отображение списка файлов.</li>
            <li><strong>CSS:</strong> Используется для стилизации страницы.</li>
        </ul>

        <h3>Логика работы:</h3>
        <ul>
            <li><strong>Загрузка файла:</strong> Пользователь выбирает файл, который проверяется на соответствие типу (JPG, JPEG, PNG, GIF) и размеру (не более 5 МБ). Если файл соответствует этим требованиям, он загружается на сервер.</li>
            <li><strong>Отображение файлов:</strong> После загрузки файлов на сервер, система отображает список файлов, с возможностью перехода по ссылке для просмотра.</li>
        </ul>
    </div>
</div>
<!-- Кнопка "Назад" -->
<div class="back-button">
        <a href="../zadanie.php">Назад</a>
    </div>
</div>
</body>
</html>
