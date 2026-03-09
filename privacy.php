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
            <span class="section__subtitle" data-aos="fade-up">Защита данных</span>
            <h1 data-aos="fade-up" data-aos-delay="100">Политика конфиденциальности</h1>

            <div class="pages__content">
                <p data-aos="fade-up">
                    Настоящая Политика конфиденциальности распространяется на персональные данные, предоставляемые клиентами платформы <strong><?= $domainTitle ?></strong>, как для оказания образовательных и консалтинговых услуг, так и для любого иного взаимодействия в электронном формате на территории Германии и стран ЕС.
                </p>

                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения настоящей Политики. Новые редакции имеют приоритет над текущими. Обратите внимание, что наш ресурс <strong><?= $fullDomain ?></strong> может содержать ссылки на сторонние сервисы (например, Google Analytics или библиотеки визуализации), которые имеют собственные правила обработки данных. Мы не несем ответственности за политику конфиденциальности сторонних компаний.
                </p>

                <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> собирает данные исключительно с вашего согласия для обеспечения доступа к инновационным методикам обучения, участия в сессиях и получения аналитики. Мы применяем современные протоколы шифрования и технические меры безопасности в соответствии с немецкими стандартами IT-безопасности.
                </p>

                <p data-aos="fade-up">
                    Срок хранения данных определяется целями их сбора, но не превышает установленных законодательством ЕС норм. Мы храним информацию до завершения деятельности платформы или до момента официального отзыва согласия пользователем. Уничтожение или обезличивание данных происходит сразу после достижения цели их обработки.
                </p>

                <h2 data-aos="fade-up">Категории собираемых данных:</h2>
                
                <h3 data-aos="fade-up">Техническая информация:</h3>
                <ul data-aos="fade-up">
                    <li>время доступа, IP-адрес и тип браузера;</li>
                    <li>источники перехода на <strong><?= $fullDomain ?></strong>;</li>
                    <li>посещаемые страницы и просмотры интерактивных блоков (в т.ч. Three.js сцен);</li>
                    <li>номер телефона (при использовании кнопок быстрой связи на сайте).</li>
                </ul>

                <h3 data-aos="fade-up">Информация для персонализации:</h3>
                <p data-aos="fade-up">При заполнении форм обратной связи мы собираем данные для аутентификации:</p>
                <ul data-aos="fade-up">
                    <li>имя пользователя;</li>
                    <li>e-mail и номер телефона для оперативной поддержки в Дюссельдорфе.</li>
                </ul>

                <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
                <ul data-aos="fade-up">
                    <li>сведения о заключенных соглашениях и пройденных программах обучения;</li>
                    <li>данные о запросах на консультации и внедрение AI-инструментов;</li>
                    <li>история произведенных платежей в рамках финансовых норм ЕС.</li>
                </ul>

                <h2 data-aos="fade-up">Цели обработки данных:</h2>
                <ul data-aos="fade-up">
                    <li>предоставление образовательных услуг и доступа к закрытым разделам платформы;</li>
                    <li>учет предпочтений при обновлении технологического стека сайта;</li>
                    <li>информирование о новых материалах, акциях и вебинарах через e-mail;</li>
                    <li>обеспечение экспертной поддержки высокого уровня.</li>
                </ul>

                <h2 data-aos="fade-up">Передача данных третьим лицам:</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> не передает ваши данные третьим лицам, за исключением случаев:
                </p>
                <ul data-aos="fade-up">
                    <li>получения прямого согласия от вас;</li>
                    <li>официальных запросов от государственных органов Германии (Bundesnetzagentur и др.);</li>
                    <li>необходимости защиты прав платформы в рамках юридических процессов.</li>
                </ul>

                <h2 data-aos="fade-up">Cookies и аналитика</h2>
                <p data-aos="fade-up">
                    Файлы cookie помогают нам анализировать трафик и сохранять ваши региональные настройки для Германии. Это делает работу с <strong><?= $fullDomain ?></strong> более эффективной и быстрой. Вы можете отключить Cookies в настройках своего браузера в любой момент.
                </p>

                <h2 data-aos="fade-up">Ваши права (GDPR)</h2>
                <p data-aos="fade-up">
                    Вы имеете право на доступ, редактирование или полное удаление своих данных. Для реализации этих прав, пожалуйста, свяжитесь с нашей службой поддержки:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+4921143624235">+49 211 436 242 35</a>
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-up" data-aos-delay="200" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Редакция от: Март 2026.</p>
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