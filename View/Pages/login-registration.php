<section id="login-registration-container">
    <div class="content">
        <div class="flex-container">
            <div id="login-container">
                <h4 class="login-registr-title">Войти на сайт</h4>
                <form class="login-registr-from" method="post" action="">
                    <div class="inputs-block login-block">
                        <input class="login-registr-input" type="text" name="login" placeholder="Ваш логин"/>
                        <input class="login-registr-input" type="password" name="registr-password" placeholder="Пароль"/>
                        <button class="red-bg-btn">Войти</button>
                    </div>

                </form>
            </div>
            <div id="registration-container">
                <h4 class="login-registr-title">Регистрация на сайт</h4>
                <form class="login-registr-form registr-form" method="post" action="">
                    <div class="inputs-block registr-block">
                        <input class="login-registr-input" type="text" name="name" placeholder="Имя"/>
                        <input class="login-registr-input" type="text" name="surname" placeholder="Фамилия"/>
                        <input class="login-registr-input" type="email" name="email" placeholder="Почтовый адрес"/>
                        <p class="privacy-policy-info">Нажимая на кноку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой
                            <a class="red-txt" href="#">конфиденциальности</a>
                        </p>
                    </div>
                    <div class="inputs-block">
                        <input class="login-registr-input" type="number" name="phone-number" placeholder="Телефон"/>
                        <input class="login-registr-input" type="password" name="password" placeholder="Пароль"/>
                        <input class="login-registr-input" type="password" name="password" placeholder="Повторить пароль"/>
                        <button type="submit" class="red-bg-btn registr-btn">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>