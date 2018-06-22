@extends('layout')

@section('content')

<h2>Register</h2>

<div id="login" class="flexbox-container">
    
    {{ Form:: open(array('action' => 'post', 'url' => 'register')) }}
    {{ Form::label('username', '') }}
    {{ Form::text('username', '') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', '') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::button('Register', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
    {{ Form::close() }}

</div>

<div class="login_warning">
{{ isset($no_login_or_password) ? 'Login failed' : ''; }}
</div>

@stop