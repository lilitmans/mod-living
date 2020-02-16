<?php $url = explode('/',$_SERVER['REQUEST_URI']); ?>

<?php define("TITLE", "MOD LIVING")?>

<!doctype html>
<html lang="en">
	<head>
        <title><?=$seo['title']?></title>
        <meta name="description" content="<?=$seo['desc']?>">
        <meta name="keywords" content="<?=$seo['key']?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" file="text/css" href="<?= $baseurl ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= $baseurl ?>/assets/css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?= $baseurl ?>/assets/css/jquery-ui.css"/>
        <script type="text/javascript"><?php echo "var base = '".$baseurl."';"; ?></script>
        <script src="<?= $baseurl ?>/assets/javascript/jquery3.3.1.min.js"></script>
        <script src="<?= $baseurl ?>/assets/javascript/jquery-ui.js"></script>
		<script src="<?= $baseurl ?>/assets/javascript/script.js"></script>
		<script src="<?= $baseurl ?>/assets/javascript/main.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	</head>
	<body onload="time()">
	<header>
        <div class="content">
            <div id="navbar_info_block" class="flexbox">
                <div id="contact_via_call_block" class="flexbox">
                    <img src="<?= $baseurl ?>/assets/i/phone.png" alt="Phone"/>
                    <div id="phone_number_block">
                        <a class="dark-violet" href="tel: 1-800-841-3954">1-800-841-3954</a>
                        <p class="lighter-violet">Please call thin number for a discount on your order</p>
                    </div>
                </div>

                <div id="header_additional_finctions" class="flexbox">
                    <h1 id="header_brand_name" class="brightest-violet">Mod living</h1>
                    <div id="search_single" class="_search-single_ single-additional-func">
                        <form id="search_form" class="flexbox">
                            <input id="_search" class="dark-grey" type="text" placeholder="Type...">
                            <button id="submit_search" type="submit">
                                <label id="search_label" class="flexbox-inline" for="_search">
                                    <img class="header-additional-icon" src="<?= $baseurl ?>/assets/i/search.png"/>
                                    <div class="dark-grey header-additional-func-name">search</div>
                                </label>
                            </button>
                        </form>
                    </div>
                    <div class="single-additional-func single-fun-height">
                        <a class="flexbox" href="<?php $baseurl?>/login">
                            <div id="single_func_user" class="dark-grey header-additional-func-name flexbox">
                                <img class="header-additional-icon" src="<?= $baseurl ?>/assets/i/user.png"/>
                                login
                            </div>
                        </a>
                    </div>
                    <div id="single_func_favorite" class="single-additional-func">
                        <a class="single-add-func-link flexbox" href="#">
                            <img class="header-additional-icon" src="<?= $baseurl ?>/assets/i/favorite.png"/>
                            <div class="dark-grey header-additional-func-name header-add-func-name-rounded flexbox">
                                10
                            </div>
                        </a>
                    </div>
                    <div class="single-additional-func">
                        <a class="single-add-func-link flexbox" href="<?= $baseurl ?>/card">
                            <img class="header-additional-icon" src="<?= $baseurl ?>/assets/i/bag.png"/>
                            <div class="dark-grey header-additional-func-name header-add-func-name-rounded flexbox">
                                3
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul class="flexbox">
                    <li>
                        <a class="dark-violet" href="<?php $baseurl?>/">Home</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'store' ? 'active-nav':''?>" href="<?php $baseurl?>/store">Our store</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'returnpolicy' ? 'active-nav':''?>" href="<?php $baseurl?>/returnpolicy">Return policy</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'about' ? 'active-nav':''?>" href="<?php $baseurl?>/about">About us</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'paymentoptions' ? 'active-nav':''?>" href="<?php $baseurl?>/paymentoptions">Payment options</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'customerservice' ? 'active-nav':''?>" href="<?php $baseurl?>/customerservice">Customer service</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'shippinginformation' ? 'active-nav':''?>" href="<?php $baseurl?>/shippinginformation">Shipping information</a>
                    </li>
                    <li>
                        <a class="dark-violet <?=$url[1] == 'contact' ? 'active-nav':''?>" href="<?php $baseurl?>/contact">Contact us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


