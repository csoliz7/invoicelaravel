@extends('layouts.master')

@section('content')
    <h2>Add New Client</h2>
    <hr/>

    {!!Form::open(['url' => 'client']) !!}


    @include('partials.form', ['submitButton' => 'Create Client'])

    {!!Form::close() !!}

    <hr />

    @include('errors.list')


    @endsection