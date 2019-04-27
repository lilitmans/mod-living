<?php define("TITLE", "The Ville Tourne")?>

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
        <script type="text/javascript"><?php echo "var base = '".$baseurl."';"; ?></script>
        <script src="<?= $baseurl ?>/assets/javascript/jquery3.3.1.min.js"></script>
		<script src="<?= $baseurl ?>/assets/javascript/script.js"></script>
		<script src="<?= $baseurl ?>/assets/javascript/main.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	</head>
	<body onload="time()">
	<header class="<?=$page=='main'?'homeHeader':'header'?>">
        <div class="content" id="header-block">
            <div class="logo-block">
                <a class="logo-link" href="<?=$baseurl?>"><img class="logo" src="<?=$baseurl?>/assets/i/logo.png" alt="Logo"/></a>
            </div>
            <nav id="navbar">
                <div id="contact-info-block">
                    <div class="phone-number-block">
                        <span class="phone-number-icon-block"><img class="phone-number-icon" src="<?=$baseurl?>/assets/i/call.png"/></span>
                        <a class="phone-number" href="#">+7(777)750-20-50</a>
                    </div>
                    <div class="media-block">
                        <a class="media-link" href="#"><img src="<?=$baseurl?>/assets/i/facebook.png"/></a>
                        <a class="media-link" href="#"><img src="<?=$baseurl?>/assets/i/instagram.png"/></a>
                        <a class="media-link" href="#"><img src="<?=$baseurl?>/assets/i/twitter.png"/></a>
                        <a class="media-link" href="#"><img src="<?=$baseurl?>/assets/i/linkedin.png"/></a>
                    </div>

                    <div class="cabinet-block">
                        <a class="cabinet-link" href="#"><img class="user-icon" src="<?=$baseurl?>/assets/i/user.png"/>
                        Кабинет туриста</a>
                    </div>
                </div>

                <ul id="nav-list">
                    <?php foreach ($params["nav-items"] as $item) {?>
                    <li id="<?=$item["id"]?>" class="nav-item">
                        <a class="nav-link" href="<?=$baseurl?>/<?=$item["item-route"]?>">
                            <img class="nav-item-icon" src="<?=$baseurl?>/assets/i/<?=$item["img"]?>.png" alt="<?=$item["img"]?>"/>
                            <?=$item["name"]?></a>
                    </li>
                    <?php }; ?>
                </ul>
            </nav>
        </div>

    </header>


