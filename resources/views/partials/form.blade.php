

{!!Form::hidden('user_id', $user->id)!!}


<div class="form-group">
    {!!Form::label('firstname','First Name:') !!}
    {!!Form::text('firstname', null, ['class'=>'form-control'])!!}

</div>


<div class="form-group">
    {!!Form::label('lastname','Last Name:') !!}
    {!!Form::text('lastname', null, ['class'=>'form-control'])!!}

</div>

<div class="form-group">
    {!!Form::label('email','Email:') !!}
    {!!Form::email('email', null, ['class'=>'form-control'])!!}
</div>


{!!Form::submit($submitButton, ['class'=>'btn btn-primary form-control']) !!}

