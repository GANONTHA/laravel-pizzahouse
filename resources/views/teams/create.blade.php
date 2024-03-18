@extends('layouts.layout')

@section('content')

{{-- display data from $pizza variable with name of the orderer, base type --}}
<h1>Create a new team</h1>
{{-- form to add a team with: name, country, worth, year, palmares --}}
<form action="/teams" method="POST">
    @csrf
    <label for="name">Team name:</label>
    <input type="text" id="name" name="name">
    <label for="country">Country:</label>
    <input type="text" id="country" name="country">
    <label for="worth">Worth:</label>
    <input type="text" id="worth" name="worth">
    <label for="year">Year:</label>
    <input type="text" id="year" name="year">
    <label for="palmares">Palmares:</label>
    <input type="text" id="palmares" name="palmares">
    <input type="submit" value="Add Team">
</form>
@endsection