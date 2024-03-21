@extends('layouts.app')


@section('content')

<h1>Add a new Pizza</h1>

<form action="/pizzas" method="POST">
   @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name">
    <label for="type">Choose type:</label>
    <select name="type" id="type">
        <option value="margarita">Margarita</option>
        <option value="hawaiian">Hawaiian</option>
        <option value="veg supreme">Veg Supreme</option>
        <option value="volcano">Volcano</option>
    </select>
    <label for="base">Choose base:</label>
    <select name="base" id="base">
        <option value="cheesy crust">Cheesy Crust</option>
        <option value="garlic crust">Garlic Crust</option>
        <option value="thin & crispy">Thin & Crispy</option>
        <option value="thick">Thick</option>
    </select>
    <label for="price">Price:</label>
    <select name="price" id="price">
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
    </select>
    <label>Extra toppings</label>
    <fieldset>
        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
        <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
        <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
        <input type="checkbox" name="toppings[]" value="olives">Olives<br>
    </fieldset>
    <input type="submit" value="Order Pizza">
</form>

{{-- return to home --}}
<a href="/pizzas">Back to all pizzas</a>
@endsection