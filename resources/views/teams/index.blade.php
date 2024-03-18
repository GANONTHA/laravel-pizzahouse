@extends('layouts.layout')


@section('content')

    <table>
        <tr>
            {{-- create table colums with data from team table --}}
            <th>Name</th>
            <th>Country</th>
            <th>Year Founded</th>
            <th>Worth</th>
            <th>Palmares</th>
        </tr>
     @foreach ($teams as $team)
        <tr>
            {{-- add table data for each team --}}
            <td>{{$team->name}}</td> 
            <td>{{$team->country}}</td>
            <td>{{$team->year}}</td>
            <td>{{$team->worth}}</td>
            <td>{{$team->palmares}}</td>
        </tr>
    @endforeach
    </table>

    <a href="/create">Add a new team</a>
   
<h2>
    {{
        session('tmssg')
    }}
</h2>
@endsection