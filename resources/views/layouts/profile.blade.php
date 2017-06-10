<div class="profile">

    <div class="user_avatar">

        <img class="img_user_avatar" src="/public/upload/user/1.jpg" alt="">

    </div>

    <div class="user_info">


        <div class="top_user_div">
            <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
        </div>
        <form class="relative_form" action="/profile/savedata" method="post">
            <div class="left_user_div">
                <span class="span_user_info">Email:</span>
                <input class="input_user_info" type="text" name="user_email" placeholder="Email"
                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}">

                <span class="span_user_info">Телефон:</span>
                <input class="input_user_info" type="text" name="user_tel" placeholder="Телефон"
                       value="{{\Illuminate\Support\Facades\Auth::user()->tel}}">

                <span class="span_user_info">Адрес:</span>
                <input class="input_user_info" type="text" name="user_address" placeholder="Адрес"
                       value="{{\Illuminate\Support\Facades\Auth::user()->addres}}">
            </div>
            <div class="mid_user_div">
                <span class="span_user_info">Возраст:</span>
                <input class="input_user_info" type="text" name="user_age" placeholder="Возраст"
                       value="{{\Illuminate\Support\Facades\Auth::user()->age}}">

                <span class="span_user_info">Пол:</span>
                <input class="input_user_info" type="text" name="user_sex" placeholder="Пол"
                       value="{{\Illuminate\Support\Facades\Auth::user()->sex}}">

            </div>

            <div class="right_user_div">
                <button class="button_savedata" type="submit">Сохранить</button>
            </div>

            {{csrf_field()}}


        </form>
    </div>


    <div class="collections">
        <span class="head_in_my_collections">Моя коллекция</span>
    </div>


</div>