<section>
<div id="medical-tours-container" class="">
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
</div>
</section>