@extends('layouts.app')

@section('content')
<h1>Welcome to details for {{$kebab->name}} </h1>
    Kebab name: {{$kebab->name}} <br>
    Price:$ {{$kebab->price}} <br>

<a href="{{route('kebabs.index')}}">Back to kebabs list</a>
@endsection