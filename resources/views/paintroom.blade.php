@extends('default')
@section('content')
    <div class="col-lg-8">
        <h4 class="alert alert-success">Hi  {{ Auth::user()->name }} </h4>
    </div>
@stop
