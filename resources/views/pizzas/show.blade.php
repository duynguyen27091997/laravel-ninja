@extends('layouts.layout')

@section('content')
    <div class="pizza-details wrapper">
        <h1>Order for {{$pizza->name}}</h1>
        <p class="type">{{$pizza->type}}</p>
        <p class="base">{{$pizza->base}}</p>
    </div>
    <a href="/pizzas"><- back to all pizzas</a>
@endsection
