@extends('index')

@section('main-content')


    <div class="items_read_more">

        <div class="avatar_items_route">
            <img class="img_avatar_items_route" src="../../public/img/{{$item[0]->avatar}}" alt="">
        </div>


        <div class="name_items_route">
            <span class="items_name_route">
            {{$item[0]->name}}
            <i data-id="{{$item[0]->id}}" class="icon-plus-circled add_to_collections"></i>
                <span class="desc_button_collections">Добавить в коллецию</span>
                <div class="token">{{csrf_field()}}</div>
            <div style="float: right">

                @for($i = 1; $i<=5; $i++)
                    @if(($i-$item[0]->rating) > 0)
                        <i class="icon-star-filled"></i>
                    @else
                        <i class="icon-star-filled" style="color: gold"></i>
                    @endif
                @endfor
            </div>

            </span>

            <span class="diapason_users_items"><i class="icon-users-2"></i>  {{$item[0]->diapazon_users}}</span>

            <span class="time_of_the_game_items"><i class="icon-clock-3"></i>  {{$item[0]->time_of_the_game}} мин.</span>

            <span class="age_users_items"><i class="icon-warning-empty"></i>  {{$item[0]->ogranicheniya}}</span>

            <span class="price_items_route"><i class="icon-rouble"></i> {{$item[0]->price}} </span>

            <span class="genre_items"><i class="icon-cubes"></i> {{$item[1]->genre}} </span>

        </div>

        <button class="items_to_cart">В корзину</button>

        <div class="items_desc">
            <span class="h_desc">Описание:</span>


            <span class="items_desc_text">
                {{$item[0]->description}}
            </span>


        </div>

    </div>

@endsection