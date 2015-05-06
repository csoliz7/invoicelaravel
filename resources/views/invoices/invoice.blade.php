@extends('layouts.master')


@section('content')


<div class="col-lg-12">

    <h2>Invoices Summary: </h2>
    <hr />

    <table class="table table-striped">
        <tr>
        <th>Status</th>
            <th>Date Created</th>
        <th>Date Due</th>
        <th>Total</th>
        <th>Invoice No</th>
            <th>Edit</th>
        </tr>

    @foreach($invoices as $i)
        <tr>
            <td>{{$i->status}}</td>
            <td>{{$i->date_created}}</td>
            <td>{{$i->date_due}}</td>
            <td>{{$i->total}}</td>
            <td>{{$i->id}}</td>
            <td><a href="{{url('invoice/'.$i->id.'/edit')}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach

    </table>
</div>
@endsection