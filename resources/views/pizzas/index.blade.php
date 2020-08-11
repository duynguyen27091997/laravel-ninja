@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title">
            pizza list
        </div>
        <ul>
        @foreach($pizzas as $pizza )
            <li>{{$loop->index}}-- {{$pizza['name']}} -- {{$pizza['type']}} -- {{$pizza['base']}}</li>
        @endforeach
        </ul>
    </div>
    <section>
    </section>
</div>
@endsection

