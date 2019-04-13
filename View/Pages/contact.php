
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