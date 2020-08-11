@extends('layouts.layout')

@section('content')
    <div class="wrapper content-details">
        <h2>Order for {{$pizza->name}}</h2>
        <p>{{$pizza->type}}</p>
        <p>{{$pizza->base}}</p>
    </div>
    <a href="/pizzas">Back to all pizzas</a>
@endsection
