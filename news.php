<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name = "description" content="Школа программирования для детей и подростков во Владивостоке. Обучим работе с Python, C++, С#, HTML, CSS, JavaScript, Scratch, Roblox, Minecraft и многое другое. Персональная программа. Записывайтесь сейчас! Создавайте свои проекты. Отслеживайте прогресс. Актуальные навыки. Опытные преподаватели. Персональная программа. Выбирайте удобный формат - онлайн или оффлайн, идивидуальые занятия или в небольшой группе.">
    <meta name="keywords" content="Владивосток, Программирование, онлайн, оффлайн, групповые занятия, индивидуальные занятия, Приморский край, cкетчинг, цифровой рисунок, IT, анимация, 3D-моделирование, Python, Roblox, Minecraft, создание игр, создание сайтов, создание приложений">
    <meta name="color-scheme" content="only light">
    <link type="image/x-icon" rel="shortcut icon" href="/images/logo.ico">
    <title>Новости</title>
    <link rel="preload" href="/fonts/Rubik.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/Nekst-Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="/fonts/Miama_Nueva.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/news.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="/js/maska-nomera.js"></script>
    <script defer src = "/js/pop_up.js"></script>
    <script defer src = "/js/news.js"></script>
</head>
<body class="overflow_y">
<header id="header-section">
    <div id = "container">
        <div id = "menu">
            <a href="index.php" id = "menu_logo"></a>
            <nav id = "menu_nav">
                <ul id = "menu_list">
                    <li class = "menu_item"><a href="news.php">Новости</a></li>
                    <li class = "menu_item"><a href="courses.php">Курсы</a></li>
                    <li class = "menu_item"><a href="gallery.php">Галерея</a></li>
                    <li class = "menu_item"><a href="payment.php">Оплата</a></li>
                    <li class = "menu_item"><a href="#contact">Контакты</a></li>
                </ul>
            </nav>
            <button id = "menu_btn" class="sign_up">ЗАПИСАТЬСЯ НА УРОК</button>
        </div>
    </div>
</header>

<nav id="header-section-mobile" class="navbar">
    <div class="navbar-container container">
        <a href="index.php" id = "menu_logo"></a>
        <input type="checkbox"  name="" id="">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="menu-items">
            <li><a href="news.php">Новости</a></li>
            <li><a href="courses.php">Курсы</a></li>
            <li><a href="gallery.php">Галерея</a></li>
            <li><a href="payment.php">Оплата</a></li>
            <li><a href="#contact">Контакты</a></li>
            <li><a class="sign_up" id = "record">Записаться на урок</a></li>
            <li><a href="tel:+7 984 195-30-14" id = "tel">+7 (984) 195-30-14</a></li>
            <div id = "soc_icon_block">
                <a href="https://vk.com/progame_vl"><div class = "soc_icon" id = "vk_i"></div></a>
                <a href="https://t.me/+tNk7Txy8qOBjNDQ6"><div class = "soc_icon" id = "telegram_i"></div></a>
                <a href="https://www.instagram.com/progame_vl"><div class = "soc_icon" id = "instagram_i"></div></a>
                <a href="https://api.whatsapp.com/send?phone=79841953014"><div class = "soc_icon" id = "wh_i"></div></a>
            </div>
        </ul>
    </div>
</nav>

<main>
    <section class = "flex" id = "news">
        <?php
        $user = "root";
        $pass = "";
        $db = "n43849_new";

        try {
            // подключаемся к серверу
            $pdo = new PDO("mysql:host=localhost; charset=utf8; dbname=$db", $user, $pass);
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $stmt = $pdo->query('SELECT * FROM `news` ORDER BY `news`.`id` DESC');
        $res = $stmt->fetchAll();

        foreach($res as $row) {
            echo '<div class = "news_block">
            <div class = "flex">
                <img class = "news_img" src = "/functions/admin/images/' . $row["image"] . '">
            </div>
            <h1 class = "news_header"> '. $row["name"] .'</h1>
            <h3 class = "news_date"> ' . $row["date"] . '</h3>
            <p class = "about_text"> ' . $row["text"] .'</p>
        </div>';
        }
        ?>
    </section>
    <section id = "start">
        <img id = "dog" src = "/images/corgy.svg">
        <div id = "start_block" class="flex">
            <h1 id = "start_header">Запишитесь на бесплатное пробное занятие и мы подберём для вас программу</h1>
            <button class="flex sign_up" id = "start_btn">Начать учиться</button>
        </div>
    </section>
</main>

<footer id = "contact">
    <div class="flex" id = "contact_block">
        <div id = "addresses_block">
            <h1 id = "addresses_header">Адреса</h1>
            <ul>
                <li class="contact_text">Океанский проспект, 83</li>
                <li class="contact_text">Калинина 11a/2</li>
                <li class="contact_text">Проспект 100-летия Владивостоку, 155</li>
                <li class="contact_text">Невельского, 31</li>
                <li class="contact_text">Каплунова, 6</li>
                <li class="contact_text">Адмирала Горшкова, 36</li>
                <li class="contact_text">Казанская, 4</li>
            </ul>
        </div>
        <div class = "flex" id = "social">
            <a class = "social_a" href="https://t.me/+tNk7Txy8qOBjNDQ6">
                <div class = "flex" id = "telegram">
                    TELEGRAM
                </div>
            </a>
            <a class = "social_a" href="https://www.instagram.com/progame_vl">
                <div class = "flex" id = "instagram">
                    INSTAGRAM
                </div>
            </a>
            <a class = "social_a" href="https://vk.com/progame_vl">
                <div class = "flex" id = "vkontakte">
                    VKONTAKTE
                </div>
            </a>
        </div>
        <div id = "contact_phone">
            <h1 id = "contact_header">Как с нами связаться</h1>
            <a class = "contact_a contact_text">office@progamevl.ru</a>
            <a class = "contact_a contact_text" href = "tel:+7 984 195-30-14">+7 984 195-30-14</a>
        </div>
    </div>
    <div id = "white_line"></div>
    <div class="flex" id = "document_block">
        <p class = "document_text" id = "desktop_text">© 2023 ProGameVL</p>
        <div class="flex" id = "documents">
            <a class = "document_text doc" id = "requisites">Реквизиты</a>
            <a class = "document_text doc" href = "/docs/license.pdf">Лицензия</a>
            <a class = "document_text doc" href = "/docs/INN.pdf">ИНН</a>
            <a class = "document_text doc" href = "/docs/OGRN.pdf">ОГРН</a>
            <a class = "document_text doc" href = "https://docs.google.com/document/d/1tyC4HICWIrlPZl_ZxLpnQFViXcW5oQeh8r8H6vFcE4I/edit?usp=sharing">Образец договора на оказание образовательных услуг</a>
        </div>
        <p class = "document_text" id = "mobile_text">© 2023 ProGameVL</p>
    </div>
</footer>

<div id = "requisites_popup" class="popup-bg">
    <div class = "popup">
        <img class="close-popup" id = "cl" src="/images/icons/close.png" >
        <h1 id = "requisites_header">Реквизиты</h1>
        <p class = "requisites_text">ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «БЕРИС»</p>
        <p class = "requisites_text">Г. ВЛАДИВОСТОК, УЛ. АЛЕУТСКАЯ,Д. 45-А ОФ.905</p>
        <p class = "requisites_text">ИНН/КПП 2540147523/2540010</p>
        <p class = "requisites_text">Р/С 40702810400060001999</p>
        <p class = "requisites_text">В АО «ДАЛЬНЕВОСТОЧНЫЙ БАНК»</p>
        <p class = "requisites_text">БИК 040507705 К/С 30101810900000000705</p>

    </div>
</div>

<div id = "sign_up_popup" class="popup-bg">
    <div id = "sign_popup" class  = "popup flex">
        <img class="close-popup" id = "cl1" src="/images/icons/close.png" >
        <h1 id = "sign_up_header">Запишитесь на бесплатный урок</h1>
        <h2 id = "sign_up_sub_header">Оставьте свои контакты и наш менеджер свяжется с вами в ближайшее время</h2>
        <form id = "contact_form" action="">
            <input required id = "parent_name" type="text" name = "Parent_name" class = "input_sign_up" placeholder="Ваше имя"><br>
            <input required id = "child_name" type="text" name = "Child_name" class = "input_sign_up" placeholder="Имя ребёнка"><br>
            <input required id = "phone_mask" name ="Phone" type="tel" class = "input_sign_up" placeholder="Номер телефона"><br>
            <h1 id = "date_label">Дата рождения ребёнка</h1>
            <input required id = "date_sign_up" type="date" name ="Date" class = "input_sign_up" placeholder="Дата рождения ребёнка"><br>
            <button id = "sign_up_btn" name = "sign_up_btn" type="submit">Отправить</button>
        </form>
        <p id = "sign_up_text">Нажимая на кнопку вы соглашаетесь с нашей <a id = "sign_up_a" href = "/docs/confidential.pdf">политикой конфиденциальности</a></p>
    </div>
</div>

<div id = "preloader" class = "preloader">
    <p id = "preloader_text">Идёт загрузка страницы<br>
        Пожалуйста, подождите ... </p>
    <div class = "preloader_loader">
        <div class="loadingio-spinner-spin-xhfksgy9s2">
            <div class="ldio-nzs6obxip0o">
                <div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div>
            </div>
        </div>
        <span class = "preloader_percents">
                        <span id = "percent">0</span>%
                    </span>
    </div>
</div>

<a href="https://api.whatsapp.com/send?phone=79841953014">
    <div id = "whats_app" class="flex">
        <img src = "/images/whatsapp.png" width="100%" height="100%">
    </div>
</a>

<script src = "/js/preloader.js"></script>
</body>
</html>
<?php

?>

<?php
?>