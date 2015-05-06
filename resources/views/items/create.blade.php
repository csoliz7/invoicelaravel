@extends('layouts.master')


@section('content')

    <table class="table table-striped">
        <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>

{!!Form::open() !!}

<tr>
    <td>{!!Form::input('text', null, 'item',array('class'=>'form-control')) !!}</td>
    <td>{!!Form::input('text', null, 'description', array('class'=>'form-control')) !!}</td>
    <td>{!!Form::input('text', null, 'qty', array('class'=>'form-control'))!!}</td>
    <td>{!!Form::input('text', null, 'unit_price', array('class'=>'form-control')) !!}</td>
    <td>{!!Form::input('text', null, 'total', array('class'=>'form-control')) !!}</td>
</tr>
        <hr />
        {!!Form::submit('Add Item', array('class'=>'btn btn-primary')) !!}

{!!Form::close() !!}

    </table>
@endsection






