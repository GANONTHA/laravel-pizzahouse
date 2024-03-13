@extends('layouts.layout')

@section('content')
    <h1>Welcome to our Pizza House</h1>
    <p>Name: {{$type}}</p>
    <p>Age: {{$age}}</p>
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

    {{-- Route parameter --}}
    @foreach ($pizzas as $pizza)
        @if ($id == $pizza['id'])
            <h1>This is pizza: {{$pizza['name']}} --- {{$pizza['id']}}</h1>
        @endif
    @endforeach
@endsection