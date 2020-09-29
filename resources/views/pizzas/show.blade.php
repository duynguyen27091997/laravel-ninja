@extends('layouts.app')

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
        <form action="{{ route('pizzas.destroy',$pizza->id) }}" method="post">
            @csrf
            @method('delete')
            <button>Complete order</button>
        </form>
        <hr>
        <a href="{{ route('pizzas.index') }}"><- back to all pizzas</a>
    </div>
@endsection
