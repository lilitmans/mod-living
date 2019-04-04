<section>
    <div id="popular-tours-container" class="">
        <div id="popular-tours" class="content">
            <?php for($tours=0; $tours<count($params["popular-tours"]); ++$tours) {?>

                <?php if($tours == 3) {; ?>
                    <div class="tour-title-block tour-item">
                        <img class="tour-img" src="<?= $params["popular-tours"][$tours]["img"]; ?>" alt="<?= $params["popular-tours"][$tours]["name"]; ?>"/>
                        <a class="tour-info-link" href="#">
                            <div id="tour-title-block" class="tour-info-block">
                                <p class="tour-title">
                                    <img class="tour-arrow tour-left-arrow" src="../assets/img/to-left-red-arrow.png" alt="Prev Arrow" />
                                    <?= $params["popular-tours"][$tours]["text"]; ?></p>
                            </div>
                        </a>
                    </div>
                <?php }else {?>
                    <div class="tour-item">
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
    </div>
</section>