@extends('layouts.layout')

@section('content')
    <div class="pizza-details wrapper">
        <h1>Order for {{$pizza->name}}</h1>
        <p class="type">{{$pizza->type}}</p>
        <p class="base">{{$pizza->base}}</p>
        <p class="toppings">Extra toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{$pizza->id}}" method="post">
            @csrf
            @method('delete')
            <button>Complete order</button>
        </form>
    </div>
    <a href="/pizzas"><- back to all pizzas</a>
@endsection
