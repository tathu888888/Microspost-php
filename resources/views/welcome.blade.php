@extends('layouts.app')


@section('content')
    @if(Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        
                        <h3 class="card-title"> {{ Auth::user() ->name }}<\h3>
                            {{Auth::user()->name }}
                        </h3>
                    </div>
                    
        <div class="card-body">
            <img class="rounded img-fluid" src="{{ Gravatar::src(Auth::user()->email, 500) }}" alt="">
        </div>
      </div>
    </aside>
    <div class="col-sm-8">
        @if(count($microposts) > 0)
            @include('microposts.microposts', ['microposts' => $microposts])
        @endif
    </div>
        </div>
        
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            
        </div>
    </div>

    @endif
    
@endsection