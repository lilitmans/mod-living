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
        <script src="<?= $baseurl ?>/assets/javascript/jquery2.2.4.min.js"></script>
		<script src="<?= $baseurl ?>/assets/javascript/script.js"></script>
		<script src="<?= $baseurl ?>/assets/javascript/main.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	</head>
	<body onload="time()">
	<header>
<!--        <a href="--><?//=$baseurl?><!--/contact">contacty</a>-->
<!--        <a href="--><?//=$baseurl?><!--/contact/test/1">contacty</a>-->
        <div class="content" id="header-block">
            <div id="logo-block">
                <img id="logo" src="../../assets/img/logo-white.png" alt="Logo"/>
            </div>
            <nav id="navbar">
                <div id="contact-info-block">
                    <div class="phone-number-block">
                        <span class="phone-number-icon"><img src="../assets/img/call.png"/></span>
                        <a class="phone-number" href="#">+7(777)750-20-50</a>
                    </div>
                    <div class="media-block">
                        <a class="media-link" href="#"><img src="../assets/img/fb.png"/></a>
                        <a class="media-link" href="#"><img src="../assets/img/insta.png"/></a>
                        <a class="media-link" href="#"><img src="../assets/img/tw.png"/></a>
                        <a class="media-link" href="#"><img src="../assets/img/in.png"/></a>
                    </div>

                    <div class="other-features">
                        <a class="other-features-link" href="#"><img src="../assets/img/search.png"/></a>
                        <a class="other-features-link" href="#"><img src="../assets/img/heart.png"/></a>
                        <a class="other-features-link" href="#"><img src="../assets/img/user.png"/></a>
                    </div>
                </div>

                <ul id="nav-list">
                    <?php foreach ($params["nav-items"] as $item) {?>
                    <li class="nav-item">
                        <a id="<?=$item["id"]?>" class="nav-link" href="#"><?=$item["name"]?></a>
                    </li>
                    <?php }; ?>
                </ul>
            </nav>
        </div>

    </header>


