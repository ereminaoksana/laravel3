
@foreach($allEvents as $settings)
<div class="one_event">


<div class="avatar_event">
<img class="img_avatar_event" src="../../../public/img/events_avatar/{{$settings[1]->avatar}}" alt="">
</div>

<div class="one_event_info">
<span class="name_events">
{{$settings[1]->name}} <br>
<span class="genre_events">{{$settings[2]->genre}}</span>
</span>
</div>

<div class="comment_by_author_event">
<span class="h_comment">Комментарий создателя встречи:</span>
<span class="author_comment">{{$settings[1]->comment}}</span>
</div>

<div class="event_data">
<span class="h_data">Дата/Адрес встречи:</span>
<span class="author_data">{{$settings[1]->date}}</span>
<span class="author_place">{{$settings[1]->addres}}</span>
</div>


<div class="enter_to_event">
<a href="/profile/{{$settings[0]->id}}"><span class="author_event">{{$settings[0]->name}}</span></a>

<span class="count_ppls_event">{{$settings[1]->count_ppls}}</span>

<button class="button_enter_to_event">Принять участие</button>

</div>

</div>
@endforeach




