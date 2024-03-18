@extends('layouts.layout')

@section('content')

{{-- display data from $team variable with name, country, year founded, worth, palmares --}}
<h1>{{$team->name}}</h1>
<p>{{$team->country}}</p>
<p>{{$team->year}}</p>
<p>{{$team->worth}}</p>


    
@endsection