<footer>
    <div id="footer-info-main-container" class="content">
        <div id="company-info" class="footer-info-block">
            <div id="footer-logo-block">
                <img class="logo" src="<?=$baseurl?>/assets/img/colored-logo.png" alt="Logo"/>
            </div>
            <div class="footer-info">
                <?php foreach ($params["footer-company-data"] as $data){?>
                <div class="footer-info-str">
                     <span class="footer-info-icon">
                        <img src="<?=$baseurl?>/<?=$data["icon"]; ?>" />
                     </span>
                    <span><?=$data["data"]; ?></span>
                </div>
                <?php };?>
            </div>


        </div>

        <?php for($item=0; $item<count($params["footer-data"]); ++$item){
            if($params["footer-data"][$item] == end($params["footer-data"])) {?>
                <div class="footer-info-block">
                    <h6 class="footer-section-title"><?= $params["footer-data"][$item]["title"]; ?></h6>
                    <div class="">

                        <?php for($i=0; $i<count($params["footer-data"][$item]["items"]); ++$i) {?>
                            <div class="footer-info footer-section-item">
                                <a class="footer-section-item-link" href="#"><?= $params["footer-data"][$item]["items"][$i]; ?></a>
                            </div>
                        <?php }; ?>

                    </div>
                </div>
            <?php }else { ?>
                <div class="footer-info-block">
                    <h6 class="footer-section-title"><?= $params["footer-data"][$item]["title"]; ?></h6>
                    <div class="">

                        <?php for($i=0; $i<count($params["footer-data"][$item]["items"]); ++$i) {?>
                            <div class="footer-info footer-section-item">
                                <a class="footer-section-item-link" href="#"><?= $params["footer-data"][$item]["items"][$i]; ?></a>
                            </div>
                        <?php }; ?>

                    </div>
                    <div class="footer-info footer-section-all-items">
                        <a class="footer-section-all-items-link" href="#">Все <?=$params["footer-data"][$item]["see-all"]; ?></a>
                    </div>
                </div>
        <?php }}; ?>

    </div>
    <div id="copy-right-block" class="red-bg">
        <div id="copy-right-info-block" class="content">
            <span>&copy; <?= TITLE; ?>, <?= date("Y"); ?></span>
            <div id="development-info">
                <p>Дизайн и Разработка сайта : STUDIO NOMAD</p>
            </div>
        </div>
    </div>
</footer>