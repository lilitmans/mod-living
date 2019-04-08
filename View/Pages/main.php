<section id="search-field-container">
    <div id="tour-sercher" class="content">
        <form class="form-inputs" method="post" action="">
            <div class="search-input-group">
                <label class="search-input-label" for="_departure-from">Вылет из</label>
                <input id="_departure-from" class="search-inputs" type="text"  name="departure-from" placeholder="Алматы"/>
            </div>

            <div class="search-input-group">
                <label class="search-input-label" for="_country">Страна</label>
                <input id="_country" class="search-inputs" type="text"  name="country" placeholder="********"/>
            </div>

            <div class="search-input-group">
                <label class="search-input-label" for="_tour">Тур</label>
                <input id="_tour" class="search-inputs" type="text"  name="tour" placeholder="********"/>
            </div>

            <div class="search-input-group">
                <label class="search-input-label" for="_nights">Ночей</label>
                <input id="_nights" class="search-inputs" type="number"  name="nights" placeholder="7"/>
            </div>

            <div class="search-input-group">
                <label class="search-input-label" for="_tour-start">Начало тура</label>
                <input id="_tour-start" class="search-inputs" type="date"  name="tour-start" placeholder=""/>
            </div>

            <div class="search-input-group">
                <label class="search-input-label" for="_adults">Взрослых</label>
                <input id="_adults" class="search-inputs" type="number"  name=""adults" placeholder="2"/>
            </div>

            <div class="search-input-group">
                <label class="search-input-label" for=""></label>
                <input id="" class="search-inputs" type=""  name=""/>
            </div>

            <input id="_search-submit" class="" type="submit"  name="" value="Найти"/>
        </form>
        <h1 id="main-title">Незабываемый тур по Шри-Ланке.<br />
            Скидки для молодоженов.
        </h1>
    </div>
</section>
<section id="popular-tours-container">
    <div id="popular-tours" class="content">
        <?php for($tours=0; $tours<count($params["popular-tours"]); ++$tours) {?>

            <?php if($tours == 3) {; ?>
                <div class="tour-title-block tour-item tour-item-with-title-block">
                    <img class="tour-img" src="<?= $params["popular-tours"][$tours]["img"]; ?>" alt="<?= $params["popular-tours"][$tours]["name"]; ?>"/>
                    <a class="tour-info-link" href="#">
                        <div id="tour-title-block" class="tour-info-block">
                            <p class="blocks-main-title tour-title">
                                <img class="tour-arrow tour-left-arrow" src="../assets/img/to-left-red-arrow.png" alt="Prev Arrow" />
                                <?= $params["popular-tours"][$tours]["text"]; ?></p>
                        </div>
                    </a>
                </div>
            <?php }else {?>
                <div class="tour-item tour-item-with-title-block">
                    <img class="tour-country-img" src="<?= $params["popular-tours"][$tours]["img"]; ?>" alt="<?= $params["popular-tours"][$tours]["country"]; ?>"/>
                    <a class="-tour-info-link" href="#">
                        <div class="tour-info-block">
                            <span class="country-flag-container"><img class="country-flag" src="<?= $params["popular-tours"][$tours]["flag"]; ?>"/></span>
                            <span class="tour-name"><?= $params["popular-tours"][$tours]["country"]; ?></span>
                        </div>
                    </a>
                </div>
            <?php } };?>
    </div>
</section>
<section id="tour-company-container">
    <div class="tour-company-info content">
        <div class="tour-company-txt-block">
            <h2 class="tour-company-title">Туристическая компания <br />De Ville Tourne</h2>
            <p class="tour-company-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>
    </div>
</section>
<section id="hot-tours-container" class="main-content">
    <div id="hot-tours" class="content">
        <?php for($hotTour=0; $hotTour<count($params["hot-tours"]); ++$hotTour) {
            if($hotTour == 0) {?>
                <div class="hot-tour-title-block tour-item tour-item-with-title-block hot-tour-item">
                    <img class="tour-img hot-tour-img" src="<?= $params["hot-tours"][$hotTour]["img"]; ?>" alt="<?= $params["hot-tours"][$hotTour]["name"]; ?>"/>
                    <a class="tour-info-link" href="#">
                        <div id="hot-tour-title-block" class="tour-info-block">
                            <p class="blocks-main-title tour-title hot-tour-main-title">
                                <?= $params["hot-tours"][$hotTour]["text"]; ?>
                                <img class="tour-arrow tour-right-arrow" src="../assets/img/to-right-red-arrow.png" alt="Next Arrow" />
                            </p>
                            <img id="hot-tours-icon" src="../assets/img/fire-icon.png" alt="Fire"/>
                        </div>
                    </a>
                </div>
            <?php }else {?>
                <div class="tour-item tour-item-with-title-block tour-item-border hot-tour-item">
                    <a class="tour-info-link absolute-tour-info-link" href="#">
                        <div class="tour-item-img-block">
                            <img class="tour-item-img" src="<?= $params["hot-tours"][$hotTour]["img"]; ?>" alt="<?= $params["hot-tours"][$hotTour]["country"]; ?>" />
                        </div>
                        <div class="tour-item-info-block">
                            <h3 class="tour-item-info-title"><?= $params["hot-tours"][$hotTour]["country"]; ?></h3>
                            <p class="tour-departure">Вылет: <?= $params["hot-tours"][$hotTour]["departure"]; ?></p>
                            <p class="tour-info">
                                <img class="time-icon" src="../assets/img/clock-circular-outline.png" alt="Time">
                                <?= $params["hot-tours"][$hotTour]["nights"]; ?> ночей
                                <?= $params["hot-tours"][$hotTour]["days"]; ?> дней
                            </p>
                            <div class="get-tour-block">
                                <button class="red-bg btn-style hot-tour-btn">Купить</button>
                                <p class="tour-prise"><?= $params["hot-tours"][$hotTour]["price"]; ?>
                                    <img src="../assets/img/kz-currency.png">
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } };?>
    </div>
</section>
<section id="medical-tours-container" class="main-content">
    <div id="medical-tours" class="content">
        <?php for($tours=0; $tours<count($params["medical-tours"]); ++$tours) {?>

            <?php if($tours == 3) {; ?>
                <div class="tour-title-block tour-item tour-item-with-title-block">
                    <img class="tour-img" src="<?= $params["medical-tours"][$tours]["img"]; ?>" alt="<?= $params["medical-tours"][$tours]["name"]; ?>"/>
                    <a class="tour-info-link" href="#">
                        <div id="tour-title-block" class="tour-info-block">
                            <p class="blocks-main-title tour-title">
                                <img class="tour-arrow tour-left-arrow medical-tour-arrow" src="../assets/img/to-left-red-arrow.png" alt="Prev Arrow" />
                                <?= $params["medical-tours"][$tours]["text"]; ?></p>
                        </div>
                    </a>
                </div>
            <?php }else {?>
                <div class="tour-item tour-item-with-title-block">
                    <img class="tour-country-img" src="<?= $params["medical-tours"][$tours]["img"]; ?>" alt="<?= $params["medical-tours"][$tours]["country"]; ?>"/>
                    <a class="tour-info-link" href="#">
                        <div class="tour-info-block">
                            <span class="country-flag-container"><img class="country-flag" src="<?= $params["medical-tours"][$tours]["flag"]; ?>"/></span>
                            <span class="tour-name"><?= $params["medical-tours"][$tours]["country"]; ?></span>
                        </div>
                    </a>
                </div>
            <?php } };?>
    </div>
</section>
<section id="our-work-details-container">
    <div id="our-work-details" class="content">
        <div class="air-balloons-img-container">
            <img id="air-balloons-img" src="../assets/img/air-balloon.png" alt="Air Baloons"/>
        </div>

        <div id="work-details-main-block">
            <h3 id="work-details-main-title">Как работаем?</h3>
            <?php foreach ($params["work-details"] as $details){?>
                <div class="work-details-block">
                    <div class="work-details-txt-block">
                        <h6 class="work-details-title"><?= $details["title"]?></h6>
                        <p class="work-details-txt"><?= $details["text"]?></p>
                    </div>
                    <span>
                        <img class="work-details-icon" src="<?= $details["icon"]?>" alt="Details"/>
                    </span>
                </div>
            <?php }; ?>
        </div>

    </div>
</section>
<section id="best-directions-container">
    <div id="best-directions" class="content">
        <h3 class="blocks-main-title centered-title">Лучшие направления по Казахстану</h3>
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
        <h3 class="blocks-main-title last-news-main-title">Последние новости из блога</h3>
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
                        <p class="tour-description-text"><?= $tours["description"]; ?></p>
                        <p class="tour-info last-new-tour-info">
                        <span>
                            <img class="image-utilities" src="../assets/img/comment-icon.png" alt="Comments"/>
                        </span>
                            <span class="utilities-txt"><?= $tours["comments"]; ?></span>
                            <span>
                            <img class="image-utilities" src="../assets/img/review-icon.png" alt="Review"/>
                        </span>
                            <span class="utilities-txt"><?= $tours["review"]; ?></span>
                        </p>
                    </div>
                </a>
            </div>
        <?php };?>
    </div>
</section>
