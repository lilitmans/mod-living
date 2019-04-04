<section>
    <div id="last-news-container">
        <div id="last-news" class="content">
            <h3 class="blocks-main-title last-news-main-title">Последние новости из блога</h3>
            <?php foreach ($params["last-news"] as $tours) {?>
            <div class="tour-item last-news-tour-item">
                <a class="tour-info-link absolute-tour-info-link" href="#">
                    <div class="tour-item-img-block">
                        <img class="hot-tour-item-img" src="<?= $tours["img"]; ?>" alt="Last News" />
                        <div class="publication-date-block">
                            <span class="publication-day"><?= $tours["day"]; ?></span>
                            <span class="publication-date"><?= $tours["date"]; ?></span>
                        </div>
                    </div>
                    <div class="tour-item-info-block">
                        <p class="tour-description-text"><?= $tours["description"]; ?></p>
                        <p class="tour-info last-new-tour-info">
                            <span>
                                <img class="image-utilities" src="../assets/img/comment-icon.png" alt="Comments"/>
                            </span>
                            <span class="utilities-txt"><?= $tours["comments"]; ?></span>
                            <span>
                                <img class="image-utilities" src="../assets/img/review-icon.png" alt="Review"/>
                            </span>
                            <span class="utilities-txt"><?= $tours["review"]; ?></span>
                        </p>
                    </div>
                </a>
            </div>
            <?php };?>
        </div>
    </div>
</section>