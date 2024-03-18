@extends('layouts.layout')

@section('content')
<h1>Home page</h1>

<img class="pic" src="/images/bruno.jpg" alt="my pic">

<p>
    {{session('mssg')}}
</p>

<a href="/pizzas/create">Order a pizza</a>
@endsection