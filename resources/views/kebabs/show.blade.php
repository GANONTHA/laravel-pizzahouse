@extends('layouts.app')

@section('content')
<h1>Welcome to details for {{$kebab->name}} </h1>
    Kebab name: {{$kebab->name}} <br>
    Price:$ {{$kebab->price}} <br>
<form action="/kebabs/{{$kebab->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Remove</button>
</form>
<a href="{{route('kebabs.index')}}">Back to kebabs list</a>
@endsection