
<section id="account-settings-container">
    <div id="account-settings-main-block" class="content">
        <div class="side-bar-menu">
            <ul class="sidebar-menu-list sidebar-menu-list-nopadd">
                <li class="sidebar-menu-list-item account-settings-menu-list-item" data="0">
                    <a class="sidebar-menu-list-item-link" href="#">Мои туры</a>
                </li>
                <li class="sidebar-menu-list-item account-settings-menu-list-item" data="1">
                    <a class="sidebar-menu-list-item-link" href="#">Мои избранные</a>
                </li>
                <li class="sidebar-menu-list-item account-settings-menu-list-item" data="2">
                    <a class="sidebar-menu-list-item-link" href="#">Мои билеть</a>
                </li>
                <li class="sidebar-menu-list-item account-settings-menu-list-item" data="3">
                    <a class="sidebar-menu-list-item-link" href="#">Кредитные заявки</a>
                </li>
                <li class="sidebar-menu-list-item account-settings-menu-list-item active-list-item" data="4">
                    <a class="sidebar-menu-list-item-link active-list-item-link" href="#">Настройки</a>
                </li>
            </ul>
        </div>
        <div class="account-settings-field">
            <p class="block-title">Кабинет туриста</p>
            <div class="account-settings-section clear">
                Мои туры
            </div>
            <div class="account-settings-section clear">
                Мои избранные
            </div>
            <div class="account-settings-section clear">
                Мои билеты
            </div>
            <div class="account-settings-section clear">
                Кредитные заявки
            </div>
            <div class="account-settings-section clear open">
                <form method="post" action="">
                    <div id="account-settings-form">
                        <div class="account-settings-inputs">
                            <input class="account-settings-input" type="text" name="name" placeholder="Имя"/>
                            <input class="account-settings-input" type="text" name="surname" placeholder="Фамилия"/>
                            <input class="account-settings-input" type="email" name="email" placeholder="Почтовый адрес"/>
                            <input class="account-settings-input" type="number" name="phone-number" placeholder="Телефон"/>
                        </div>
                        <div class="account-settings-inputs">
                            <input class="account-settings-input" type="text" name="new-login" placeholder="Новый логин"/>
                            <input class="account-settings-input" type="password" name="password" placeholder="Старый пароль"/>
                            <input class="account-settings-input" type="password" name="new-password" placeholder="Новый пароль"/>
                            <input class="account-settings-input" type="password" name="confirm-password" placeholder="Повторить пароль"/>
                        </div>
                    </div>
                    <button type="submit" class="bordered-btn account-settings-btn">Загрузить настройки</button>
                </form>
            </div>
        </div>
    </div>
</section>