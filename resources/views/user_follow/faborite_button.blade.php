@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favoriteing($micropost->id))
        {!! Form::open(['route' => ['micropost.unadd', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Kaizyo', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.add', $micropost->id]]) !!}
            {!! Form::submit('addfavorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif