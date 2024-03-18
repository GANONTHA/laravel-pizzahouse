@extends('layouts.layout')

@section('content')

{{-- display data from $pizza variable with name of the orderer, base type --}}
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    
@endsection