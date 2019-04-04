<section>
    <div id="our-work-details-container">
        <div id="our-work-details" class="content bor">
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
    </div>
</section>