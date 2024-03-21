@extends('layouts.app');

@section('content')
{{-- a form to add kebab with name and price --}}
<form action="/kebabs" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="price">Price:</label>
    <input type="text" id="price" name="price">
    <button type="submit" >Order</button>
</form>
@endsection