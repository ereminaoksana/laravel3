@foreach($all_games as $setting)

    <div class="one_item" content="center">
        <div id="hide_desc" style="display: none">
            <div class="popup_item">
            </div>
            <div class="popup_ppl">
        <span class="popup_desc">

            @for($q = 0; $q<$setting->ychastniki; $q++)
                <i class="icon-user"></i>
            @endfor
        </span>
            </div>

            <div class="circle_age">
                <span class="popup_age">{{$setting->ogranicheniya}}</span>
            </div>

            <div class="rating_stars">

                @for($i = 1; $i<=5; $i++)
                    @if(($i-$setting->rating) > 0)
                        <i class="icon-star-filled"></i>
                    @else
                        <i class="icon-star-filled" style="color: gold"></i>
                    @endif
                @endfor

            </div>

            <div class="dib_but">
                <span>В корзину</span>
            </div>
            <div class="dib_but2">
                <a href="/items/{{$setting->id}}"><span>Подробнее...</span></a>
            </div>
        </div>


        <div class="item_avatar">
            <img class="img_avatar" src="../../public/img/{{$setting->avatar}}" alt="">
        </div>
        <span class="items_name">{{$setting->name}}</span>
        <span class="items_price">{{$setting->price}} <i class="icon-rouble"></i></span>
    </div>

@endforeach

