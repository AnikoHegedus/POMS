@extends('layout')

@section('content')

<h2>Register</h2>

<div id="login" class="flexbox-container">
    
    {{ Form:: open(array('action' => 'post', 'url' => 'registerNew')) }}
    {{ Form::label('username', '') }}
    {{ Form::text('username', '') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::label('email', 'Email Address') }}
    {{ Form::email('email', '') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::label('repeatPassword', 'Repeat password') }}
    {{ Form::password('repeatPassword') }}
    {{ '<br>'}}
    {{ '<br>'}}
    {{ Form::button('Register', array('class' => 'btn', 'id' => 'register', 'type' => 'submit')) }}
    {{ Form::close() }}

</div>

<div class="registered">
    {{ isset($username) ? $username . ' has been registered' : ''; }}
</div>

<div class="pw_error">
    {{ isset($pwError) ? 'Please retype the passwords' : ''; }}
</div>

@stop