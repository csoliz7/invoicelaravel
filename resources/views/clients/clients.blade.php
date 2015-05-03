@extends('layouts.master')

@section('content')

<h2>Clients List</h2>

<hr />

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>

    @foreach($clients as $c)
        <tr>
            <th>{{$c->id}}</th>
            <th>{{$c->firstname}}</th>
            <th>{{$c->lastname}}</th>
            <th>{{$c->email}}</th>
            <th><a href="{{url('client/'.$c->id.'/edit')}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></th>
            <th>

                {!! Form::open(array('url' => 'client/' . $c->id, 'class' => 'pull-left')) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                {!! Form::close() !!}


            </th>
        </tr>
        @endforeach
</table>

<hr />
    <h2><a href="{{url('client/create')}}">Add a New Client</a></h2>



@endsection