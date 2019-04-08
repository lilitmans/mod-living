<section id="search-tours-container">
    <div class="content">
        <p class="navigation">tours.li/kazakhstan/<b>kazakhstan</b></p>
        <div class="flex-container">
            <div class="side-bar">
                <div class="side-bar-menu clear">
                    <ul class="sidebar-menu-list">
                        <?php foreach ($params["best-directions"] as $dir) {?>
                            <li class="sidebar-menu-list-item">
                                <a class="sidebar-menu-list-item-link" href="#"><?= $dir["title"]?></a>
                            </li>
                        <?php }; ?>
                    </ul>
                </div>

                <div>
                    <p id="filters-title">Фильтры</p>
                    <?php $i=0?>
                    <?php foreach ($params["sidebar-filters"] as $filter) {
                        $i++;
                        ?>
                        <div class="filters-block">
                            <input type="checkbox" name="filter" id="filter_<?= $i; ?>"/>
                            <label class="filter-label" for="filter_<?= $i; ?>"><?= $filter["filter-name"]; ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div id="search-tours">
                <?php foreach($params["search-tours"] as $tour) {?>
                    <div class="tour-item tour-item-without-title-block tour-item-borde search-tour-item">
                        <a class="tour-info-link absolute-tour-info-link" href="<?=$baseurl?>/tours/cats/item/<?= $tour["country"]?>">
                            <div class="tour-item-img-block">
                                <img class="tour-item-img" src="<?=$baseurl?>/<?= $tour["img"]; ?>" alt="<?= $tour["country"]; ?>" />
                            </div>
                            <div class="tour-item-info-block">
                                <h3 class="tour-item-info-title"><?= $tour["country"]; ?></h3>
                                <p class="tour-departure">Вылет: <?= $tour["departure"]; ?></p>
                                <p class="tour-info">
                                    <img class="time-icon" src="<?=$baseurl?>/assets/img/clock-circular-outline.png" alt="Time">
                                    <?= $tour["nights"]; ?> ночей
                                    <?= $tour["days"]; ?> дней
                                </p>
                                <div class="get-tour-block">
                                    <p class="tour-prise search-tour-prise"><span class="price-txt">Цена: </span><?= $tour["price"]; ?>
                                        <img src="<?=$baseurl?>/assets/img/kz-currency.png">
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php  };?>
                <div class="btn-block">
                    <button class="bordered-btn">Показать остальные</button>
                </div>
            </div>
        </div>
    </div>
</section>