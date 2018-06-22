@extends('layout')

@section('content')

<h2>Hello, {{ $loggedin_user->username }} !</h2>

<p>The current time and date is:</p>
<!-- <p> {{ date('Y-m-d H:i:s') }}</p> -->
<p> {{ $mytime }}</p>

<div id="logout" class="flexbox-container">
    
    {{ Form:: open(array('action' => 'post', 'url' => 'logout')) }}
    {{ Form::button('Logout', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
    {{ Form::close() }}

</div>

@stop