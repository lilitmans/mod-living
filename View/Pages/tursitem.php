<!--<section id="tours-in-kazakhstan-container">-->
<!--    <div class="content">-->
<!--        <div class="title-with-map-container">-->
<!--            <h3 class="blocks-main-title centered-title title-with-map">--><?//=$params['cat-name']?><!--</h3>-->
<!--        </div>-->
<!--        --><?php //foreach ($params["best-directions"] as $tours) {?>
<!--            <div class="tour-item best-directions-item">-->
<!--                <img class="tour-country-img" src="--><?//=$baseurl?><!--/assets/img/--><?//=$tours["img"]?><!--" alt="--><?//= $tours["title"]; ?><!--"/>-->
<!--                <a class="-tour-info-link" href="--><?//=$baseurl?><!--/tours/--><?//=$params['cat-name']?><!--/--><?//=$tours["title"]?><!--">-->
<!--                    <div class="tour-info-block centered-tour-info-block">-->
<!--                        <p class="tour-name">--><?//= $tours["title"]; ?><!--</p>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--        --><?php //};?>
<!--    </div>-->
<!--    <div class="btn-block">-->
<!--        <button class="bordered-btn">Показать остальные</button>-->
<!--    </div>-->
<!--</section>-->

<section id="contacts-container">
    <div class="content contacts-main-block">
        <div class="contacts-info-block contacts-message-block">
            <h4 class="contacts-info-title">Оставьте свое сообщение</h4>
            <p class="contacts-info-txt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <form id="contacts-message-form" method="post" action="">
                <input class="contact-message-input" type="text" name="name" placeholder="Имя"/>
                <input class="contact-message-input" type="text" name="surname" placeholder="Фамилия"/>
                <input class="contact-message-input" type="email" name="email" placeholder="Почтовый адрес"/>
                <input class="contact-message-input" type="number" name="phone-number" placeholder="Телефон"/>
                <textarea class="contact-message-input" type="text" name="message" rows="7" placeholder="Сообшение"></textarea>
                <button type="submit" class="bordered-btn contact-message-btn">Отправить</button>
            </form>
        </div>
        <div class="contacts-info-block company-details-block">
            <!--            --><?php //foreach ($params["company-data"] as $tours) {?>
            <!--                <div class="contacts-info">-->
            <!--                    <div class="clear">-->
            <!--                        <img class="contacts-icon" src="--><?//=$baseurl?><!--/assets/img/--><?//=$info["icon"]?><!--" alt="--><?//=$info["type"]?><!--"/>-->
            <!--                        <span class="contacts-number">--><?//=$info["number"]?><!--</span>-->
            <!--                    </div>-->
            <!--                    <div class="contacts">-->
            <!--                        <p class="contacts-type">--><?//=$info["type"]?><!--</p>-->
            <!--                        <p class="contacts-type-info">--><?//=$info["data"]?><!--</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            --><?php //};?>
            <div class="contacts-info">
                <div class="clear">
                    <img class="contacts-icon" src="<?=$baseurl?>/assets/img/location-icon.png" alt="Location"/>
                    <span class="contacts-number">01</span>
                </div>
                <div class="contacts">
                    <p class="contacts-type">Адрес</p>
                    <p class="contacts-type-info">РК, 050026, г. Алматы, <br/>Гоголя 201</p>
                </div>
            </div>
            <div class="contacts-info">
                <div class="clear">
                    <img class="contacts-icon" src="<?=$baseurl?>/assets/img/phone-icon.png" alt="Location"/>
                    <span class="contacts-number">02</span>
                </div>
                <div class="contacts">
                    <p class="contacts-type">Номер телефона</p>
                    <p class="contacts-type-info">8(600) 040-20-65</p>
                </div>
            </div>
            <div class="contacts-info">
                <div class="clear">
                    <img class="contacts-icon" src="<?=$baseurl?>/assets/img/envelope-icon.png" alt="Location"/>
                    <span class="contacts-number">03</span>
                </div>
                <div class="contacts">
                    <p class="contacts-type">Почтовый адрес</p>
                    <p class="contacts-type-info">info@detour.kz</p>
                </div>
            </div>
            <div class="contacts-info">
                <div class="media-blcok">
                    <a href="#"><i class="fa fa-facebook contacts-media-icon"></i></a>
                </div>
                <div class="media-blcok">
                    <a href="#"><i class="fa fa-instagram contacts-media-icon"></i></a>
                </div>
                <div class="media-blcok">
                    <a href="#"><i class="fa fa-twitter contacts-media-icon"></i></a>
                </div>
                <div class="media-blcok">
                    <a href="#"><i class="fa fa-linkedin contacts-media-icon"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="map-container">
        <p class="map-txt">Your map here!</p>
    </div>
</section>