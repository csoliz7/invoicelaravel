@extends('layouts.master')

@section('content')
<h2>Edit Client Information</h2>
<hr />

{!!Form::model($client, ['method'=> 'PATCH', 'action' => ['ClientController@update', $client->id]]) !!}

@include('partials.form', ['submitButton'=> 'Update Client'])


{!!Form::close() !!}

<hr />

    @include('errors.list')
@endsection


