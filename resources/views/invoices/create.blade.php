@extends('layouts.master')

@section('content')
<div class="row">
    <span><h2>INVOICE #</h2></span>

</div>
<hr/>

<div class="col-md-12">


{!!Form::open(array('url'=>'invoices','method'=>'post'))!!}

<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label for="client_id">Select Client: </label>
            <select class="form-control" name="client_id">
                @foreach($clients as $u)
                    <option value="{{$u->id}}">{{$u->firstname .' '. $u->lastname}}</option>
                @endforeach
            </select>

        </div>

        <h4><a href="{{url('client/create')}}">Add New Client</a> </h4>
    </div>


    <div class="col-md-offset-10">
        <div class="form-group">
            {!!Form::label('date_created', 'Created at: ') !!}
       {!!Form::input('date', 'date_created', date('Y-m-d'), ['class'=>'form-control']) !!}

        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-2">
        <div class="form-group">
            <label for="status">Invoices Status:</label>
            <select class="form-control" name="status">
                <option>open</option>
                <option>closed</option>
                <option>overdue</option>
                <option>paid</option>
            </select>
        </div>
    </div>

    <div class="col-md-offset-10">
        <div class="form-group">
            {!!Form::label('date_due', 'Due On: ') !!}
            {!!Form::input('date', 'date_due', date('Y-m-d'), ['class'=>'form-control'])!!}
        </div>
    </div>
</div>

{!!Form::submit('Add Item', array('class'=>'btn btn-primary')) !!}

    {!!Form::close() !!}
<hr />

<table class="table table-striped">

    <tr>
        <th>Item</th>
        <th>Description</th>
        <th>Qty</th>
        <th>Unit Price</th>
        <th>Total</th>
    </tr>

</table>


<div class="row">

    <div class="col-md-offset-10">

        <label for="total"><h3>TOTAL</h3></label>
        <input class="form-control" type="text" name="total" value="">
    </div>
</div>



</div>
@endsection