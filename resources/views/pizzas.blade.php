@extends('layouts.layout')

@section('content')
<h1>Welcome to our Pizza House</h1>
<p>Var 1: {{$type}}</p>
<p>var 2: {{$age}}</p>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <tr>


@foreach ($pizzas as $pizza)
<tr>
    <td>  {{$pizza['name']}} </td>
    <td>  ${{$pizza['price']}}</td>
</tr>
@endforeach
</table>
@endsection