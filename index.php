<?php
    session_start();

    $referer = "";
    if (isset($_GET) && isset($_GET["ref"])) {
        $referer = $_GET["ref"];

        setcookie("ref", $referer, time()+60*60*24*365, '/', $_SERVER['HTTP_HOST'], false);
    }

    if (empty($referer)) {
        if (isset($_COOKIE["ref"])) {
            $referer = htmlspecialchars($_COOKIE["ref"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174202144-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-174202144-1');
    </script>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   

    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <title>НИП - Ваш путь к благополучию</title>

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body id="root">

    <!--<header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger bit-logo desk" href="#root"><img src="images/header.png" alt="" /></a>
                <a class="navbar-brand js-scroll-trigger bit-logo small" href="#root"><img src="images/header-small.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li-->   
                        <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#life">О&nbsp;платформе</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#advantages">Преимущества</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ideas">Идеи</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#invest">Инвестировать</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#map">Дорожная&nbsp;карта</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Команда</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Задать&nbsp;вопрос</a></li>   
                    </ul>
                </div>   
            </div>
        </nav>
    </header>-->

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger bit-logo desk" href="#root"><img src="images/header.png" alt="" /></a>
                <a class="navbar-brand js-scroll-trigger bit-logo small" href="#root"><img src="images/header-small.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#life">О&nbsp;платформе</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#advantages">Преимущества</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ideas">Идеи</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#invest">Инвестировать</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#map">Дорожная&nbsp;карта</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Команда</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Задать&nbsp;вопрос</a></li>
                    </ul>
                </div>               
                <div class="text-uppercase menu-bottom">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/pip.coop.pep" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://t.me/pipcoop"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/pipcoop/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0);" onclick="javascipt:setFinanceActive();showRegistrationForm();" class="nav-item">Вход</a>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('images/slide-1.jpg')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><span>ГОТОВ МЕНЯТЬ БУДУЩЕЕ?</span></h2>
                            <p class="animate__animated animate__fadeInUp">Предлагай свои амбициозные идеи для реализации</p>
                            <p class="animate__animated animate__fadeInUp">на Народной платформе!</p>
                            <a href="#ideas" class="btn-get-started js-scroll-trigger animate__animated animate__fadeInUp scrollto">Интересно !</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('images/slide-2.jpg')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><span>ХОЧЕШЬ СТАТЬ СОВЛАДЕЛЬЦЕМ?</span></h2>
                            <p class="animate__animated animate__fadeInUp">Инвестируй, чтобы стать участником кооператива</p>
                            <p class="animate__animated animate__fadeInUp">и получать дополнительный доход!</p>
                            <a href="#life" class="btn-get-started js-scroll-trigger animate__animated animate__fadeInUp scrollto">Интересно !</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('images/slide-3.jpg')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><span>ИНВЕСТИРУЙ С НАРОДОМ!<br/>ИНВЕСТИРУЙ В НАРОД!</span></h2>
                            <p class="animate__animated animate__fadeInUp">Стань финансово независимым от обстоятельств</p>
                            <p class="animate__animated animate__fadeInUp">и получи экономическую свободу своей активностью!</p>
                            <a href="#invest" class="btn-get-started js-scroll-trigger animate__animated animate__fadeInUp scrollto">Интересно !</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Назад</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Далее</span>
            </a>

        </div>
    </section>

    <section class="page-section section-back life" id="life">
        <div class="container">
            <div class="text-center">
                <h2>НИП – улучшим нашу жизнь вместе!</h2>
                <h3>Присоединяйся к народной инвестиционной платформе!</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row life-item">
                        <div class="col-lg-4">
                            <img src="images/life/01.jpg" alt="Наша миссия"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="life-item-container">
                                <h3>Наша миссия</h3>
                                <p>&emsp;Расширение возможностей самореализации, социально-экономической свободы и независимости каждого человека с применением кооперации. Повышение качества жизни каждого человека, гармонизация отношений с собой, друг другом и планетой.</p>
                                <p><b>Наши цели</b>, которых мы хотим достичь, создавая универсальный инструмент:</p>
                                <ul>
                                    <li>
                                        <p>Запуск новых экономических программ и проектов, улучшающих качество жизни каждого человека и гармонично влияющих на всю экосистему нашей планеты</p>
                                    </li>
                                    <li>
                                        <p>Сбор, обработка и внедрение всевозможных идей, которые можно применять для достижения миссии</p>
                                    </li>
                                    <li>
                                        <p>Качественное развитие коллективного взаимодействия участников сообщества: быстрое информирование, коллективное принятия решений, реализация решений силами сообщества.</p>
                                    </li>
                                </ul>
                                <p>&emsp;НИП – это первый шаг к развитой кооперативной экосистеме, которая объединяет и расширяет все наши возможности в реальной и виртуальной жизни.</p>
                                <!--<a href="javascript:void(0);">Подробнее</a>-->
                                <div class="text-center">
                                    <button class="btn-get-started mt-3" href="javascript:void(0);" onclick="javascipt:setFinanceActive();showRegistrationForm();">Присоединиться<br> к проекту</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row life-item">
                        <div class="col-lg-4">
                            <img src="images/life/02.jpg" alt="Инвестиция в будущее"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="life-item-container">
                                <h3>НИП – твоя инвестиция в будущее</h3>
                                <p>&emsp;Совместное развитие платформы принесет каждому члену сообщества дивиденды:</p>
                                <ul>
                                    <li>
                                        <p>Возможность покупать товары и услуги по внутренней цене и с проверенным качеством</p>
                                    </li>
                                    <li>
                                        <p>Реализовать свою амбициозную идею от первой мысли до дохода от реализованного конечного товара</p>
                                    </li>
                                    <li>
                                        <p>Получать доход от инвестиций в платформу, от инвестиции в последующие программы кооператива</p>
                                    </li>
                                    <li>
                                        <p>Получать дополнительный доход (а может и основной) от социального капитала  за приглашенных (за их инвестиции, и за покупку товаров и услуг)</p>
                                    </li>
                                    <li>
                                        <p>Объединение усилий для общего дела ,которое непосильно в одиночку.</p>   
                                    </li>
                                </ul>
                                <p>&emsp;НИП – это первый шаг к развитой кооперативной экосистеме.</p>
                                <p>&emsp;В период когда мировой порядок меняется и начинает в глобальных масштабах ограничивать каждого из нас в экономической деятельности, в свободе перемещения и коммуникации в масштабах планеты появляется потребность в качественном расширении возможностей активности в интернете. Как никогда актуален качественный перевод социальной и бизнес-активности в цифровое пространство,
                                когда каждый из нас не выходя из дома или другого удобного нам места мог бы решить все свои экономические, социальные и культурные потребности.</p>
                                <!--<a href="javascript:void(0);">Подробнее</a>-->
                                <div class="text-center">
                                    <button class="btn-get-started mt-3" href="javascript:void(0);" onclick="javascipt:setFinanceActive();showRegistrationForm();">Присоединиться<br> к проекту</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row life-item">
                        <div class="col-lg-4">
                            <img src="images/life/03.jpg" alt="Общество"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="life-item-container">
                                <h3>НИП – твое потребительское общество</h3>
                                <p>&emsp;В Европе, США, Японии и других развитых регионах в отличии от постсоветского пространства кооперативное движение занимает значительную долю рынка. По данным World Cooperative Monitor на Земле 3 миллиона кооперативов! 12% людей на Земле являются членами кооперативов, 10% занятого населения Земли работают в кооперативах! Топ-300 кооперативов мира генерируют оборот в 2 миллиарда долларов США. И это при том, что кооперация в интернете еще только на пороге своего развития.</p>
                                <p>&emsp;Кооператив – это добровольное автономное объединение людей для удовлетворения своих общих экономических, социальных и культурных потребностей и устремлений посредством совместного владения и демократически контролируемого предприятия.</p>
                                <p>&emsp;Кооператив (потребительское общество) у нас – это самая недооцененная и самая независимая юридическая форма, но вместе с тем как не парадоксально в стране с
                                    советским прошлым  малознакомая в современном ее виде. Кооператив людьми воспринимается скорее как пережиток прошлого,
                                    чем самая демократическая форма ведения деятельности, которая предполагает невмешательство государства в ее внутренние процессы, что закреплено в
                                    <a href="https://zakon.rada.gov.ua/laws/show/1087-15#Text" target="_blank">Законе Украины о кооперации</a> и
                                    <a href="https://zakon.rada.gov.ua/laws/show/2265-12#Text" target="_blank">Законе Украины о потребительской кооперации</a>, а также закреплено в
                                    Международном кооперативном</a> сообществе.
                                    Кооперативные принципы утвержденные <a href="https://www.ica.coop/en/cooperatives/cooperative-identity" target="_blank">Международным кооперативным альянсом</a> разделяем и мы:</p>
                                <ul>
                                    <li><p>Добровольное и открытое членство</p></li>
                                    <li><p>Демократический контроль членов</p></li>
                                    <li><p>Экономическое участие членов</p></li>
                                    <li><p>Автономия и независимость</p></li>
                                    <li><p>Образование, обучение и информация</p></li>
                                    <li><p>Сотрудничество между кооперативами</p></li>
                                    <li><p>Забота об обществе.</p></li>
                                </ul>
                                <p>&emsp;Кооперативная форма дает возможность снизить давление налогообложения на стартующие предприятия, снижает риски для инвесторов, так как в случае каких-то потрясений Ваши инвестиции защищены законодательством, так как не основателям и людям с решающим правом голоса, а именно ассоциированным членам кооператива паевые вклады возвращаются в первую очередь.</p>
                                <p>&emsp;Невозможно обходными путями вывести человека из кооператива без его желания или лишить его в нем прав.</p>
                                <div class="text-center">
                                    <button class="btn-get-started mt-3" href="javascript:void(0);" onclick="javascipt:setFinanceActive();showRegistrationForm();">Присоединиться<br> к ПО &rdquo;НИП&ldquo;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row life-item">
                        <div class="col-lg-4">
                            <img src="images/life/04.jpg" alt="Наша миссия"/>
                        </div>
                        <div class="col-lg-8">
                            <div class="life-item-container">
                                <h3>Реферальная сеть – не самоцель, а лишь инструмент</h3>
                                <p>&emsp;В век цифровых технологий жизнь ускорила свой темп и сейчас скорость – решающий фактор в развитии и конкуренции, поэтому мы выбрали реферальную сеть как метод для ускорения сбора средств, а также это подразумевает подключение к НИП сразу очень большого количества компетентных в различных сферах людей, что плюс для нашего развития.</p>
                                <p><strong>НИП – не сетевая компания:</strong></p>
                                <ul>
                                    <li>
                                        <p>У нас фиксированное количество инвестиционных пакетов</p>
                                    </li>
                                    <li>
                                        <p>Когда инвестиционные пакеты разобраны –  все самое интересное только начинается</p>
                                    </li>
                                    <li>
                                        <p>Доход от приглашений лишь приятный бонус за вашу активность и привлечение вашего социального капитала</p>
                                    </li>
                                    <li>
                                        <p>Основная цель платформы не в сетевом маркетинге, а сетевой маркетинг лишь инструмент продвижения платформы, так как мы не хотим отдавать деньги на рекламу корпорациям и посторонним людям –  пусть на рекламе заработают те же люди, которые являются совладельцами и инвесторами. Пусть Ваша активность и поддержка нашего общего дела будет не просто залогом результата и успешных инвестиций, но также приносит приятный дополнительный доход</p>
                                    </li>
                                    <li>
                                        <p>К тому же нам не нужны случайные люди на платформе –  мы доверяем Вашему выбору приглашаемых</p>
                                    </li>
                                    <li>
                                        <p>Вам не нужно ежемесячно вкладывать деньги, чтобы получать прибыль с инвестиций или своей сети приглашенных</p>
                                    </li>
                                    <li>
                                        <p>Вы в любой момент можете досрочно забрать основное тело вашей инвестиции (80%), если пришли к выводу, что вам больше не интересна платформа. Мы легко расстаемся с теми, кому с нами не по пути. Каждый человек должен быть там, где он хочет! Желаем счастья и успехов каждому</p>
                                    </li>
                                    <li>
                                        <p>И самое главное! Если Вы решили вернуть себе инвестицию –  Вам не нужно возвращать нам вознаграждение, которое Вы уже получили за приглашенных</p>
                                    </li>
                                    <li>
                                        <p>В будущем оставляем за собой право досрочного погашения инвестиционных обязательств перед пайщиками, но при выкупе инвестиции все бонусы от существующей на тот момент сети приглашенных сохраняются</p>
                                    </li>
                                    <li>
                                        <p>Первично выстроенная сеть позволяет в будущем без дополнительной активности и вложений получать вознаграждение за инвестиционное участие приглашенных: в последующих программах, за продвижение продуктов платформы, покупку товаров и услуг всей кооперативной экосистемы.</p>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="/doc/MP.pdf" target="_blank" class="btn-get-started mt-3 js-scroll-trigger animate__animated animate__fadeInUp scrollto">Маркетинг-план</a>
                                    <a href="#invest" class="btn-get-started mt-3 js-scroll-trigger animate__animated animate__fadeInUp scrollto">Инвестировать</a>
                                </div>
                                <!--<a href="javascript:void(0);">Подробнее</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section advantages" id="advantages">
        <div class="container">
            <div class="text-center">
                <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
                <h3>НАД КРАУДФАНДИНГОВЫМИ  И ИНВЕСТИЦИОННЫМИ ПЛАТФОРМАМИ</h3>
            </div>

            <div class="row row-eq-height">
                <div class="col-lg-4">
                    <div class="advantages-item">
                        <div class="label"></div>
                        <h3>ОБЕСПЕЧИВАЕМ<br/>ПРОЗРАЧНОСТЬ ПРОЕКТОВ</h3>
                        <div class="text-container">
                            <p>После каждого этапа дорожной карты ты, как СОВЛАДЕЛЕЦ и ИНВЕСТОР, получаешь отчет. В любой момент можешь увидеть показатели развития, узнать все детали и получить ответы. Все материальные потоки будут открыты для тебя</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="advantages-item">
                        <div class="label"></div>
                        <h3>ПРЕДЛАГАЕМ<br/>СОВЛАДЕНИЕ</h3>
                        <div class="text-container">
                            <p>Ты становишься совладельцем платформы и всех дочерних проектов, как член кооператива</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="advantages-item">
                        <div class="label"></div>
                        <h3>ПОМОГАЕМ ОЦЕНИВАТЬ<br/>И ДОРАБАТЫВАТЬ ИДЕИ</h3>
                        <div class="text-container">
                            <p>Обсуждаем и дорабатываем идеи, тестируем и/или получаем мнение эксперта (которым можешь быть и ты, если обладаешь компетенциями), разрабатываем бизнес-стратегию, рассчитываем необходимые вложения для старта</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-eq-height" style="margin-top: 10px;">
                <div class="col-lg-4">
                    <div class="advantages-item">
                        <div class="label"></div>
                        <h3>ЗАПУСКАЕМ<br/>И СОПРОВОЖДАЕМ ПРОЕКТЫ</h3>
                        <div class="text-container">
                            <p>Организация производства, создание команды, подготовка помещений, программное обеспечение, запуск производства, бухгалтерское и правовое сопровождение, масштабирование</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="advantages-item">
                        <div class="label"></div>
                        <h3>ПРОДВИГАЕМ<br/>И РЕАЛИЗУЕМ ПРОДУКТ</h3>
                        <div class="text-container">
                            <p>Обеспечиваем все инструменты и каналы сбыта продукции, разрабатываем маркетинговую стратегию, дизайн, полиграфию, интернет-продвижение, создадим кооперативную экосистему, где будет, в том числе, реализация товаров и услуг, а также реклама вне кооператива</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="advantages-item">
                        <div class="label"></div>
                        <h3>ТЫ – ЛУЧШИЙ<br/>АГЕНТ ПРОДАЖ!</h3>
                        <div class="text-container">
                            <p>Ты как совладелец и инвестор платформы представляешь платформу лучше и привлечешь лояльных людей с гарантированным результатом, что позволит сэкономить, снизив цену продукта внутри кооператива и даст конкурентное преимущество на внешнем рынке. Основной рекламный бюджет будет распределяться среди активных инвесторов</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="page-section section-back ideas" id="ideas">
        <div class="container">
            <div class="text-center">
                <h2>ПОМОЖЕМ РЕАЛИЗОВАТЬ ПРОСТЫЕ ИЛИ АМБИЦИОЗНЫЕ ИДЕИ</h2>
            </div>
            <div class="row">
                <div class="h-75 col-lg-6">
                    <div class="ideas-item">
                        <p>
                        &emsp;Хочешь формировать будущее? На НИП каждый сможет выдвинуть свою идею, получить на нее обратную связь не представителей государства, а таких же осознанных, самостоятельных, думающих людей, которые сами хотят определять где им жить и как. На платформе можно будет получить среду для развития и доработки своей идеи, проверенные, протестированные и утвержденные идеи будут выставлены на капитализацию народными инвесторами, а затем будет сформирована команда специалистов под каждый проект, подобран персонал и налажено производство, команда платформы будет контролировать оптимизацию технологического процесса, обеспечивать правовую поддержку, бухгалтерию, продвижение продукта и формирование сообщества для его реализации.<br/>
                        &emsp;Пришло время для получения качественно других возможностей для каждого – среда, в которой каждый сможет реализовать свои идеи, стремления, самореализоваться и обеспечить свою независимость от неадекватных решений чиновников, которые принимаются без учёта наших интересов и неожиданностей геополитической обстановки.<br/>
                        &emsp;Есть креативные люди, которые просто не хотят связываться с банками и кредитами. Среди людей, у которых нет опыта в производстве и продаже своего продукта, а также возможности и навыков получения инвестиций очень много талантливых, креативных людей и даже изобретателей и инноваторов, идеи которых так никогда и не будут реализованы, а коммерческую выгоду на устаревших технологиях получат корпорации или реализованы, но они не получат честной доли прибыли.<br/>
                        &emsp;Умные люди, которые умеют ценить и считать свои деньги инвестируют в креативных людей, которые создают будущее!
                        </p>
                    </div>
                </div>
                <div class="h-75 col-lg-6">
                    <img src="images/shema.png" alt="Схема инвестиции">
                </div>
                <div class="col-lg-12 text-center">
                    <button class="btn btn-get-started"  href="javascript:void(0);" onclick="javascipt:showRegistrationForm();">Инвестировать идею</button>
                </div> 
            </div>
        </div>
    </section>
    <!--<section class="page-section section-back sl" id="sl">-->
    <section class="page-section invest" id="invest">
        <div class="container">
            <div class="text-center">
                    <h2>ИНВЕСТИРОВАНИЕ СРЕДСТВ</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 text-left">
                    <p>
                        &emsp;Люди, которые смогли собственным трудом заработать средства больше не будут вынуждены нести их в банк, где их ценность может измениться за одну ночь, а смогут инвестировать их в развитие инновационных технологий, в обучение,
                        в качественные местные товары, смогут поддержать обеспечение здоровыми местными продуктами, выращенными в регионе без применения опасных для нас веществ.
                    </p>
                    <p>
                        &emsp;Высокотехнологичные платформы – это сложная, кропотливая работа большого коллектива, специалистов разного профиля. Чтобы создать платформу и инфраструктуру к ней генерируем 250 000 Инвестиционных Единиц (ИЕ, 1 ИЕ = 5 USD). 
                        Общий фонд инвестирования: 1 250 000 USD в гривне.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">   
                <div class="col text-center link-btn"><a href="/doc/MP.pdf" target="_blank">ЧИТАТЬ МАРКЕТИНГ ПЛАН</a></div>
                <div class="col text-center link-btn"><a href="#" target="_blank">СМОТРЕТЬ МАРКЕТИНГ-ПЛАН</a></div>   
            </div>
            
                <div class="slider">
                    <div class="slider__wrapper">
                        <div class="slider__item">
                        
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Микропул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>20 ИЕ = 100 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>в любое время</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>только за прямые приглашения</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>3 инвестпроекта</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги личноприглашенных:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>2000 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                        
                        </div>
                        <div class="slider__item">
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Минипул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>50 ИЕ = 250 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 1 год</p>
                                        <div class="line"></div>    
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>5 инвестпроектов</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>1000 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Мидипул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>100 ИЕ = 500 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 2 года</p>
                                        <div class="line"></div>
                                        
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1,1 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>10 инвестпроектов</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>500 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Максипул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>500 ИЕ = 2500 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 3 года</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1,15 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>20 инвестпроектов</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>100 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «VIP-пул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>1000 ИЕ = 5000 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 4 года</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1,2 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>без ограничений</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>40 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Exclusive»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>10 000 ИЕ = 50000 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 5 лет</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Постоянные условия:</h4>
                                        <p>коэффициент начислений 1,25 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>без ограничений</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Предусмотрено: <span>2 шт.</span></h4>
                                    </div>
                                </div>
                                <button disabled="disabled" style="background-color: #72839c; padding-bottom: 0; font-size: 14px;">На «Предстарте»<br>не доступно</button>
                            </div>
                        </div>
                    </div>
                    <a class="slider__control slider__control_left" href="#" role="button"></a>
                    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
                </div>
            
            
      
        </div>
    </section>
    <section class="page-section section-back map" id="map">
        <div class="container bg">
            <div class="col-lg-12">
                <h2>Дорожная карта НИП</h2>
                <img src="images/roadmap.png" alt="Дорожная карта НИП">
                <div class="text-center">
                    <button class="btn btn-get-started" href="javascript:void(0);" onclick="javascipt:setFinanceActive();showRegistrationForm();">Присоединиться к проекту</button>
                </div> 
            </div>
        </div>
    </section>

    <section class="page-section team" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Наша команда</h2>
                <h3 class="section-subheading text-muted">Работа над идеей платформы началась еще в 2013 году. Суммарный опыт специалистов команды: 54 года в управлении, 18 лет кооперации, 58 лет бизнеса, 10 лет народного предпринимательства, 26 лет бухгалтерии (из них 4 года бухгалтерии кооперации), 15 лет автоматизации учета, 32 года научных исследований, 20 лет маркетинга, 22 года программирования, 39 лет дизайна, 60 лет полиграфии, 12 лет млм. Мы открыты для встреч и общения.</h3>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/team/1.jpg" alt="">
                        <h4>Денис</h4>
                        <p class="text-muted">ФУНДАТОР<br/>и основатель платформы</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/team/5.jpg" alt="">
                        <h4>Дмитрий</h4>
                        <p class="text-muted">Председатель<br/>ПО «НИП»</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/team/4.jpg" alt="">
                        <h4>Натали</h4>
                        <p class="text-muted">Учредитель<br/>ПО «НИП»</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/team/2.jpg" alt="">
                        <h4>Анна</h4>
                        <p class="text-muted">Руководитель сектора<br/>дизайна и маркетинга</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/team/3.jpg" alt="">
                        <h4>Михаил</h4>
                        <p class="text-muted">Руководитель сектора<br/>программирования</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/team/6.jpg" alt="">
                        <h4>Наталия</h4>
                        <p class="text-muted">Руководитель сектора<br/>бухгалтерии и учета</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>ОБРАЩЕНИЕ ОСНОВАТЕЛЕЙ ПЛАТФОРМЫ (ВАЖНО)!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <p class="large text-muted">
                        &emsp;Мы не нашли оптимальное пространство для комфортной жизни, условий для самореализации и места для воспитания здоровых, свободных и счастливых детей, но мы нашли возможность создать пространство и условия самостоятельно. Это большой, саморазвивающийся в перспективе проект, в реализации которого несомненно нам нужна помощь каждого, кто решит к нам присоединится. Этот путь может начать и один человек, но от качества и количества участников зависит его масштаб.
                        <div id="more" style="display: none">
                            &emsp;Движущая сила маркетинга, которой мало кто пользуется – это честность! Честность определяет долговременность и масштабность, а люди, объединенные общей идеей, которой они делятся – это направляющая сила, которая определяет глубину и содержание проекта.<br>
                            &emsp;Мы временно ограничиваем доступ к получению статуса решающего голоса в кооперативе, потому что мы очень тревожимся, что из-за человеческого фактора, который очень часто не дает развиваться кооперативам, можем потерять темпы и концентрацию на выбранных целях, но в последующем, когда вся система будет полностью налажена –  мы это изменим.<br>
                            &emsp;Первое время у нас не будет офлайнового офиса, потому что нам не нужен пафос –  нам нужен функционал. Мы откроем офис как только в нем появится необходимость.<br/><br/>
                            &emsp;Юридическое лицо (потребительское общество) зарегистрировано не на Кипре и не на Канарах, а в самом креативном городе Украины –  Харькове, но может функционировать не ограничиваясь одной страной.<br/><br/>
                            &emsp;Мы (те люди, которые стоят у истоков этого сообщества) –  не ангелы и не святые –  мы преследуем свои эгоистичные цели –  это несомненно получение дохода –  желательно пассивного, что освободит нас от каждодневного беспокойства о материальной стабильности, но это не главная наша цель, а необходимость, которая заботит каждого.<br/><br/>
                            &emsp;Важная наша цель, чтобы наши труды, наш креатив и планы на самовыражение в чем-то ценном не потонули в каждодневных заботах, чтобы наши усилия были вознаграждены, а наше время (которое мы не проводим в семье, в развитии или в развлечениях) было конвертировано в материальное вознаграждение выше минимального и не были повинностью, а нашим вдохновением и вкладом в результат. Этого хочет каждый осознанный человек. Но это тоже не самое главное!<br/><br/>
                            &emsp;Самое главное –  это люди вокруг нас, это наши возможности и возможности этих людей в кооперативной экосистеме, ведь нет никакого смысла в получении материального, если находишься в обществе людей без радости и возможностей и без надежды на них. Нам очень важно быть в обществе осознанных, наполненных радостью людей, которые свободны в своем самовыражении и развитии. Речь не идет о вере, если только это не вера в себя и позитив, речь не идет о фанатизме, если только это не фанатичная любовь к жизни, речь не идет о употреблении химических веществ, если только это не самостоятельно выработанные эндорфины!<br/><br/>
                            &emsp;Мы –  твои соседи по дому, улице, городу, району, области, стране, континенту, планете, которые искушают тебя честно посмотреть в зеркало и увидеть единственное существо на планете, которое отвечает за тебя и которое ответственно за все, что с тобой происходит. Искушаем тебя осознать всю свою ответственность за свою жизнь, за себя, а иногда и за окружающую действительность, а значит осознать свободу в своей жизни!<br/><br/>
                            &emsp;Эта речь не мотивация присоединится к нам. Нет! Эта речь для тех, кому с нами не по пути!<br/><br/>
                            &emsp;Не обольщайтесь мы не зовем вас в рай и место, где все решено за вас, а лишь место, в котором результат зависит от активности и решений каждого! Приходите к нам только, когда будете готовы создавать будущее!<br/><br/>
                            &emsp;Мы не гарантируем тебе доход –  все зависит от нескольких факторов: твоей активности, активности твоих приглашенных, доходов от реализованных программ, в которых участвуешь ты и твои приглашенные. На доход от реализации программ ты можешь повлиять собственным выбором программы, в процессе обсуждения программы и ее доработке, чтобы минимизировать риски.<br/><br/>
                            &emsp;А уходя досрочно, ты не можешь забрать 100%- лишь 80% твоей инвестиции (минус комиссию за перечисление средств), но это имеет значение только, если ты, к примеру, с микропулом (минимальный инвестиционный пакет) не пригласил хотя бы 2,5 человека на такие же микропулы. Ты не получишь доход по реферальной системе только, если никого не пригласишь.<br/><br/>
                            &emsp;Мы благодарны тебе, если ты не пригласил никого, кто не разделяет наши ценности. Мы категорически против, чтобы информация о нашем сообществе была общедоступной и к нам приходили люди, не заинтересованные в создании кооперативной экосистемы. Делитесь информацией только с близкими и хорошими знакомыми, потому что количество пакетов ограничено, а они станут основой построения первичной сети, которая сохраняется в последующем и в программах и в продвижении товаров платформы.<br/><br/>
                            &emsp;В будущем планируется разворачивание многочисленных программ, но уже ни одна из них не будет предполагать такого большого количества дополнительных бонусов, да и сама реферальная система не будет настолько интересной как на предстарте.<br/><br/>
                            <div class="text-center">
                                <button class="btn btn-get-started" href="javascript:void(0);" onclick="javascipt:setFinanceActive();showRegistrationForm();">Сотрудничество</button>
                            </div> 
                        </div>
                        <div class="show-more text-center">
                            <button class="btn-get-started animate__animated animate__fadeInUp" id="show-more" type="submit">Читать полностью</button>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section section-back contact" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Задайте вопрос</h2>
                <h3 class="text-muted queston">Мы всегда рады слышать Вас</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Ваше имя *" required="required" data-validation-required-message="Пожалуйста, введите Ваше имя." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Ваш Email *" required="required" data-validation-required-message="Пожалуйста, введите Ваш адрес электронной почты." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Телефон (не обязательно)" data-validation-required-message="Пожалуйста введите ваш номер телефона." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" name="message" placeholder="Ваш вопрос *" required="required" data-validation-required-message="Ваш вопрос."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn-get-started animate__animated animate__fadeInUp scrollto" id="sendMessageButton" type="button">Отправить</button>
                </div>
            </form>
        </div>
    </section>

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">
                    <ul>
                        <li>
                            <p class="company">©&nbsp;ПО&nbsp;«НИП»,&nbsp;2020</p>
                        </li>
                        <li>
                            <a href="tel:380732641130">+38 (073) 264-11-30</a>
                        </li>
                        <li>
                            <a href="mailto:contacts@pip.in.ua">contacts@pip.in.ua</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/pip.coop.pep" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://t.me/pipcoop"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/pipcoop/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <ul>
                        <li>
                            <a href="/doc/MP.pdf" target="_blank">Маркетинг-план</a>
                        </li>
                        <li>
                            <a href="/doc/FAQ.pdf" target="_blank">Частые вопросы</a>
                        </li>
                        <li>
                            <a href="#!">Политика&nbsp;Конфиденциальности</a>
                        </li>
                        <li>
                            <a href="/doc/risk.pdf" target="_blank">Предупреждение о рисках</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thanksModalLabel">Спасибо</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Спасибо за Ваш вопрос, мы обязательно ответим на него в ближайшее время !</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerThanks" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thanksModalLabel">Спасибо</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>На Вашу почту был отправлено письмо, пожауйста перейдите по ссылке указанной в нём для подтверждения регистрации!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div id="flow" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Авторизация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#input" role="tab" aria-controls="home" aria-selected="true">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#register" role="tab" aria-controls="profile" aria-selected="false">Регистрация</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active" id="input" role="tabpanel" aria-labelledby="input-tab">
                            <form id="enterForm">
                                <div class="form-group row">
                                    <div class="col-8 offset-2">
                                        <input id="enterEmail" name="enterEmail" placeholder="E-Mail" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8  offset-2">
                                        <input id="enterPassword" name="enterPassword" placeholder="Пароль" type="password" class="form-control">
                                    </div>
                                </div>

                                <div id="usererror" class="form-group row" style="display: none">
                                    <div class="col-12 text-center">
                                        <p style="color: red">Пользователя с таким именем и паролем не существует.</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 text-center">
                                        <a href="javascript:onEnterClick();" class="btn-get-started animate__animated animate__fadeInUp text-center">Войти</a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 text-center">
                                        <a href="#" class="text-center">Забыли пароль ?</a>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form id="registerForm">
                                <div class="form-group row">
                                    <div class="col-8 offset-2">
                                        <input id="registerEmail" name="registerEmail" placeholder="E-Mail *" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8  offset-2">
                                        <input id="registerPhone" name="registerPhone" placeholder="Телефон *" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <p class="text-center">Укажите телефон в международном формате +380732641130</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <p class="text-center">Соглашаюсь получать на E-Mail от ПО "НИП"</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input name="notify" id="notify" type="checkbox" checked="checked" class="custom-control-input" value="rabbit" required="required">
                                        <label for="notify" class="custom-control-label"><span></span>Уведомления *</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input name="reports" id="reports" type="checkbox" checked="checked" class="custom-control-input" value="rabbit">
                                        <label for="reports" class="custom-control-label"><span></span>Отчёты</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input name="news" id="news" type="checkbox" checked="checked" class="custom-control-input" value="rabbit">
                                        <label for="news" class="custom-control-label"><span></span>Новости</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <p class="text-center"><span class="asterisc">&#42;</span>обязательный пункт</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 text-center">
                                        <a href="javascript:void(0);" onclick="javascipt:onRegisterClick();" class="btn-get-started animate__animated animate__fadeInUp text-center btn-mob">Зарегистрироватся</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <div class="rhombus rhombus-active"></div>
                <div class="rhombus"></div>
                <div class="rhombus"></div>
                <div class="rhombus"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="confirm" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Регистрация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <h3>Продолжить регистрацию</h3>
                        </div>
                    </div>
                    <form id="confirmForm">
                        <div class="form-group row">
                            <div class="offset-1 col-10">
                                <input id="confirmCode" name="confirmCode" placeholder="Введите код подтверждения из E-Mail *" type="text" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-1 col-10">
                                <input id="lastName" name="lastName" placeholder="Фамилия *" type="text" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-1 col-10">
                                <input id="firstName" name="firstName" placeholder="Имя *" type="text" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-1 col-10">
                                <input id="thirdName" name="thirdName" placeholder="Отчество *" type="text" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-1 col-10">
                                <input id="refCode" name="refCode" placeholder="Введите код Вашего пригласителя *" type="text" class="form-control" value="<?php echo $referer; ?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-9">
                                <input name="agree" id="agree" type="checkbox" checked="checked" class="custom-control-input" value="" required="required">
                                <label for="agree" class="custom-control-label"><span></span>C <a href="#">уставом</a> ПО "НИП" ознакомлен *</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-9">
                                <input name="treatment" id="treatment" type="checkbox" checked="checked" class="custom-control-input" value="">
                                <label for="treatment" class="custom-control-label"><span></span>Даю согласие на обработку персональных данных<br/>на времячленства в ПО "НИП", без передачи третьим лицам *</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-9">
                                <input name="understand" id="understand" type="checkbox" checked="checked" class="custom-control-input" value="">
                                <label for="understand" class="custom-control-label"><span></span>Понимаю, что ПО "НИП" открытое внутри сообщество,<br/>
                                    поэтому ФИО и открытый контакт доступны всем членам сообщества *</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-9">
                                <p class="text-left"><span class="asterisc">&#42;</span>обязательный пункт</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <a href="javascript:void(0);" onclick="javascipt:continueConfirm();" class="btn-get-started animate__animated animate__fadeInUp text-center">Продолжить</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <div class="rhombus"></div>
                <div class="rhombus rhombus-active"></div>
                <div class="rhombus"></div>
                <div class="rhombus"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="investing" class="modal investing" tabindex="-1" role="dialog">
        <div class="modal-dialog investing-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Инвестировать</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="investing-idea-tab" data-toggle="tab" href="#investing-idea" role="tab" aria-controls="investing-idea" aria-selected="true">Идею</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="investing-finance-tab" data-toggle="tab" href="#investing-finance" role="tab" aria-controls="investing-finance" aria-selected="false">Финансы</a>
                                </li>   
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="tabContent-investing">

                        <div class="tab-pane fade show active" id="investing-idea" role="tabpanel" aria-labelledby="investing-idea-tab">

                            <form id="investingIdeaForm">
                                <div class="form-group row">
                                    <div class="col-12 col-lg-4 offset-lg-4">
                                        <input id="investingName" name="investingName" placeholder="Отрасль экономической деятельности" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-4 offset-lg-4">
                                        <textarea id="investingIdeaName" name="investingIdeaName" rows="3" placeholder="Описание идеи" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 col-lg-4 offset-lg-4">
                                        <textarea id="investingIdeaDescription" name="investingIdeaDescription" rows="7" placeholder="Что нужно для реализации" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6 offset-lg-3 text-center">
                                        <a href="javascript:void(0);" onclick="javascript:onInvestingClick();" class="btn-get-started animate__animated animate__fadeInUp text-center">Предложить</a>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="tab-pane fade" id="investing-finance" role="tabpanel" aria-labelledby="investing-finance-tab">
                            <div class="form-group row">
                                <div class="col-lg-6 offset-lg-3 text-center">
                                    <a href="javascript:void(0);" class="btn-get-started animate__animated animate__fadeInUp text-center">Маркетинг план</a>
                                </div>
                            </div>
                            <div class="row justify-content-center">   
                                <div class="col text-center link-btn"><a href="/doc/MP.pdf" target="_blank">ЧИТАТЬ МАРКЕТИНГ ПЛАН</a></div>
                                <div class="col text-center link-btn"><a href="#" target="_blank">СМОТРЕТЬ МАРКЕТИНГ-ПЛАН</a></div>   
                            </div>
                            <div class="col-12 text-center">
                                <div id="owl-carousel" class="owl-carousel">

                                
                                    <div class="invest-item">
                                        <div class="item-header">
                                            <h3>Пакет «Микропул»</h3>
                                        </div>
                                        <div class="point-list">
                                            <div class="point">
                                                <h4>20 ИЕ = 100 USD</h4>
                                                <div class="line"></div>
                                                <p class="p-title">ПО «НИП» может выкупить:</p>
                                                <p>в любое время</p>
                                                <div class="line"></div>
                                            </div>
                                            <div class="point-txt">
                                                <h4>Особые условия «Предстарта»:</h4>
                                                <p>коэффициент начислений 1 на 1 ИЕ</p>
                                                <div class="line"></div>   
                                            </div>
                                            <div class="point-txt">
                                                <h4>Бонус за приглашения на платформу:</h4>
                                                <p>только за прямые приглашения</p>
                                                <div class="line"></div>   
                                            </div>
                                            <div class="point-txt">
                                                <h4>Млм-доход от проектов платформы:</h4>
                                                <p>3 инвестпроекта</p>
                                                <div class="line"></div>   
                                            </div>
                                            <div class="point-txt">
                                                <h4>Товары и услуги личноприглашенных:</h4>
                                                <p>бонус за каждую единицу товара</p>
                                                <div class="line"></div>   
                                            </div>
                                            <div class="point-txt">
                                                <h4>Доступно: <span>2000 шт.</span></h4>
                                            </div>
                                        </div>
                                        <button>Оформить пакет</button>
                                    </div>
                                
                                    <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Минипул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>50 ИЕ = 250 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 1 год</p>
                                        <div class="line"></div>    
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>5 инвестпроектов</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>1000 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Мидипул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>100 ИЕ = 500 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 2 года</p>
                                        <div class="line"></div>
                                        
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1,1 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>10 инвестпроектов</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>500 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Максипул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>500 ИЕ = 2500 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 3 года</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1,15 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>20 инвестпроектов</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>100 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «VIP-пул»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>1000 ИЕ = 5000 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 4 года</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Особые условия «Предстарта»:</h4>
                                        <p>коэффициент начислений 1,2 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>без ограничений</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Доступно: <span>40 шт.</span></h4>
                                    </div>
                                </div>
                                <button>Оформить пакет</button>
                            </div>
                            <div class="invest-item">
                                <div class="item-header">
                                    <h3>Пакет «Exclusive»</h3>
                                </div>
                                <div class="point-list">
                                    <div class="point">
                                        <h4>10 000 ИЕ = 50000 USD</h4>
                                        <div class="line"></div>
                                        <p class="p-title">ПО «НИП» может выкупить:</p>
                                        <p>не ранее чем через 5 лет</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="point-txt">
                                        <h4>Постоянные условия:</h4>
                                        <p>коэффициент начислений 1,25 на 1 ИЕ</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Бонус за приглашения на платформу:</h4>
                                        <p>по млм-сети</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Млм-доход от проектов платформы:</h4>
                                        <p>без ограничений</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Товары и услуги в млм-сети:</h4>
                                        <p>бонус за каждую единицу товара</p>
                                        <div class="line"></div>   
                                    </div>
                                    <div class="point-txt">
                                        <h4>Предусмотрено: <span>2 шт.</span></h4>
                                    </div>
                                </div>
                                <button disabled="disabled" style="background-color: #72839c; padding-bottom: 0; font-size: 14px;">На «Предстарте»<br>не доступно</button>
                            </div>
        
                                </div>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                <div class="rhombus"></div>
                <div class="rhombus"></div>
                <div class="rhombus rhombus-active"></div>
                <div class="rhombus"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="sucesfull" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title">Обработка данных</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">

                        <div class="alert alert-secondary" role="alert">
                            <p>Ваше обращение №&nbsp;<b id="invest-number"></b>&nbsp;принято.</p>
                            <p>В течении 3-х рабочих дней с Вами</p>
                            <p>свяжется специалист.</p>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1 text-center">
                            <a href="javascript:void(0);" data-dismiss="modal" class="btn-get-started animate__animated animate__fadeInUp text-center">OK</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <div class="rhombus"></div>
                <div class="rhombus"></div>
                <div class="rhombus rhombus-active"></div>
                <div class="rhombus"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="pay" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Готово</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="txt txt-secondary row">
                        <div class="col-12 col-md-6 text-center">
                                <img src="images/edp.jpg" alt="Письма мастера дзен">
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <div class="text">
                                    <p>В связи с тем, что с 05 по 16 августа происходит внедрение в промышленную эксплуатацию нового программного
                                        обеспечения Единого державного реестра ПО &laquo;НИП&raquo; не закончило регистрацию. Оформление пакетов временно происходит
                                        через аффилированного представителя.
                                    </p>
                                    <p>
                                        Если Вы желаете внести финансы для оформления пакета не дожидаясь конца регистрации - это можно сделать на карту ПБ 
                                        аффилированного представителя.
                                    </p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-sm-6 mob text-center">
                            <a href="javascript:void(0);" data-dismiss="modal" class="btn-get-started animate__animated animate__fadeInUp text-center">Дождусь<br/>регистрацию</a>
                        </div>
                        <div class="col-12 col-sm-6 text-center">
                            <a href="javascript:void(0);" class="btn-get-started animate__animated animate__fadeInUp text-center" style="line-height: 75px;">Продолжить</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="rhombus"></div>
                    <div class="rhombus"></div>
                    <div class="rhombus"></div>
                    <div class="rhombus rhombus-active"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            // Intro carousel
            var heroCarousel = $("#heroCarousel");
            var heroCarouselIndicators = $("#hero-carousel-indicators");
            /*heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
                (index === 0) ?
                    heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):
                    heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");
            });*/

            $('#show-more').on('click', function () {
                $(this).hide(500);
                $('#more').show(500);
            });

            heroCarousel.on('slid.bs.carousel', function(e) {
                $(this).find('h2').addClass('animate__animated animate__fadeInDown');
                $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');
            });

            $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
                if (
                    location.pathname.replace(/^\//, "") ==
                    this.pathname.replace(/^\//, "") &&
                    location.hostname == this.hostname
                ) {
                    var target = $(this.hash);
                    target = target.length
                        ? target
                        : $("[name=" + this.hash.slice(1) + "]");
                    if (target.length) {
                        $("html, body").animate(
                            {
                                scrollTop: target.offset().top - 150,
                            },
                            1000,
                            "easeInOutExpo"
                        );
                        return false;
                    }
                }
            });

            // Closes responsive menu when a scroll trigger link is clicked
            $(".js-scroll-trigger").click(function () {
                $(".navbar-collapse").collapse("hide");
            });

            // Activate scrollspy to add active class to navbar items on scroll
            $("body").scrollspy({
                target: "#mainNav",
                offset: 180,
            });

            // Collapse Navbar
            var navbarCollapse = function () {
                if ($("#mainNav").offset().top > 100) {
                    $("#mainNav").addClass("navbar-shrink");
                } else {
                    $("#mainNav").removeClass("navbar-shrink");
                }
            };
            // Collapse now if page is not at top
            navbarCollapse();
            // Collapse the navbar when page is scrolled
            $(window).scroll(navbarCollapse);
        });
    </script>
<script>
$(document).ready(function() {
  $("#owl-carousel").owlCarousel({
    loop:true,
    nav:false,
    smartSpeed: 1000,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  });
  
  $(".owl-prev").html("<i class='fa fa-angle-left'></i>");
  $(".owl-next").html("<i class='fa fa-angle-right'></i>");
});
</script>
    <script>
        $(document).ready(function () {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: "required"
                },
                messages: {
                    name: {
                        required: "Пожалуйста введите Ваше имя",
                        minlength: "Ваше имя должно состоять не менее чем из 2 символов."
                    },
                    email : {
                        required: "Пожалуйста введите Ваш E-Mail адрес",
                        email: "Пожалуйста, введите действительный адрес электронной почты"
                    },
                    message: "Пожалуйста, введите текст Вашего вопроса"
                }
            });
            $('#enterForm').validate({
                rules: {
                    enterEmail : {
                        required: true,
                        email: true
                    },
                    enterPassword : {
                        required: true
                    }
                },
                messages : {
                    enterEmail : {
                        required: "Пожалуйста введите Ваш E-Mail адрес",
                        email: "Пожалуйста, введите действительный адрес электронной почты"
                    },
                    enterPassword : {
                        required: "Это поле обязательно"
                    }
                }
            });
            $('#registerForm').validate({
                rules: {
                    registerEmail : {
                        required: true,
                        email: true
                    },
                    registerPhone : {
                        required: true,
                    },
                    notify : {
                        required: true,
                    }
                },
                messages : {
                    registerEmail: {
                        required: "Пожалуйста введите Ваш E-Mail адрес",
                        email: "Пожалуйста, введите действительный адрес электронной почты"
                    },
                    registerPhone : {
                        required: "Пожалуйста введите номер Вашего телефона",
                    },
                    notify : {
                        required: "Это поле обязательно",
                    }
                }
            });
            $('#confirmForm').validate({
                rules : {
                    confirmCode : { required: true },
                    lastName : { required: true },
                    firstName : { required: true },
                    thirdName : { required: true },
                    refCode : { required: true },
                    agree : { required: true },
                    treatment : { required: true },
                    understand : { required: true }
                }
            });

            $('#investingIdeaForm').validate({
                rules : {
                    investingName : { required : true },
                    investingIdeaName : { required : true },
                    investingIdeaDescription : { required : true }
                }
            });

            $('#phone').mask('+38 (999) 999-99-99');
            $('#thanks').on('hide.bs.modal', function (e) {
                $('#name').val('');
                $('#email').val('');
                $('#phone').val('');
                $('#message').val('');
            });
            $('#sendMessageButton').on('click', function() {
                if ($('#contactForm').valid()) {
                    $.post('contacts.php', { method : 'contacts', username : $('#name').val(), email : $('#email').val(), phone : $('#phone').val(), message : $('#message').val()
                    }, function (data) {
                        if (data == 'OK') {
                            $('#thanks').modal('toggle');
                        }
                    });
                }

                return false;
            });
        });
    </script>

    <script>
        var currentUser = -1;

        $(document).ready(function () {
            $('#invest button, .invest-item button').on('click', function () {
                showRegistrationForm();
            });
        });

        function showRegistrationForm() {
            $('#register-phone').mask('+38 (999) 999-99-99');
            $('#registerPhone').mask('+38 (999) 999-99-99');
            $('#investing').modal('hide');
            $('#usererror').hide();
            $('#flow').modal('toggle');
        }

        function setFinanceActive() {
            $('#investing').find('#investing-idea').removeClass("show active");
            $('#investing').find('#investing-finance').addClass("show active");

            $('#investing').find('#investing-idea-tab').removeClass("active");
            $('#investing').find('#investing-finance-tab').addClass("active");
        }

        function onInvestingClick() {
            if ($('#investingIdeaForm').valid()) {
                $.post('register.php', {
                    method : 'investing',
                    user : currentUser,
                    name : $('#investingName').val(),
                    ideaName : $('#investingIdeaName').val(),
                    description : $('#investingIdeaDescription').val()
                }, function (data) {
                    if (data == 'FALSE') {
                    }
                    $('#invest-number').text(data);

                    $('#investing').modal('hide');
                    $('#sucesfull').modal('toggle');
                });
            }
        }

        function onInvestPackage(packageId) {
            $('#investing').modal('hide');
            $('#pay').modal('toggle');
        }

        function onEnterClick() {
            if ($('#enterForm').valid()) {
                $.post('register.php', {
                    method : 'login',
                    email : $('#enterEmail').val(),
                    password : $('#enterPassword').val()
                }, function (data) {
                    if (data == 'FALSE') {
                        $('#usererror').show();
                        return false;
                    } else {
                        $('#flow').modal('hide');
                        $('#confirm').modal('hide');
                        $('#investing').modal('toggle');

                        currentUser = parseInt(data);
                    }
                });
            }
            return false;
        }

        function onRegisterClick() {
            if ($('#registerForm').valid()) {
                $.post('register.php', {
                    method : 'register',
                    email : $('#registerEmail').val(),
                    phone : $('#registerPhone').val(),
                    notify : $('#notify').is(':checked') ? true : false,
                    reports : $('#reports').is(':checked') ? true : false,
                    news : $('#news').is(':checked') ? true : false
                }, function (data) {
                    if (data == 'OK') {
                        $('#flow').modal('hide');
                        $('#registerThanks').modal('toggle');
                    }
                });
            }
        }

    </script>

    <?php
        if (isset($_GET) && isset($_GET["confirm"])) {
            echo "<script>var refCode = '" . $_GET["confirm"] . "' ;</script>";
    ?>
        <script>
            $(document).ready(function () {
                $.post('register.php', {
                    method : 'confirm',
                    code : refCode
                }, function (data) {
                    var userInfo = $.parseJSON(data);
                    $('#confirm').modal('toggle');
                });
            });
            
            function continueConfirm() {
                if ($('#confirmForm').valid()) {
                    $.post('register.php', {
                        method : 'complete',
                        refCode : refCode,
                        confirmCode : $('#confirmCode').val(),
                        lastName : $('#lastName').val(),
                        firstName : $('#firstName').val(),
                        thirdName : $('#thirdName').val(),
                        parentCode : $('#refCode').val()
                    }, function (data) {
                        if (data == "COMPLETE") {
                            $('#flow').modal('hide');
                            $('#confirm').modal('hide');
                            $('#investing').modal('toggle');
                        }
                        if (data == "NOT") {
                            $("#refCode").addClass("error");
                            $("#refCode").closest("div").append('<label id="refCode-error" class="error" for="refCode" style="">Такого пригласителя не существует.</label>');
                        }
                        if (data == "INCORRECT") {
                            $("#confirmCode").addClass("error");
                            $("#confirmCode").closest("div").append('<label id="refCode-error" class="error" for="refCode" style="">Неверный код подтверждения.</label>');
                        }
                    })
                }
            }
        </script>
    <?php
        }
    ?>
   <script>
    'use strict';
    var multiItemSlider = (function () {
      return function (selector, config) {
        var
          _mainElement = document.querySelector(selector), 
          _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), 
          _sliderItems = _mainElement.querySelectorAll('.slider__item'),
          _sliderControls = _mainElement.querySelectorAll('.slider__control'),
          _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), 
          _sliderControlRight = _mainElement.querySelector('.slider__control_right'), 
          _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), 
          _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width),    
          _positionLeftItem = 0,
          _transform = 0, 
          _step = _itemWidth / _wrapperWidth * 100, 
          _items = []; 
      
        _sliderItems.forEach(function (item, index) {
          _items.push({ item: item, position: index, transform: 0 });
        });

        var position = {
          getMin: 0,
          getMax: _items.length - 1,
        }

        var _transformItem = function (direction) {
          if (direction === 'right') {
            if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
              return;
            }
            if (!_sliderControlLeft.classList.contains('slider__control_show')) {
              _sliderControlLeft.classList.add('slider__control_show');
            }
            if (_sliderControlRight.classList.contains('slider__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
              _sliderControlRight.classList.remove('slider__control_show');
            }
            _positionLeftItem++;
            _transform -= _step;
          }
          if (direction === 'left') {
            if (_positionLeftItem <= position.getMin) {
              return;
            }
            if (!_sliderControlRight.classList.contains('slider__control_show')) {
              _sliderControlRight.classList.add('slider__control_show');
            }
            if (_sliderControlLeft.classList.contains('slider__control_show') && _positionLeftItem - 1 <= position.getMin) {
              _sliderControlLeft.classList.remove('slider__control_show');
            }
            _positionLeftItem--;
            _transform += _step;
          }
          _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
        }

        var _controlClick = function (e) {
          if (e.target.classList.contains('slider__control')) {
            e.preventDefault();
            var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
            _transformItem(direction);
          }
        };

        var _setUpListeners = function () {
         
          _sliderControls.forEach(function (item) {
            item.addEventListener('click', _controlClick);
          });
        }

    
        _setUpListeners();

        return {
          right: function () { 
            _transformItem('right');
          },
          left: function () { 
            _transformItem('left');
          }
        }

      }
    }());

    var slider = multiItemSlider('.slider')

    </script>

    <!--<script>
        $(document).ready(function () {
            $('#investing').modal("toggle");
        });
    </script>-->


</body>
</html>