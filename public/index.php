<?
session_start();
require '../core/connect.php';
require_once '../vendor/autoload.php';
require 'valid.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tatar-septic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <header class="header ">
        <div class="header-logo head-min-w">
            <img class="logo-img" src="img/logo.png" alt="s">
            <a class=" h-color h-logo" href="/">Секрет чистого будущего</a>
        </div>
        <div class="min-w container">
            <div class="header-logo">
                <img class="logo-img" src="img/logo.png" alt="s">
                <a class=" h-color h-logo" href="/">Секрет чистого будущего</a>
            </div>
            <div class="header-socials">
                <p class="t-mes"> связаться с нами через месенджеры</p>
                <a class="nav-link" target="_blank" href="https://t.me/+79503108090"><img src="/img/icon/t.png" alt=""></a>
                <a class="nav-link" target="_blank" style="width: 48px;" href="https://api.whatsapp.com/send?phone=89503108090"><img src="/img/icon/w2.png" alt=""></a>
            </div>
            <div class="header-cont">
                <div class="phone m-r">
                    <a class="st-link" href="tel:+79503108090">+7(950)3108090</a>
                    <p class="after">по будням с 9:00 до 17:00</p>
                </div>
                <div class="header-btn">
                    <a class="st-link h-link gradient" href="#headerbtn">заказать звонок</a>
                </div>
                <div id="headerbtn" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для консультации</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="form-btn st-link h-link">заказать обратный звонок</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div id="headerbtn" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Название</h3>
                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <p>Содержимое модального окна...</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="max-w container">
            <a class="menu" href="#openModal">menu</a>
            <div id="openModal" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <div class="header-logo">
                                <img class="logo-img" src="img/logo.png" alt="s">
                                <a class=" h-color h-logo" href="/">Секрет чистого будущего</a>
                            </div> -->
                            <a href="#close" title="Close" class="close">&#x2715</a>
                        </div>
                        <div class="modal-body">
                            <div class="header-logo mb-5">
                                <img class="logo-img" src="img/logo.png" alt="s">
                                <a class=" h-color h-logo" href="/">Секрет чистого будущего</a>
                            </div>
                            <div class="header-socials mb-5 ">
                                <p class="t-mes m-r40"> связаться с нами через месенджеры</p>
                                <a class="nav-link" target="_blank" href="https://t.me/+79503108090"><img src="/img/icon/t.png" alt=""></a>
                                <a class="nav-link" target="_blank" style="width: 48px;" href="https://api.whatsapp.com/send?phone=89503108090"><img src="/img/icon/w2.png" alt=""></a>
                            </div>
                            <div class="header-cont">
                                <div class="phone m-r mb-5">
                                    <a class="st-link" href="tel:+79503108090">+7(950)3108090</a>
                                    <p class="after">по будням с 9:00 до 17:00</p>
                                </div>
                                <div class="header-btn">
                                    <a class="st-link h-link" href="#cards">заказать звонок</a>
                                </div>
                                <!-- <div id="headerbtn2" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-con">
                                            <div class="modal-header">

                                                <a href="#close" title="Close" class="close">&#x2715</a>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для консультации</span></h3>
                                                <form action="" method="post" class="form">
                                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                                    <button type="submit" class="form-btn st-link h-link">заказать обратный звонок</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <span class="ancor" id="ancor"></span>
        
        <section class="main-block p-100 ow-hiden">
            <div class="main-bg">
                <img src="img/main-bg.png" alt="main-bg">
            </div>
            <div class="main-content container">

                <div class="main-card">
                    <h1 class="mb-5 fs-50">Автономная канализация <span class="yellow fs-40">под ключ в Казани</span></h1>
                    <p class="mb-5 text-grey fs-30">Установим септик точно в срок с гарантией по договору</p>
                    <a class="st-link h-link price-link gradient" href="#kviz">расчитать стоимость</a>
                </div>
                <div class="main-img">
                    <img class="w-img2" src="img/main-bg2.png" alt="bg">
                    <!-- <img class="w-img3" src="img/s2.png" alt=""> -->
                </div>
            </div>
        </section>
        <section class="cards-wrap container" id="cards">
            <div class="cards">
                <div class="card">
                    <div class="card-img">
                        <img src="img/bio1.png" alt="img">
                    </div>
                    <h3 class="card-title">
                        Евролос <span class="yellow">БИО</span>
                    </h3>
                    <p class="card-description">
                        Биологическое очистное сооружение,которое предназначено для создания локальных канализационных систем без откачки на загородных участках и котеджных поселках как с сезонным, так и с постоянным проживанием
                    </p>
                    <a class="gradient card-btn card-absolut st-link h-link" href="#card1">узнать подробнее</a>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="img/bio3.png" alt="img">
                    </div>
                    <h3 class="card-title">
                        Евролос <span class="yellow">ЭКО</span>
                    </h3>
                    <p class="card-description">
                        Биосептик - это энергозависимое проточное очистное сооружение без откачки для дачных домов, расчитанное на обслуживание до 20 человек. Он позволит надолго забыть о проблемах с канализацией
                    </p>
                    <a class="gradient card-btn card-absolut st-link h-link" href="#card2">узнать подробнее</a>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="img/bio2.png" alt="img">
                    </div>
                    <h3 class="card-title">
                        Евролос <span class="yellow">ПРО</span>
                    </h3>
                    <p class="card-description">
                        Не просто септик, а инновационная российская разработка, которая призвана обеспечивать максимальную очистку вод, снижать вредное воздействие на окружающую среду и все это без откачки
                    </p>
                    <a class="gradient card-btn card-absolut st-link h-link" href="#card3">узнать подробнее</a>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="img/bio4.png" alt="img">
                    </div>
                    <h3 class="card-title">
                        Евролос <span class="yellow">ГРУНТ</span>
                    </h3>
                    <p class="card-description">
                        Локальная насосная очистная станция премиум класса без откачки, для монтажа и работы в условиях высокого уровня грунтовых вод
                    </p>
                    <a class="gradient card-btn card-absolut st-link h-link" href="#card4">узнать подробнее</a>
                </div>
            </div>
            <div class="cards-modal">
                <div id="card1" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для консультации</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">узнать подробнее</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==================================== -->
                <div id="card2" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для консультации</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">узнать подробнее</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================================= -->
                <div id="card3" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для консультации</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">узнать подробнее</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===================================== -->
                <div id="card4" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для консультации</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">узнать подробнее</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------kviz--------- -->

        <!-- ----- end kviz-- -->
        <section class="conditions container">
            <div class="conditions-title">
                <h2 class="h2">Предлагаем <span class="yellow">лучшие условия</span> для частного дома или дачи</h2>
                <h6 class="h6">выберите набор который вам подходит</h6>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-img">
                        <img src="img/bio3.png" alt="img">
                    </div>
                    <h3 class="card-title font-w">
                        Набор &laquo<span class="yellow">СЕПТИК</span>&raquo
                    </h3>
                    <p class="">от <span class="del">150000</span> <span class="yellow">130000</span>&#8381</p>

                    <p class="card-description">
                    <ul>
                        <li>Выезд специалиста</li>
                        <li>Септик</li>
                        <li>Установка станции</li>
                        <li>Материалы</li>
                        <li>Проэкт и дизайн</li>
                    </ul>
                    </p>
                    <a class=" card-absolut card-btn st-link h-link gradient" href="#condish1">купить</a>

                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="img/c3.png" alt="img">
                    </div>
                    <h3 class="card-title font-w">
                        Набор &laquo<span class="yellow">КОЛОДЕЦ</span>&raquo
                    </h3>
                    <p class="">от <span class="del">20000</span> <span class="yellow">40000</span>&#8381</p>
                    <p class="card-description">
                    <ul>
                        <li>Полимерно-песчанный колодец</li>
                        <li>Монтаж</li>
                        <li>Комлектующие</li>
                        <li>Материалы</li>
                        <li>Замер на участке</li>
                    </ul>
                    </p>
                    <a class="gradient card-absolut card-btn st-link h-link" href="#condish2">купить</a>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="img/с2.jpg" alt="img">
                    </div>
                    <h3 class="card-title font-w">
                        Набор &laquo<span class="yellow">БЕТОН</span>&raquo
                    </h3>
                    <p class="">от <span class="del">85000</span> <span class="yellow">65000</span>&#8381</p>
                    <p class="card-description">
                    <ul>
                        <li>Септик из бетоных колец</li>
                        <li>Размещение</li>
                        <li>Проэктирование</li>
                        <li>Вывод сточных вод</li>

                    </ul>
                    </p>
                    <a class="gradient card-absolut card-btn st-link h-link" href="#condish3">купить</a>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="img/c5.png" alt="img">
                    </div>
                    <h3 class="card-title font-w">
                        Набор &laquo<span class="yellow">Дренаж</span>&raquo
                    </h3>
                    <p class="">от <span class="del">50000</span> <span class="yellow">30000</span>&#8381</p>
                    <p class="card-description">
                    <ul>
                        <li>Дренажная система</li>
                        <li>Установка сооружения</li>
                        <li>Материалы</li>
                        <li>Выезд мастера и проэкт</li>

                    </ul>
                    </p>
                    <a class=" gradient card-btn st-link h-link card-absolut" href="#condish4">купить</a>
                </div>
            </div>
            <div class="cards-modal">
                <div id="condish1" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для дальнейшей покупки</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">купить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==================================== -->
                <div id="condish2" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для для дальнейшей покупки</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">купить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================================= -->
                <div id="condish3" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для дальнейшей покупки</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">купить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===================================== -->
                <div id="condish4" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-con">
                            <div class="modal-header">

                                <a href="#close" title="Close" class="close">&#x2715</a>
                            </div>
                            <div class="modal-body">
                                <h3 class="modal-title form-title">Укажите ваши контакты <br><span class="form-span">и мы перезвоним вам для дальнейшей покупки</span></h3>
                                <form action="" method="post" class="form">
                                    <input type="text" name="name" placeholder="Ваше имя" class="input">
                                    <input type="text" name="phone" placeholder="телефон" class="input">
                                    <button type="submit" class="gradient form-btn st-link h-link">купить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- <header class="fixed-top h-color">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <div class="logo">
                    <img src="" alt="s">
                    <a class="navbar-brand h-color" href="/">Секрет чистого будущего</a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="soc d-flex m-auto align-items-center">
                        <p class="t-mes"> связаться с нами через месенджеры</p>
                        <a class="nav-link" target="_blank" href="https://web.telegram.org/k/"><img src="/img/icon/t.png" alt=""></a>
                        <a class="nav-link" target="_blank" style="width: 32px;" href="https://www.whatsapp.com/?lang=ru_RU"><img src="/img/icon/w2.png" alt=""></a>
                    </div>
                    <div class="phone m-r">
                        <a class="st-link" href="tel:+79503108090">+7(950)3108090</a>
                        <p class="after">по будням с 9:00 до 17:00</p>
                    </div>
                    <div class="header-btn">
                        <a class="st-link h-link" href="#">заказать звонок</a>
                    </div>

                    
                    
                </div>
            </div>
        </nav>
    </header> -->
    <!-- <main>
        <section class="main-block p-100">
            <div class="main-bg">
                <img src="img/main-bg.jpg" alt="main-bg">
            </div>
            <div class="main-content container">
                <div class="main-card">
                    <h1>Автономная канализация <span class="yellow">под ключ в Казани</span></h1>
                    <p>Установим септик точно в срок с гарантией по договору</p>
                    <a href="#">расчитать стоимось</a>
                </div>
                <div class="main-img">

                </div>
            </div>
        </section>
    

        <a href="aclogin.php">acadmin</a>
    </main> -->
    <script src="js/default.js"></script>
</body>

</html>