<section id="tours-in-kazakhstan-container">
    <div class="content">
        <div class="title-with-map-container">
            <h3 class="blocks-main-title centered-title title-with-map"><?=$params['cat-name']?></h3>
        </div>
        <?php foreach ($params["best-directions"] as $tours) {?>
            <div class="tour-item best-directions-item">
                <img class="tour-country-img" src="<?=$baseurl?>/assets/img/<?=$tours["img"]?>" alt="<?= $tours["title"]; ?>"/>
                <a class="-tour-info-link" href="<?=$baseurl?>/tours/<?=$params['cat-name']?>/<?=$tours["title"]?>">
                    <div class="tour-info-block centered-tour-info-block">
                        <p class="tour-name"><?= $tours["title"]; ?></p>
                    </div>
                </a>
            </div>
        <?php };?>
    </div>
    <div class="btn-block">
        <button class="bordered-btn">Показать остальные</button>
    </div>
</section>