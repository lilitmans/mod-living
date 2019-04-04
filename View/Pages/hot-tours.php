<section>
<div id="hot-tours-container" class="">
    <div id="hot-tours" class="content">
        <?php for($hotTour=0; $hotTour<count($params["hot-tours"]); ++$hotTour) {
            if($hotTour == 0) {?>
                <div class="hot-tour-title-block tour-item hot-tour-item">
                    <img class="tour-img hot-tour-img" src="<?= $params["hot-tours"][$hotTour]["img"]; ?>" alt="<?= $params["hot-tours"][$hotTour]["name"]; ?>"/>
                    <a class="tour-info-link" href="#">
                        <div id="hot-tour-title-block" class="tour-info-block">
                            <p class="tour-title hot-tour-main-title">
                                <?= $params["hot-tours"][$hotTour]["text"]; ?>
                                <img class="tour-arrow tour-right-arrow" src="../assets/img/to-right-red-arrow.png" alt="Next Arrow" />
                            </p>
                            <img id="hot-tours-icon" src="../assets/img/fire-icon.png" alt="Fire"/>
                        </div>
                    </a>
                </div>
                <?php }else {?>
                <div class="tour-item hot-tour-item">
                    <div class="hot-tour-item-img-block">
                        <img class="hot-tour-item-img" src="<?= $params["hot-tours"][$hotTour]["img"]; ?>" alt="<?= $params["hot-tours"][$hotTour]["country"]; ?>" />
                    </div>
                    <div class="hot-tour-item-info-block">
                        <h3 class="hot-tour-title"><?= $params["hot-tours"][$hotTour]["country"]; ?></h3>
                        <p class="hot-tour-departure">Вылет: <?= $params["hot-tours"][$hotTour]["departure"]; ?></p>
                        <p class="hot-tour-stay-time">
                            <img class="time-icon" src="../assets/img/clock-circular-outline.png" alt="Time">
                            <?= $params["hot-tours"][$hotTour]["nights"]; ?> ночей
                            <?= $params["hot-tours"][$hotTour]["days"]; ?> дней
                        </p>
                        <div class="get-hot-tour-block">
                            <button class="red-bg btn-style hot-tour-btn">Купить</button>
                            <p class="hot-tour-prise"><?= $params["hot-tours"][$hotTour]["price"]; ?>
                                <img src="../assets/img/kz-currency.png">
                            </p>
                        </div>
                    </div>
                </div>
        <?php } };?>
    </div>
</div>
</section>