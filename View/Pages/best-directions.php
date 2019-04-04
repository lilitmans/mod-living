<section>
    <div id="best-directions-container">
        <div id="best-directions" class="content">
            <h3 id="best-directions-main-title" class="blocks-main-title">Лучшие направления по Казахстану</h3>
            <?php foreach ($params["best-directions"] as $tours) {?>
            <div class="tour-item tour-item-without-title-block">
                <img class="tour-country-img" src="<?= $tours["img"]; ?>" alt="<?= $tours["title"]; ?>"/>
                <a class="-tour-info-link" href="#">
                    <div class="tour-info-block centered-tour-info-block">
                        <p class="tour-name"><?= $tours["title"]; ?></p>
                    </div>
                </a>
            </div>
            <?php };?>
        </div>
    </div>
</section>