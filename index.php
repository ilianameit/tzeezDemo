<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="normalize.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <section class="section-header">

        <header class="section header">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img class='logo' src="img/logo.svg" alt="logo" width="269">

            <div class="menu">
            <nav class="navigation header--navigation">
                <a class='navigation--item active' href="#">À la carte</a>
                <a class='navigation--item' href="#">Wijnkaart</a>
                <a class='navigation--item'href="#">Lunchmenu</a>
                <a class='navigation--item'href="#">Contact</a>
            </nav>
            <div class="tel">
                <img src="img/tel.svg" alt="tel">
                <a href="tel:+3292825725">+32 9 282 57 25</a>
            </div>
            </div>
        </header>
        <section class="section working-mode__section">
            <h2 class="working-mode__header">
                OPEN EVERYDAY 6AM&nbsp;&mdash; 9PM
            </h2>
            <p class="working-mode__info">
                A&nbsp;bad day with lunch is&nbsp;better than<br> a&nbsp;good day without&nbsp;it.
            </p>
            <div class="reserve">
                <button class='reserve__button button' type="button" id="reserve">
                    Reserve a table
                </button>
                <ul class="reserve__list list">
                    <li class="">Fb</li>
                    <li>Ig</li>
                    <li>Tw</li>
                    <li>Yt</li>
                </ul>
            </div>
            <div class="mobile-img">
                <img src="img/cafe.jpg" alt="">
            </div>
        </section>
    </section>
    <section class="menu__section section">
        <div class="menu__block">
            <ul class="list menu">
                <li class="menu_item">
                    <time class="date" datetime="2023-01-12">Woensdag 12/01</time>
                    <div class="dish-day">
                        <p>Salade met Serrano</p>
                        <ul class="dots list">
                            <li></li><li></li><li></li>
                        </ul>
                        <p>Steak Tartaar</p>
                    </div>
                </li>
                <li class="menu_item">
                    <time class="date" datetime="2023-01-13">Donderdag 13/01</time>
                    <div class="dish-day">
                        <p>Toast Roquefort</p>
                        <ul class="dots list">
                            <li></li><li></li><li></li>
                        </ul>
                        <p>Penne met Kip en Prei</p>
                    </div>
                </li>
                <li class="menu_item">
                    <time class="date" datetime="2023-01-14">Vrijdag 14/01</time>
                    <div class="dish-day">
                        <p>Verrassing van de Chef</p>
                        <ul class="dots list">
                            <li></li><li></li><li></li>
                        </ul>
                        <p>Penne met Kip en Prei</p>
                    </div>
                </li>
                <li class="menu_item">
                    <time class="date" datetime="2023-01-15">Vrijdag 15/01</time>
                    <div class="dish-day">
                        <p>Verrassing van de Chef</p>
                        <ul class="dots list">
                            <li></li><li></li><li></li>
                        </ul>
                        <p>Penne met Kip en Prei</p>
                    </div>
                </li>
                <li class="menu_item">
                    <time class="date" datetime="2023-01-16">Vrijdag 16/01</time>
                    <div class="dish-day">
                        <p>Verrassing van de Chef</p>
                        <ul class="dots list">
                            <li></li><li></li><li></li>
                        </ul>
                        <p>Penne met Kip en Prei</p>
                    </div>
                </li>

            </ul>
        </div>
        <div class="images-cafe">
            <img src="img/cafe1.jpg" alt="cafe1" width="323px">
            <img src="img/cafe2.jpg" alt="cafe2" width="323px">
        </div>
    </section>
    <section class="slider__section">
        <div class="section swiper quotes__section">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="quote-title head">Goede service, lekker eten, toffe ambiance</p>
                    <p class="quote-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren.
                    <p class="quote-person head">ALAIN HEYNDRICKX</p>
                </div>
                <div class="swiper-slide">
                    <p class="quote-title head">Lorem ipsum dolor sit amet</p>
                    <p class="quote-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren.
                    <p class="quote-person head">TEST1</p>
                </div>
                <div class="swiper-slide">
                    <p class="quote-title head">Goede service, lekker eten, toffe ambiance</p>
                    <p class="quote-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren.
                    <p class="quote-person head">TEST2 222</p>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        
    </section>
    <section class="reserve__form modal hidden" id="reserve-form">
        <div class="modal-box">
            <form action="" method="get" class="form-reserve form">
                <div class="close_block"><span class="close">&times;</span></div>
                <div class="modal_inputs_list">
                    <div class="modal_input">
                        <label for="name">Enter your name: </label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="modal_input">
                        <label for="tel">Enter your phone: </label>
                        <input type="tel" name="tel" id="tel" required>
                    </div>
                    <div class="modal_input">
                        <label for="date">Enter date: </label>
                        <input type="date" name="date" id="date" required>
                    </div>
                </div>
                <div class="modal_button">
                    <input class="button" type="submit" value="Reserve!">
                </div>
            </form>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>