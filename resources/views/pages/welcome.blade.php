главная страница

<h3>{{ $data }}</h3>




@if($flag)
    <p>{{ $text }}</p>
@endif


@if(count($users) > 0)
    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endif