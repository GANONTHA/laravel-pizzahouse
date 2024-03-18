@extends('layouts.layout')

@section('content')
    <h1>Welcome to our Pizza House</h1>
    <p>Name: {{$type}}</p>
    <p>Age: {{$age}}</p>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Base</th>
        </tr>
        
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->name}} </td>
                    <td>${{$pizza->price}}</td>
                    <td>{{$pizza->type}}</td>
                    <td>{{$pizza->base}}</td>
                    
                </tr>
            @endforeach
            </table>

   
@endsection