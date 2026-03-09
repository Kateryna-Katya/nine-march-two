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
            <span class="section__subtitle" data-aos="fade-up">Конфиденциальность</span>
            <h1 data-aos="fade-up" data-aos-delay="100">Политика обработки персональных данных</h1>

            <div class="pages__content">
                <h2 data-aos="fade-up">1. Общие положения</h2>
                <p data-aos="fade-up">
                    Настоящая политика обработки персональных данных (далее — «Политика») определяет порядок и условия обработки данных, предпринимаемые образовательной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR.
                </p>
                <p data-aos="fade-up">
                    1.1. Оператор ставит своей важнейшей целью соблюдение прав и свобод человека при обработке его персональных данных, включая защиту прав на неприкосновенность частной жизни и профессиональную тайну в рамках оказания услуг в Германии.
                </p>
                <p data-aos="fade-up">
                    1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях (далее — «Пользователи») веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>

                <h2 data-aos="fade-up">2. Основные понятия</h2>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и информационных материалов, включая 3D-визуализации и AI-инструменты, доступных по адресу <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель, использующий ресурсы платформы.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация, относящаяся прямо или косвенно к определенному Пользователю.
                    </li>
                    <li>
                        <strong>Обработка данных</strong> — любое действие, совершаемое с персональными данными с использованием средств автоматизации (включая алгоритмы платформы) или без них.
                    </li>
                </ul>

                <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
                <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Данные, предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Имя и фамилия;</li>
                            <li>Адрес электронной почты;</li>
                            <li>Номер телефона (с валидацией по стандартам ФРГ).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Технические данные:</strong>
                        <ul>
                            <li>
                                Сбор обезличенных данных (в т.ч. файлов «cookie») через Google Analytics для анализа эффективности образовательного контента и работы 3D-движка.
                            </li>
                        </ul>
                    </li>
                </ul>

                <h2 data-aos="fade-up">4. Цели обработки данных</h2>
                <ul data-aos="fade-up">
                    <li>Предоставление Пользователю доступа к обучающим материалам и AI-сервисам.</li>
                    <li>Установление обратной связи для проведения бесплатных консультаций.</li>
                    <li>Исполнение договоров в рамках образовательных программ <strong><?= $domainTitle ?></strong>.</li>
                    <li>Информирование об обновлениях технологий и специальных предложениях в Дюссельдорфе.</li>
                </ul>

                <h2 data-aos="fade-up">5. Безопасность и хранение</h2>
                <p data-aos="fade-up">
                    Оператор принимает все необходимые технические меры для защиты данных от неправомерного доступа. Мы используем протоколы шифрования и безопасные сервера на территории ЕС. Данные Пользователя никогда не передаются третьим лицам без явного согласия, за исключением случаев, предусмотренных законодательством Германии.
                </p>

                <h2 data-aos="fade-up">6. Заключительные положения</h2>
                <p data-aos="fade-up">
                    Пользователь может отозвать свое согласие на обработку данных или получить разъяснения, направив запрос Оператору на электронную почту 
                    <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a> 
                    с пометкой «Запрос по персональным данным».
                </p>
                <p data-aos="fade-up">
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна на этой странице.
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-up" data-aos-delay="200" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">© <?= date('Y') ?> <?= $domainTitle ?>. Дюссельдорф, Германия.</p>
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