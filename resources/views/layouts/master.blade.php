<!DOCTYPE html>
<html lang="en">

@include('partials.head')


<body>


<div class="container">

    @if(\Illuminate\Support\Facades\Session::has('flash_message'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session()->get('flash_message') }}
        </div>

    @endif
        <div class="row">
        @yield('content')
    </div>

</div>



@include('partials.scripts')
</body>
</html>
