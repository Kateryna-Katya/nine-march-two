<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновации на пальцах
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2245%22 fill=%22%236366f1%22 opacity=%220.2%22/><path d=%22M30 50 Q50 20 70 50 T30 80%22 stroke=%22%236366f1%22 stroke-width=%228%22 fill=%22none%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Программы</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#about" class="nav__link">О платформе</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">Связаться</a>
                <button class="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы сделать ваше обучение максимально продуктивным, обеспечить стабильную работу интерактивных элементов (включая 3D-визуализации) и анализировать активность пользователей, мы используем файлы cookie. Настоящая политика объясняет, как мы применяем эти технологии в рамках нашего присутствия в Германии и как вы можете ими управлять.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой текстовый файл, который сохраняется на вашем устройстве, когда вы посещаете <strong><?= $domainTitle ?></strong>. Это позволяет платформе "запоминать" ваши предпочтения (язык, настройки интерфейса в регионе Дюссельдорф и прогресс в обучении), чтобы вам не приходилось настраивать всё заново при каждом визите.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Обеспечивают базовую функциональность сайта и безопасность доступа к образовательным материалам.
                </li>
                <li>
                    <strong>Аналитические файлы cookie:</strong> Помогают нам понять, какие разделы платформы наиболее популярны, чтобы мы могли улучшать контент и методики обучения.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Используются для сохранения ваших настроек и персонализации опыта взаимодействия с инструментами AI.
                </li>
                <li>
                    <strong>Технологические файлы cookie:</strong> Необходимы для корректного отображения 3D-графики (Three.js) и интерактивных анимаций.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы их используем?</h2>
            <p data-aos="fade-up">Основные цели <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Бесперебойная работа интерактивных интерфейсов.</li>
                <li>Оптимизация скорости загрузки платформы для пользователей в странах ЕС.</li>
                <li>Адаптация образовательного пути под ваши интересы.</li>
                <li>Предоставление актуальной информации о новых программах и обновлениях.</li>
            </ul>

            <h2 data-aos="fade-up">Управление файлами cookie</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над данными. Настройки вашего браузера позволяют блокировать или удалять файлы cookie в любое время. Пожалуйста, учитывайте, что при отключении строго необходимых файлов некоторые части платформы, включая интерактивные блоки и форму регистрации, могут работать некорректно.
            </p>

            <h2 data-aos="fade-up">Обновления политики</h2>
            <p data-aos="fade-up">
                Мы можем обновлять настоящую Политику в соответствии с изменениями законодательства Германии и ЕС (GDPR). Продолжая использовать наш сайт, вы соглашаетесь с текущими условиями использования технологий отслеживания.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы о том, как <strong><?= $domainTitle ?></strong> использует данные, свяжитесь с нашей службой поддержки:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+4921143624235">+49 211 436 242 35</a><br>
                <strong>Адрес:</strong> Königsallee 60, 40212 Düsseldorf, Germany
            </p>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__text">Решения, которые меняют правила игры. Платформа года в сфере доступного
                        образования.</p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#courses">Программы</a></li>
                        <li><a href="./#tech">Технологии</a></li>
                        <li><a href="./#about">О нас</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contact">
                        <li>
                            <i data-lucide="phone" class="icon-sm"></i>
                            <a href="tel:+4921143624235">+49 211 436 242 35</a>
                        </li>
                        <li>
                            <i data-lucide="mail" class="icon-sm"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin" class="icon-sm"></i>
                            <span>Königsallee 60, 40212 Düsseldorf, Germany</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                    2026
                    <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
                </p>
            </div>
        </div>
    </footer>
            <div class="mobile-menu" id="mobile-menu">
                <div class="mobile-menu__content">
                    <ul class="mobile-menu__list">
                        <li><a href="./#hero" class="mobile-link">Главная</a></li>
                        <li><a href="./#courses" class="mobile-link">Программы</a></li>
                        <li><a href="./#tech" class="mobile-link">Технологии</a></li>
                        <li><a href="./#about" class="mobile-link">О нас</a></li>
                        <li><a href="./#faq" class="mobile-link">FAQ</a></li>
                        <li><a href="./#contact" class="mobile-link btn btn--primary">Связаться</a></li>
                    </ul>
                </div>
            </div>
            <div id="cookie-popup" class="cookie-popup">
                <div class="cookie-popup__content">
                    <div class="cookie-popup__icon">
                        <i data-lucide="cookie"></i>
                    </div>
                    <div class="cookie-popup__text">
                        Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                            политике</a>.
                    </div>
                    <div class="cookie-popup__actions">
                        <button id="cookie-accept" class="btn btn--primary btn--sm">Принять</button>
                    </div>
                </div>
            </div>

    <script src="script.js"></script>
</body>

</html>