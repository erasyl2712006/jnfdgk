<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Начальный программист - Главная</title>
</head>
<body>
<header>
        <h1>PHP</h1>
        <nav>
            <a href="index.php" class="active">Главная</a>
            <a href="#about">О нас</a>
            <a href="#php-info">Что такое PHP?</a>
            <a href="#features">Основные возможности PHP</a>
            <a href="#history">История</a>
            <a href="#tips">Советы для начинающих</a>
            <a href="zadanie.php">Задание</a>
            <a href="register.php">Зарегистрируйтесь здесь</a>
        </nav>
</header>

    <!-- Начальный экран с фоновым изображением -->
    <img class="fon" src="image\фон.jpg" alt="Фоновое изображение" id="home">
    <div class="hero-content">
    
    <h1>Hello World</h1>
    <p>Мы — команда разработчиков, и научим тебя работать с PHP, создавая крутые сайты. Начни свой путь в программировании с наших заданий!</p>
    
</div>
    
<section id="about">
    <!-- Раздел "О нас" (для прокрутки вниз) -->
    <div id="about">О нас</div>
    <div  class="info-section" id="about"> 
    <div class="info-text">
        <h2>Обучение новичков</h2>
        <p>Мы — команда профессионалов, готовых помочь вам освоить новые технологии и научить их эффективному применению в реальных проектах. Наша цель — дать вам все необходимые навыки для успеха в мире программирования и разработки.</p>
    </div>

    <div class="info-blocks">
        <div class="info-item">
            <div class="icon">📚</div>
            <h3>Основы программирования</h3>
            <p>Мы обучаем вас основам программирования, начиная с самых базовых концепций и заканчивая реальными проектами.</p>
        </div>

        <div class="info-item">
            <div class="icon">💻</div>
            <h3>Веб-разработка</h3>
            <p>Научим вас создавать современные и функциональные веб-сайты, используя HTML, CSS, JavaScript и другие технологии.</p>
        </div>

        <div class="info-item">
            <div class="icon">🔧</div>
            <h3>Работа с инструментами</h3>
            <p>Мы познакомим вас с современными инструментами разработки, такими как Git, IDE, и популярными фреймворками.</p>
        </div>

        <div class="info-item">
            <div class="icon">🚀</div>
            <h3>Развитие карьеры</h3>
            <p>Поможем вам развить навыки, которые откроют для вас новые карьерные возможности в IT-сфере.</p>
        </div>
    </div>

    <a href="contact.php#contact" class="btn">Связаться с нами</a>

</div>
</section>


<section id="php-info">  <div class="php-info" id="php-info">
      
    <h2>Что такое PHP?</h2>
    <p class="p1">
        PHP (Hypertext Preprocessor) — это язык программирования с открытым исходным кодом, который применяется для создания динамических веб-сайтов и серверных приложений. 
        Он был разработан в 1995 году и с тех пор продолжает активно развиваться. PHP позволяет внедрять логику в HTML-код, обрабатывать формы, взаимодействовать с базами данных .
        <img src="image\clon.png" alt="">
    </p>
    <p class="p2">
        PHP поддерживает широкий спектр веб-фреймворков, таких как Laravel, Symfony, и Zend, которые значительно упрощают процесс разработки. Язык PHP широко используется для создания контентных менеджментов систем (CMS) таких как WordPress, Drupal и Joomla. 
        Преимущества PHP включают простоту в освоении, кросс-платформенность и большую.
        <img src="image\Php 4.jpeg" alt="">
    </p>
    
</div>
</section>
   
<section id="features">
<div class="features" id="features" >
   
    <div class="features-table">
    <h2>Основные возможности PHP</h2>
    <table>
    <tr>
        <th>Возможность</th>
        <th>Описание</th>
    </tr>
    <tr>
        <td>Работа с базами данных</td>
        <td>PHP поддерживает множество баз данных, включая MySQL, PostgreSQL, SQLite и MongoDB.</td>
    </tr>
    <tr>
        <td>Генерация динамического содержимого</td>
        <td>Автоматическое обновление данных на страницах без необходимости их ручного редактирования.</td>
    </tr>
    <tr>
        <td>Безопасность</td>
        <td>PHP предоставляет инструменты для защиты веб-приложений, такие как обработка пользовательского ввода и защита от SQL-инъекций.</td>
    </tr>
    <tr>
        <td>Масштабируемость</td>
        <td>PHP можно использовать как для небольших проектов, так и для крупных корпоративных систем.</td>
    </tr>
    <tr>
        <td>Интеграция с API</td>
        <td>PHP позволяет подключаться к сторонним сервисам, таким как платежные системы, почтовые сервисы и другие API.</td>
    </tr>
    <tr>
        <td>Обработка файлов</td>
        <td>PHP может читать, создавать, редактировать и загружать файлы на сервер.</td>
    </tr>
    <tr>
        <td>Работа с сессиями</td>
        <td>PHP поддерживает сессии для хранения данных о пользователях, например, для авторизации.</td>
    </tr>
    <tr>
        <td>Поддержка сжимаемых файлов</td>
        <td>PHP предоставляет инструменты для работы с архивами, включая gzip, tar и другие форматы.</td>
    </tr>
    <tr>
        <td>Кеширование</td>
        <td>PHP поддерживает кеширование данных, что помогает ускорить работу веб-приложений и уменьшить нагрузку на сервер.</td>
    </tr>
    <tr>
        <td>Работа с изображениями</td>
        <td>PHP поддерживает обработку изображений, включая создание миниатюр, изменения размеров и применения фильтров.</td>
    </tr>
    <tr>
        <td>Создание RESTful API</td>
        <td>PHP позволяет создавать RESTful API, что удобно для взаимодействия с мобильными приложениями и сторонними сервисами.</td>
    </tr>
    <tr>
        <td>Поддержка многозадачности</td>
        <td>PHP поддерживает многозадачность и многопоточность, что позволяет выполнять несколько операций одновременно.</td>
    </tr>
    <tr>
        <td>Работа с шаблонами</td>
        <td>PHP часто используется с шаблонизаторами, такими как Twig или Blade, для разделения логики и представления данных.</td>
    </tr>
    <tr>
        <td>Поддержка ООП</td>
        <td>PHP поддерживает объектно-ориентированное программирование, что помогает создавать более структурированные и масштабируемые приложения.</td>
    </tr>
    <tr>
        <td>Отправка электронных писем</td>
        <td>PHP позволяет отправлять электронные письма через различные почтовые серверы и API, например, через SMTP.</td>
    </tr>
    <tr>
        <td>Автоматическое тестирование</td>
        <td>PHP поддерживает инструменты для автоматического тестирования, такие как PHPUnit, для проверки правильности работы кода.</td>
    </tr>
    <tr>
        <td>Поддержка мультиязычности</td>
        <td>PHP поддерживает локализацию и интернационализацию, позволяя создавать многоязычные веб-приложения.</td>
    </tr>
</table>

</div>
</section>


    
<section id="history">
<div class="history" id="history">
    <h2>История PHP</h2>
    <div class="cards">
        <div class="card">
            <h3>1995</h3>
            <p class="short-description">Первая версия PHP.</p>
            <div class="long-description">
                <p><strong>Первая версия PHP:</strong> Создана как набор инструментов для отслеживания посещений на персональном сайте Расмуса Лердорфа.</p>
            </div>
        </div>

        <!-- Стрелка для хронологии -->

        <div class="card">
            <h3>1997</h3>
            <p class="short-description">PHP 3.0.</p>
            <div class="long-description">
                <p><strong>PHP 3.0:</strong> Первая общедоступная версия с полноценным синтаксисом языка.</p>
            </div>
        </div>

       <!-- Стрелка для хронологии -->

        <div class="card">
            <h3>2000</h3>
            <p class="short-description">PHP 4.0.</p>
            <div class="long-description">
                <p><strong>PHP 4.0:</strong> Появление нового движка Zend Engine.</p>
            </div>
        </div>

        <!-- Стрелка линия между 2000 и 2004 -->
      

        <div class="card">
            <h3>2004</h3>
            <p class="short-description">PHP 5.0.</p>
            <div class="long-description">
                <p><strong>PHP 5.0:</strong> Поддержка объектно-ориентированного программирования.</p>
            </div>
        </div>

        <!-- Стрелка для хронологии -->

        <div class="card">
            <h3>2015</h3>
            <p class="short-description">PHP 7.0.</p>
            <div class="long-description">
                <p><strong>PHP 7.0:</strong> Значительное улучшение производительности и новая архитектура.</p>
            </div>
        </div>

         <!-- Стрелка для хронологии -->

        <div class="card">
            <h3>2020</h3>
            <p class="short-description">PHP 8.0.</p>
            <div class="long-description">
                <p><strong>PHP 8.0:</strong> Новые функции, включая JIT-компиляцию.</p>
            </div>
        </div>
    </div>
</div>

</section>

<section id="tips">
    
   
   


<div class="tips" id="tips">
    <h2>Советы для начинающих</h2>
    <div class="tips-container">
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-code"></i>
            </div>
            <h3>Начните с основ</h3>
            <p>Освойте базовые принципы PHP, такие как синтаксис, переменные, операторы и функции.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-pencil-alt"></i>
            </div>
            <h3>Практикуйтесь регулярно</h3>
            <p>Чем больше вы практикуетесь, тем быстрее улучшаете свои навыки. Пишите код каждый день!</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-book"></i>
            </div>
            <h3>Используйте документацию</h3>
            <p>Не стесняйтесь обращаться к официальной документации PHP. Это поможет вам разобраться в новых функциях и методах.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-users"></i>
            </div>
            <h3>Присоединяйтесь к сообществу</h3>
            <p>Задавайте вопросы, участвуйте в форумах и читайте блоги, чтобы углубить свои знания.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-laptop-code"></i>
            </div>
            <h3>Изучайте фреймворки</h3>
            <p>Попробуйте изучить популярные PHP-фреймворки, такие как Laravel, Symfony или CodeIgniter, чтобы ускорить разработку.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-terminal"></i>
            </div>
            <h3>Учитесь работать с командной строкой</h3>
            <p>Командная строка может значительно ускорить вашу работу с PHP и взаимодействие с различными инструментами.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-cogs"></i>
            </div>
            <h3>Освойте инструменты для разработки</h3>
            <p>Работайте с отладчиками, средствами профилирования и тестирования для улучшения качества кода.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-bug"></i>
            </div>
            <h3>Не бойтесь ошибок</h3>
            <p>Ошибки — это часть процесса обучения. Используйте их как возможность для улучшения своих навыков.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Адаптируйтесь под мобильные устройства</h3>
            <p>Учитесь создавать адаптивные веб-сайты, так как мобильный трафик продолжает расти.</p>
        </div>
        <div class="tip-card">
            <div class="tip-icon">
                <i class="fas fa-cloud"></i>
            </div>
            <h3>Изучите основы хостинга и серверов</h3>
            <p>Понимание, как работает сервер и как настроить хостинг, поможет вам развивать и развертывать свои проекты.</p>
        </div>
    </div>
</div>

</section> 

   

<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024. Начальный программист. Все права защищены.</p>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" class="social-icon">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com" target="_blank" class="social-icon">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </div>
</footer>


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

// Функция для проверки, находится ли элемент в области видимости
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

// Функция для обновления активных ссылок
function updateActiveLink() {
    const sections = document.querySelectorAll('section');
    const links = document.querySelectorAll('header nav a');
    
    let isActiveLinkSet = false;

    sections.forEach((section, index) => {
        const link = links[index + 1]; // Пропускаем первую ссылку "Главная"

        // Если секция видна на экране, добавляем класс 'active' к ссылке
        if (isInViewport(section) && !isActiveLinkSet) {
            link.classList.add('active');
            isActiveLinkSet = true; // Останавливаем подсветку на первой найденной секции
        } else {
            link.classList.remove('active');
        }
    });

    // Если пользователь на главной странице и не прокрутил, подсвечиваем "Главная"
    const mainPageLink = document.querySelector('header nav a[href="index.php"]');
    if (window.scrollY === 0) {
        mainPageLink.classList.add('active');
    } else {
        mainPageLink.classList.remove('active');
    }
}
// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', updateActiveLink);

document.querySelectorAll('header nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href').substring(1);

        // Если ссылка ведет на другую страницу, просто отпустите стандартное поведение
        if (!targetId || this.getAttribute('href').includes('.php')) {
            return;  // Не предотвращаем переход на другие страницы
        }

        e.preventDefault(); // Предотвращаем стандартный переход для внутренних ссылок
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
<div id="contactModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeContactModal">&times;</span>
            <h2>Записаться</h2>
            <form action="signup.php" method="POST">
                <label for="name">Ваше имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Ваш Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024. Начальный программист. Все права защищены.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('DOM загружен.');

            // Элементы
            const registerBtn = document.getElementById('registerBtn');
            const contactBtn = document.getElementById('contactBtn');
            const registrationModal = document.getElementById('registrationModal');
            const contactModal = document.getElementById('contactModal');
            const closeRegisterModal = document.getElementById('closeRegisterModal');
            const closeContactModal = document.getElementById('closeContactModal');

            // Проверим элементы
            console.log('Кнопка регистрации:', registerBtn);
            console.log('Кнопка контакта:', contactBtn);

            // Функции открытия и закрытия модальных окон
            if (registerBtn && registrationModal && closeRegisterModal) {
                registerBtn.addEventListener('click', function () {
                    console.log('Клик по кнопке регистрации.');
                    registrationModal.style.display = 'block';
                });

                closeRegisterModal.addEventListener('click', function () {
                    console.log('Закрытие окна регистрации.');
                    registrationModal.style.display = 'none';
                });
            }

            if (contactBtn && contactModal && closeContactModal) {
                contactBtn.addEventListener('click', function () {
                    console.log('Клик по кнопке "Связаться".');
                    contactModal.style.display = 'block';
                });

                closeContactModal.addEventListener('click', function () {
                    console.log('Закрытие окна "Связаться".');
                    contactModal.style.display = 'none';
                });
            }

            // Закрытие модального окна при клике вне его
            window.addEventListener('click', function (event) {
                if (event.target === registrationModal) {
                    console.log('Клик вне окна регистрации.');
                    registrationModal.style.display = 'none';
                }

                if (event.target === contactModal) {
                    console.log('Клик вне окна "Связаться".');
                    contactModal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>