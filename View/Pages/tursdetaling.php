<section id="search-tours-container">
    <div class="content">
        <p class="navigation">tours.li/kazakhstan/<b>kazakhstan</b></p>
        <div class="flex-container">
            <div class="side-bar">
                <div class="side-bar-menu clear">
                    <ul class="sidebar-menu-list">
                        <?php foreach ($params["best-directions"] as $dir) {?>
                            <li class="sidebar-menu-list-item">
                                <a class="sidebar-menu-list-item-link" href="#"><?=$dir["title"]?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div>
                    <p id="filters-title">Фильтры</p>
                    <?php $i=0?>
                    <?php foreach ($params["sidebar-filters"] as $filter) {
                        $i++;
                        ?>
                        <div class="filters-block">
                            <input type="checkbox" name="filter" id="filter_<?=$i?>"/>
                            <label class="filter-label" for="filter_<?=$i?>"><?=$filter["filter-name"]?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div id="search-tours">
                <?php for($hotTour=0; $hotTour<count($params["hot-tours"]); ++$hotTour) {?>
                    <div class="tour-item tour-item-with-title-block tour-item-border search-tour-item">
                        <a class="tour-info-link absolute-tour-info-link" href="#">
                            <div class="tour-item-long-img-block">
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

                <div class="btn-block">
                    <button class="bordered-btn">Показать остальные</button>
                </div>
            </div>
        </div>
    </div>
</section>