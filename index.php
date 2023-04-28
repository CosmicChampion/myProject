<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Camper</title>

    <link rel="stylesheet" href="itc-slider.css">
    <script src="itc-slider.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">

    <link href="my-styles.css" rel="stylesheet">
</head>
<body>

    <header>
        <div class="header-left">
            <div class="logo">
                <img src="img/Шар%203.png" >
            </div>
            <div class="header-main-button">
                <a href="#">ГОЛОВНА</a>
                <a href="#">ТОВАРИ</a>
                <a href="#">ПРО НАС</a>
            </div>
        </div>
        <div class="account">
        <div class="dropdown">
            <button class="mainmenubtn"><img src="img/user.png"></button>
            <div class="dropdown-child">
                <div class="input-div">
                    <p>
                        <input type="text" id="input" placeholder="Email">
                    </p>
                    <p>
                        <input type="text" id="input" placeholder="Password">
                    </p>
                </div>
                <div class="input-div2">
                    <button class="input-button">Увійти</button>
                </div>

            </div>
        </div>
        </div>

    </header>
    <main>
        <div class="block1-main">
        <div class="block1">
            <div class="block1-text">
                <h1> Найкраще спорядження для вашого активного відпочинку</h1>
                <p>
                    Ми знаємо, що відпочинок на природі може бути дуже захоплюючим,
                    і ми допоможемо вам насолоджуватися кожною миттю.
                </p>
            </div>
            <div class="block1-img">
                <img src="img/block1.jpg">
            </div>

            </div>

        <div class="block1-url">
            <div><a href="#" ><img src="img/inst.png"></a></div>
            <div><a href="#" ><img src="img/twit.png"></a></div>
            <div><a href="#" ><img src="img/faceb.png"></a></div>
        </div>
        </div>

        <div class="block2">

            <div class="block2-img">
                <img src="img/block2.jpg">
            </div>


            <div class="block2-text">
                <h2>Про нас</h2>
                <p>
                    Оренда спорядження для активного відпочинку - це відмінний спосіб економити гроші та не перевантажувати багажний простір під час подорожі. Ви можете забронювати необхідне спорядження на сайті та забрати його на місці.
                </p>
                <p class="link">
                    <a href = "#">Замовити</a>
                </p>

            </div>

        </div>

        <div class="block3">
            <div class="itc-slider" data-slider="itc-slider" data-loop="true" data-autoplay="true" data-interval="7000">
                <div class="itc-slider__wrapper">
                    <div class="itc-slider__items">
                        <div class="itc-slider__item">
                            <div class="item">
                            <img src="img/snowboard.png">
                            <p>Season Kin Snowboard</p>
                            </div>
                        </div>
                        <div class="itc-slider__item">
                            <div class="item">
                            <img src="img/black.png">
                            <p>Ride Jackson Snowboard Boots</p>
                            </div>
                        </div>
                        <div class="itc-slider__item">
                            <div class="item">
                            <img src="img/helmet.png">
                            <p>Giro Ceva MIPS Helmet</p>
                            </div>
                        </div>
                        <div class="itc-slider__item">
                            <div class="item">
                            <img src="img/jacket.png">
                            <p>Volcom Iconic Stone Insulated Jacket</p>
                            </div>
                        </div>
                        <div class="itc-slider__item">
                            <div class="item">
                                <img src="img/combes.png">
                                <p>Helly Hansen Legendary Pants</p>
                            </div>
                        </div>
                        <div class="itc-slider__item">
                            <div class="item">
                                <img src="img/shtan.png">
                                <p>Mountain Hardwear FireFall Insulated Short Bibs</p>
                            </div>
                        </div>
                        <div class="itc-slider__item">
                            <div class="item">
                                <img src="img/goggles.png">
                                <p>Anon Tracker 2.0 Goggles</p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Кнопки для перехода к предыдущему и следующему слайду -->
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
            </div>
        </div>


        <div class="block4">
            <div class="block4-text">
                <h2>Ми на мапі</h2>
                <p>Ми знаходимлся недалеко від станції Чоп, тому ви зможете забрати ваше спордження одразу аісля прибуття.</p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10588.571194399294!2d22.19495678193657!3d48.43459904044305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4738e3c2f5f91585%3A0x11369704c8bfa5f7!2z0KfQvtC_LCDQl9Cw0LrQsNGA0L_QsNGC0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDg5NTAw!5e0!3m2!1sru!2sua!4v1682668997667!5m2!1sru!2sua" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </main>
</body>
</html>