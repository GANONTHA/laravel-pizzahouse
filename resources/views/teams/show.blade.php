@extends('layouts.layout')

@section('content')

{{-- display data from $team variable with name, country, year founded, worth, palmares --}}
<h1>{{$team->name}}</h1>
<p>{{$team->country}}</p>
<p>{{$team->year}}</p>
<p>{{$team->worth}}</p>

<form action="/teams/{{$team->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Remove</button>
</form>

<a href="/teams">back</a>
    
@endsection