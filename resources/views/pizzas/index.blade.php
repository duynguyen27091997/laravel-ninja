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

    <div class="wrapper pizza-index">
        <div class="title">
            pizza list
        </div>
        @if(count($pizzas))

        @foreach($pizzas as $pizza )
            <div class="pizza-item">
                <img src="/img/pizza.png" alt="pizza icon">
            <h4><a href="/pizzas/{{$pizza->id}}"> {{$pizza['name']}}</a></h4>
            </div>
        @endforeach
        @else
            <p>No pizzas order</p>
        @endif
        <div>
            <a href="/pizzas/create">Order pizza</a>
        </div>
    </div>
    <section>
    </section>
</div>
@endsection

