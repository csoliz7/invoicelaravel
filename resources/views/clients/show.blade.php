@extends('layouts.master')


@section('content')
    <h2>Client Information</h2>
    <hr />

    <table class="table table-striped">
        <tr>
            <th>Name</th><td>{{$client->firstname}}</td>
        </tr>
        <tr>
            <th>Last Name:</th> <td>{{$client->lastname}}</td>
        </tr>
        <tr>
            <th>Email</th><td>{{$client->email}}</td>
        </tr>


    </table>

@endsection