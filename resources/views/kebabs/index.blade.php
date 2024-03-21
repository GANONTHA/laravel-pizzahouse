@extends('layouts.app')

@section('content')
    <h1>List of Kebabs</h1>

    <table>
        <tr>
            <th>Name: </th>
            <th>Price: </th>
            <th>Action: </th>
        </tr>
    @foreach ($kebabs as $kebab)
    <tr>
        <td>{{$kebab->name}}</td>
        <td>{{$kebab->price}}</td>
        <td>
            <a href="{{route('kebab.show',$kebab->id)}}">show</a>
        <td>
    </tr>
    @endforeach
    </table>

    <p>
        <a href="{{route('kebab.create')}}">Order a kebab</a>
    </p>

    <h2>
    {{
        session('mesg')
    }} 
</h2>
@endsection