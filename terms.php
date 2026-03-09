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
            <span class="section__subtitle" data-aos="fade-up">Правовая информация</span>
            <h1 data-aos="fade-up" data-aos-delay="100">Условия использования</h1>

            <div class="pages__content">
                <p data-aos="fade-up">
                    Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования (далее — «Условия») представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и администрацией <strong><?= $domainTitle ?></strong> (далее — «Платформа», «мы»). Пожалуйста, внимательно ознакомьтесь с ними. Используя наш сайт и любые связанные с ним образовательные услуги, вы подтверждаете свое полное согласие с данными Условиями.
                </p>

                <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
                <p data-aos="fade-up">
                    Платформа предоставляет Пользователю доступ к функционалу сайта <strong><?= $fullDomain ?></strong>, включая образовательные материалы по AI-технологиям, интерактивные 3D-визуализации, экспертные консультации и инструменты для карьерного роста в странах ЕС. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с цифровой средой проекта.
                </p>

                <h2 data-aos="fade-up">2. Правила использования платформы</h2>
                <p data-aos="fade-up">
                    Вы обязуетесь использовать ресурс исключительно в законных целях. При работе с <strong><?= $domainTitle ?></strong> запрещается:
                </p>
                <ul data-aos="fade-up">
                    <li>Распространять контент, нарушающий авторские права или законодательство Германии и ЕС.</li>
                    <li>Использовать автоматизированные системы (скрипты, боты) для массового сбора данных или дестабилизации работы серверов.</li>
                    <li>Копировать уникальный программный код, графические элементы (в т.ч. Three.js сцены) и методики обучения для коммерческого использования без нашего разрешения.</li>
                    <li>Предоставлять заведомо ложные данные при регистрации на консультации или курсы.</li>
                </ul>

                <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
                <p data-aos="fade-up">
                    Весь контент, размещенный на <strong><?= $fullDomain ?></strong> (тексты, дизайн, 3D-модели, логотипы), является собственностью <strong><?= $domainTitle ?></strong>. Вам предоставляется ограниченная неисключительная лицензия на использование материалов в личных целях для профессионального развития. Любое тиражирование Контента без письменного согласия правообладателя строго запрещено.
                </p>

                <h2 data-aos="fade-up">4. Отказ от гарантий</h2>
                <p data-aos="fade-up">
                    Образовательные услуги предоставляются по принципу «как есть». Мы стремимся к максимальной точности данных, однако не несем ответственности за косвенные убытки или неисполнение ожиданий Пользователя, связанных с динамическими изменениями на рынке труда или технологий. Ответственность за применение полученных навыков лежит на Пользователе.
                </p>

                <h2 data-aos="fade-up">5. Разрешение споров</h2>
                <p data-aos="fade-up">
                    Все разногласия решаются путем переговоров. В случае невозможности достижения компромисса, споры подлежат рассмотрению в соответствии с действующим законодательством по месту регистрации Оператора в <strong>Дюссельдорфе, Германия</strong>.
                </p>

                <h2 data-aos="fade-up">6. Контактная информация</h2>
                <p data-aos="fade-up">
                    Если у вас возникли вопросы по данным Условиям, свяжитесь с нами:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-gradient">hello@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+4921143624235">+49 211 436 242 35</a><br>
                    <strong>Адрес:</strong> Königsallee 60, 40212 Düsseldorf, Germany
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-up" data-aos-delay="200" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026.</p>
            </div>
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