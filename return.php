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
            <span class="section__subtitle" data-aos="fade-up">Гарантии</span>
            <h1 data-aos="fade-up" data-aos-delay="100">Политика возврата средств</h1>
            
            <div class="pages__content">
                <h2 data-aos="fade-up">Условия для оформления возврата</h2>
                <p data-aos="fade-up">
                    Мы стремимся к тому, чтобы обучение на платформе <strong><?= $domainTitle ?></strong> приносило реальную пользу. Вы можете претендовать на возврат средств в следующих ситуациях:
                </p>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Несоответствие программы описанию:</strong> Если содержание курса или экспертного материала существенно отличается от учебного плана, заявленного на <strong><?= $fullDomain ?></strong> на момент покупки.
                    </li>
                    <li>
                        <strong>Технические неисправности:</strong> При возникновении критических ошибок на стороне платформы, которые делают доступ к 3D-визуализациям или AI-инструментам невозможным в течение более чем 48 часов.
                    </li>
                    <li>
                        <strong>«Период охлаждения»:</strong> Согласно нормам ЕС, вы имеете право отказаться от программы в течение 14 календарных дней с момента оплаты, если вы еще не приступили к активному изучению материалов.
                    </li>
                </ul>

                <h2 data-aos="fade-up">Процедура запроса</h2>
                <p data-aos="fade-up">
                    Чтобы инициировать процедуру возврата, пожалуйста, выполните следующие шаги:
                </p>
                <ol class="custom-list" data-aos="fade-up">
                    <li>Отправьте письмо на наш официальный email: <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient">support@<?= $fullDomain ?></a>.</li>
                    <li>В теме письма укажите: «Запрос на возврат средств — [Ваше Имя]».</li>
                    <li>Укажите email, использованный при регистрации, и название программы.</li>
                    <li>Кратко опишите причину запроса для улучшения качества нашего сервиса.</li>
                    <li>Наша служба поддержки в <strong>Дюссельдорфе</strong> рассмотрит заявку в течение 3 рабочих дней.</li>
                </ol>

                <h2 data-aos="fade-up">Сроки и способ выплаты</h2>
                <p data-aos="fade-up">
                    После одобрения возврата денежные средства будут перечислены в течение 7–14 рабочих дней тем же способом, которым была совершена оплата. Фактический срок зачисления зависит от регламента вашего банка в <strong>Германии</strong> или стране вашего пребывания.
                </p>

                <h2 data-aos="fade-up">Исключения</h2>
                <p data-aos="fade-up">Возврат невозможен, если:</p>
                <ul data-aos="fade-up">
                    <li>С момента покупки прошло более 14 дней.</li>
                    <li>Вы изучили или скачали более 50% учебных материалов курса.</li>
                    <li>Причиной проблем являются неисправности на стороне пользователя (плохое интернет-соединение, несовместимость личного ПО).</li>
                </ul>

                <h2 data-aos="fade-up">Свяжитесь с нами</h2>
                <p data-aos="fade-up">
                    По вопросам условий обучения и возвратов обращайтесь в офис поддержки:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+4921143624235">+49 211 436 242 35</a><br>
                    <strong>Адрес:</strong> Königsallee 60, 40212 Düsseldorf, Germany
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-up" data-aos-delay="200" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026</p>
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