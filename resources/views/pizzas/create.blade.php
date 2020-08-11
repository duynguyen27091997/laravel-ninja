@extends('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a mew pizza</h1>
        <form action="/pizzas" method="post">
            @csrf
            <label for="name">Your name : </label>
            <input type="text" id="name" name="name">
            <label for="name">Choose pizza type : </label>
            <select name="type" id="type" aria-label="">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose base type : </label>
            <select name="base" id="base" aria-label="">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label for="">Extra topping :</label><br/>
                <input type="checkbox" name="toppings[]" value="mushrooms" aria-label=""> Mushrooms<br/>
                <input type="checkbox" name="toppings[]" value="peppers" aria-label=""> Peppers<br/>
                <input type="checkbox" name="toppings[]" value="garlic" aria-label=""> Garlic<br/>
                <input type="checkbox" name="toppings[]" value="olives" aria-label=""> Olives<br/>
            </fieldset>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection
