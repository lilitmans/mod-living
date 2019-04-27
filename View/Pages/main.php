<section id="search-field-container">
    <div id="tour-sercher" class="content">
        <h1 id="main-title">Незабываемый тур по Шри-Ланке.</h1>
        <form class="form-inputs" method="post" action="">
                <input class="search-inputs" type="text" placeholder="Страна, курорт или отель"/>
                <input class="search-inputs" type="text" placeholder="16.04 ± 3 дня"/>
                <input class="search-inputs" type="text" placeholder="на 8-10 дней"/>
                <input class="search-inputs" type="text" placeholder="любое"/>
                <input class="search-inputs" type="text" placeholder="2 взр."/>

                <input id="_search-submit" class="" type="submit"  name="" value="Найти туры"/>
        </form>
    </div>
</section>
<section id="hot-tours-container" class="main-content">
    <div id="hot-tours" class="content">
        <h3 class="block-title">Горящие туры</h3>
        <?php for($hotTour=0; $hotTour<count($params["hot-tours"]); ++$hotTour) {?>
            <div class="tour-item tour-item-with-title-block tour-item-border hot-tour-item">
                <a class="tour-info-link absolute-tour-info-link" href="#">
                    <div class="tour-item-short-img-block">
                        <img class="tour-item-img" src="<?=$baseurl?>/assets/img/<?=$params["hot-tours"][$hotTour]["img"]?>.jpg" alt="<?= $params["hot-tours"][$hotTour]["country"]; ?>" />
                    </div>
                    <div class="tour-item-info-block">
                        <h3 class="tour-item-info-title"><?=$params["hot-tours"][$hotTour]["country"]?></h3>
                        <p class="tour-departure">Вылет: <?=$params["hot-tours"][$hotTour]["departure"]?></p>
                        <p class="tour-info">
                            <img class="time-icon" src="<?=$baseurl?>/assets/img/clock-circular-outline.png" alt="Time">
                            <?=$params["hot-tours"][$hotTour]["nights"]?> ночей
                            <?=$params["hot-tours"][$hotTour]["days"]?> дней
                        </p>
                        <div class="get-tour-block">
                            <button class="blue-bg btn-style hot-tour-btn">Купить</button>
                            <p class="tour-prise"><?= $params["hot-tours"][$hotTour]["price"]?>
                                <img src="<?=$baseurl?>/assets/i/kz-currency.png">
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php }?>
    </div>
</section>
<section id="buy-tours-online-container">
    <div id="buy-tours-online-block" class="content">
        <h5 class="buy-tours-online-title">Купить туры онлайн</h5>
        <div class="buy-tours-online-payment-block clear">
            <div class="buy-tours-online-payment-type-block">
                <img class="payment-type-icon" src="<?=$baseurl?>/assets/i/credit-card-icon.png" alt="Payment Type"/>
                <div class="buy-tours-online-payment-type-description">
                    <div class="buy-tours-online-payment-typе-name">
                        Оплата через карточку
                    </div>
                </div>
            </div>
            <div class="buy-tours-online-payment-type-block">
                <img class="payment-type-icon" src="<?=$baseurl?>/assets/i/online-lending-icon.png" alt="Payment Type"/>
                <div class="buy-tours-online-payment-type-description">
                    <div class="buy-tours-online-payment-typе-name">
                        Онлайн кредитование тура
                    </div>
                </div>
            </div>
            <div class="buy-tours-online-payment-type-block">
                <img class="payment-type-icon" src="<?=$baseurl?>/assets/i/half-sum-icon.png" alt="Payment Type"/>
                <div class="buy-tours-online-payment-type-description">
                    <div class="buy-tours-online-payment-typе-name">
                        Рассрочка с предоплатой 30-50%
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="popular-tours-container">
    <div id="popular-tours" class="content">
        <p class="block-title">Популярные направления зарубежных туров</p>
        <?php for($tours=0; $tours<count($params["popular-tours"]); ++$tours) {?>
            <div class="tour-item tour-item-with-title-block">
                <img class="tour-country-img" src="<?=$params["popular-tours"][$tours]["img"]?>" alt="<?=$params["popular-tours"][$tours]["country"]?>"/>
                <a class="-tour-info-link" href="#">
                    <div class="tour-info-block">
                        <div class="country-name-block">
                                <span class="country-flag-container">
                                    <img class="country-flag" src="<?=$baseurl?>/assets/img/<?=$params["popular-tours"][$tours]["flag"]?>.png"/>
                                </span>
                            <span class="tour-name"><?=$params["popular-tours"][$tours]["country"]?></span>
                        </div>
                    </div>
                </a>
            </div>
        <?php }?>
    </div>
</section>
<!--<section id="tour-company-container">-->
<!--    <div class="tour-company-info content">-->
<!--        <div class="tour-company-txt-block">-->
<!--            <h2 class="tour-company-title">Туристическая компания <br />De Ville Tourne</h2>-->
<!--            <p class="tour-company-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
<!--                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
<!--                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.-->
<!--                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
<!--                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo-->
<!--                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section id="medical-tours-container" class="main-content">
    <div id="medical-tours" class="content">
        <p class="block-title">Медицинские туры</p>
        <?php for($tours=0; $tours<count($params["medical-tours"]); ++$tours) {?>
            <div class="tour-item tour-item-with-title-block">
                <img class="tour-country-img" src="<?=$baseurl?>/assets/img/<?=$params["medical-tours"][$tours]["img"]?>.jpg" alt="<?=$params["medical-tours"][$tours]["country"]?>"/>
                <a class="tour-info-link" href="#">
                    <div class="tour-info-block">
                        <div class="country-name-block">
                            <span class="country-flag-container">
                                <img class="country-flag" src="http://tours.li/assets/img/flag.png">
                            </span>
                            <span class="tour-name"><?=$params["medical-tours"][$tours]["country"]?></span>
                        </div>
                    </div>
                </a>
            </div>
        <?php }?>
    </div>
</section>
<section id="our-work-details-container">
    <div id="our-work-details" class="content">
        <div class="our-work-img-container">
            <img id="our-work-img" src="<?=$baseurl?>/assets/img/our-work.png" alt="Our Work"/>
        </div>

        <div id="work-details-main-block">
            <h3 id="work-details-main-title">Как работаем?</h3>
            <div class="work-details-block">
            <?php foreach ($params["work-details"] as $details){?>
                <div class="work-details-block-item">
                    <div class="work-details-txt-block">
                        <h6 class="work-details-title"><?=$details["title"]?></h6>
                        <p class="work-details-txt"><?=$details["text"]?></p>
                    </div>
                    <span>
                        <img class="work-details-icon" src="<?=$baseurl?>/assets/i/<?=$details["icon"]?>.png" alt="Details"/>
                    </span>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</section>
<section id="best-directions-container">
    <div id="best-directions" class="content">
        <p class="block-title">Лучшие направления по Казахстану</p>
        <?php foreach ($params["best-directions"] as $tours) {?>
            <div class="tour-item tour-item-without-title-block best-directions-item">
                <img class="tour-country-img" src="<?= $tours["img"]; ?>" alt="<?= $tours["title"]; ?>"/>
                <a class="-tour-info-link" href="#">
                    <div class="tour-info-block centered-tour-info-block">
                        <p class="tour-name"><?= $tours["title"]; ?></p>
                    </div>
                </a>
            </div>
        <?php };?>
    </div>
</section>
<section id="last-news-container">
    <div id="last-news" class="content">
        <p class="block-title">Последние новости из блога</p>
        <?php foreach ($params["last-news"] as $tours) {?>
            <div class="tour-item last-news-tour-item">
                <a class="tour-info-link absolute-tour-info-link" href="#">
                    <div class="tour-item-img-block">
                        <img class="hot-tour-item-img" src="<?= $tours["img"]; ?>" alt="Last News" />
                        <div class="publication-date-block">
                            <span class="publication-day"><?= $tours["day"]; ?></span>
                            <span class="publication-date"><?= $tours["date"]; ?></span>
                        </div>
                    </div>
                    <div class="tour-item-info-block">
                        <p class="tour-description-text"><?=$tours["description"]?></p>
                        <div class="tour-info last-new-tour-info">
                            <div class="utilities-block">
                                <span><img class="image-utilities" src="<?=$baseurl?>/assets/i/view-icon.png" alt="Comments"/></span>
                                <span class="utilities-txt"><?=$tours["comments"]?></span>
                            </div>
                            <div class="utilities-block">
                                <span><img class="image-utilities" src="<?=$baseurl?>/assets/i/reviews-icon.png" alt="Review"/></span>
                                <span class="utilities-txt"><?= $tours["review"]?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php };?>
    </div>
</section>
