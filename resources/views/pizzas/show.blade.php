@extends('layouts.app')


@section('content')

{{-- display data from $pizza variable with name of the orderer, base type --}}
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p>Extra toppings</p>
    <ol>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ol>
{{-- delete the pizza upon completing order --}}
<form action="/pizzas/{{ $pizza->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Complete Order</button>
</form>
</div>
<a href="/teams">back</a>

@endsection