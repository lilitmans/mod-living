<div id="menu">	
<!--    <div class='user_panel'>-->
<!--        <div class="pull-left image">-->
<!--            <img src="--><?//= $baseurl ?><!--/assets/images/user/1.jpg" class="img-circle" alt="User Image">-->
<!--        </div>-->
<!--        <div class="pull-left info">-->
<!--            <p>GYM</p>-->
<!--            <a href="#"><i class="fa fa-circle"></i> Online</a>-->
<!--        </div>-->
<!--    </div>-->
    <ul class='sidebar-menu'>
<!--        <li class='header'>Add Filtr</li>-->
<!--        <a href='--><?//= $baseurl ?><!--/filtrname/'>-->
<!--            <li class="menuli">-->
<!--                <i class="inline_menu fa fa-filter --><?//= $page == 'filtr' ? "active_i" : "" ?><!--" aria-hidden="true"></i>-->
<!--                <span class="menu_text inline_menu --><?//= $page == 'filtr' ? "active_span_menu" : "" ?><!--">Filtrs </span>-->
<!--            </li>-->
<!--        </a>-->
<!--        <li class='header'>Filtrs</li>-->
<!--        --><?php //if(count($params['menu_filtr_name']) > 0){ ?>
<!--            --><?php //foreach ($params['menu_filtr_name'] as $val){ ?>
<!--                <a href='--><?//= $baseurl ?><!--/filtrs/--><?//=$val['id']?><!--'>-->
<!--                    <li class="menuli">-->
<!--                        <i class="inline_menu fa fa-filter --><?//= $page == 'categories' ? "active_i" : "" ?><!--" aria-hidden="true"></i>-->
<!--                        <span class="menu_text inline_menu --><?//= $page == 'categories' ? "active_span_menu" : "" ?><!--">--><?//=$val['name']?><!-- </span>-->
<!--                    </li>-->
<!--                </a>-->
<!--            --><?php //} ?>
<!--        --><?php //} ?>
        <li class='header'>Меню</li>
        <a href='<?= $baseurl ?>/categores/'>
            <li class="menuli">
                <i class="inline_menu fa fa-comment <?= $page == 'categores' ? "active_i" : "" ?>" aria-hidden="true"></i>
                <span class="menu_text inline_menu <?= $page == 'categores' ? "active_span_menu" : "" ?>">Категория</span>
            </li>
        </a>
        <a href='<?= $baseurl ?>/subcategores/'>
            <li class="menuli">
                <i class="inline_menu fa fa-comment <?= $page == 'sub-categores' ? "active_i" : "" ?>" aria-hidden="true"></i>
                <span class="menu_text inline_menu <?= $page == 'sub-categores' ? "active_span_menu" : "" ?>">Подкатегория</span>
            </li>
        </a>

    </ul>
</div>
