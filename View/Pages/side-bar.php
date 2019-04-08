<div id="side-bar">
    <div class="side-bar-menu">
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

<!---------------------------------------------------------------------->
<!-----------------------------------From Tours in Kazakhstan Page----------------------------------->

