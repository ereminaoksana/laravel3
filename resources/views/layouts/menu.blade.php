<div id="menu" class="top-zindex">
    <ul class="main-menu">
        <li><i class="icon-home-outline users-font-icon"></i><a href="/">Главная</a></li>
        <li><i class="icon-users-outline users-font-icon"></i><a href="/events">Встречи</a></li>
        <li><i class="icon-handshake-o users-font-icon"></i><a href="/exchange">Обмен</a></li>
        <li><i class="icon-truck users-font-icon"></i><a href="/delivery">Условия доставки</a></li>

        @if (!Auth::check())
            <li class="users-search"><i class="icon-login users-font-icon log-in"></i></li>

        @else

            <li class="users-search"><i class="icon-user-2 users-font-icon users_cabinet"></i></li>



            <div class="popup_users_modal">
                <span>{{Auth::user()->name}}</span>
                <a href="/profile/{{Auth::user()->id}}">
                    <button>Личный кабинет</button>
                </a>
                <form action="/logout" method="post">
                    <button type="submit">Выйти</button>
                    {{csrf_field()}}
                </form>

            </div>


        @endif

        <li class="users-search"><i class="icon-opencart users-font-icon cart"></i></li>
        <li class="users-search"><i class="icon-search-circled users-font-icon serach"></i></li>
    </ul>
</div>


<!--Поиск-------------------------------->
<div class="top-zindex" id="serach" style="display: none">
    <span class="span-search">Поиск:</span>
    <div class="site-search">
        <input type="text" class="serach-text" placeholder="Название, ключевое слово">
    </div>
    <span class="span-serach-icon"><i class="icon-search-circled"></i></span>
</div>
<!--Поиск-------------------------------->


<div class="top-zindex" id="log-in" style="display: none">

    <div class="log-in-head-menu">
        <div class="span-head-menu i-have-acc">
            <span class="span-i-have">
                У меня есть аккаунт
            </span>
        </div>
        <div class="i-not-have-acc">
            <span class="span-head-menu span-i-not-have">
                Регистрация
            </span>
        </div>
    </div>


    <div id="log-in-enter-data">
        <form action="/login" method="post">


            <input type="text" class="form-enter enter-login" name="email" placeholder="Email"><br>
            <input type="password" class="form-enter enter-pass" name="password" placeholder="Пароль"><br>
            {{csrf_field()}}
            <button type="submit" class="button-log-in">Войти</button>

        </form>
    </div>

    <div id="reg-enter-data" style="display: none;">
        <form action="/register" method="post">
            <input type="text" class="form-enter-reg enter-reg-email" name="email" placeholder="Email">
            <input type="tel" class="form-enter-reg enter-reg-tel" name="tel" placeholder="Телефон">
            <br>
            <input type="password" class="form-enter-reg enter-reg-pass" name="password" placeholder="Пароль">
            <input type="password" class="form-enter-reg enter-reg-repass" name="password_confirmation"
                   placeholder="Повторите пароль">
            <br>
            <input type="text" class="form-enter-reg enter-reg-email" name="name" placeholder="ФИО">
            <input type="text" class="form-enter-reg enter-reg-address" name="addres" placeholder="Адрес">
            <br>
            {{--<input type="text" class="form-enter-reg enter-reg-sex" name="sex" placeholder="Пол">--}}

            <select class="form-enter-reg enter-reg-sex" name="sex" id="">
                <option value="no_option">Не выбрано</option>
                <option value="man">Муж.</option>
                <option value="woman">Жен.</option>
            </select>

            <input type="text" class="form-enter-reg enter-reg-age" name="age" placeholder="Возраст">
            {{csrf_field()}}

            <button type="submit" class="button-log-in">Зарегистрироваться</button>

        </form>
    </div>

</div>


<div show="n" class="top-zindex" id="main_cart" style="display: none">

    <span class="count_items">
        Товаров в корзине: <br>
        <b>723</b>

    </span>
    <span class="count_price">
        Общая стоимость: <br>
        <b style="color: greenyellow;">25 000<i class="icon-rouble"></i></b>
    </span>
    <br>
    <button class="go_to_cart">Перейти в корзину</button>

    <span
            style="width: 100%; display: block; margin-top: 5%; font-size: 6em; text-align: center; color: greenyellow; text-shadow: 0 3px 5px black"><i
                class="  icon-optin-monster"></i></span>

</div>


<div class="popup" style="display: none">

</div>