<!DOCTYPE html>
    <head>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>

        <title>Template - 214228 Web User Interface Development</title>

        <!-- Web App -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Icons -->
        <!-- Microsoft recommends 16x16, 32x32 and 48x48 -->
        <link rel="shortcut icon" href="/path/to/icons/favicon.ico">

        <!-- Preload -->
        <link rel='preload' href='/public/css/main.css' as='style'>

        <!-- CSS -->
        <link rel='stylesheet' href='/public/css/main.css'>
    </head>
    <body>
        <div class='page__container'>
            <header class='page__header'>
                <div class='container'>
                    <h1>Welcome to IT Air Purifier Shop</h1>
                </div>
            </header>

            <section class='section__product'>
                <div class='container'>
                    <aside class='filter'>
                        <div class='filter__name'>
                            Please select your room size
                        </div>

                        <select class='filter__selector'>
                            <option>All</option>
                            <option>Room size &lt; 32 m&sup2;</option>
                            <option>Room size &gt;= 32 m&sup2;</option>
                        </select>
                    </aside>
                    <div class='product__list layout__row'>
                        <div class='product__card'>
                            <img class='product__card__image' src='/public/img/xiaomi_xiaomi_air_purifier_3h.jpeg'>
                            <div class='product__card__body'>
                                <h2>Mi Air Purifier 3H</h2>
                                <div class='product__card__body__content'>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices ullamcorper enim, eu commodo lorem venenatis non.
                                </div>
                            </div>
                            <footer class='product__card__footer'>
                                <button class='product__button'>Add to cart</button>
                            </footer>
                        </div>

                        <div class='product__card'>
                            <img class='product__card__image' src='/public/img/xiaomi_xiaomi_air_purifier_3h.jpeg'>
                            <div class='product__card__body'>
                                <h2>Mi Air Purifier 3H</h2>
                                <div class='product__card__body__content'>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices ullamcorper enim, eu commodo lorem venenatis non.
                                </div>
                            </div>
                            <footer class='product__card__footer'>
                                <button class='product__button'>Add to cart</button>
                            </footer>
                        </div>

                        <div class='product__card'>
                            <img class='product__card__image' src='/public/img/xiaomi_xiaomi_air_purifier_3h.jpeg'>
                            <div class='product__card__body'>
                                <h2>Mi Air Purifier 3H</h2>
                                <div class='product__card__body__content'>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices ullamcorper enim, eu commodo lorem venenatis non.
                                </div>
                            </div>
                            <footer class='product__card__footer'>
                                <button class='product__button'>Add to cart</button>
                            </footer>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class='page__footer'>
            <div class='container'>
                <span class='backup__font'>&copy;</span> 2021 School of Information Technology, Suranaree University of Technology
            </div>
        </footer>
    </body>
</html>