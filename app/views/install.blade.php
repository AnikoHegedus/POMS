@extends('layout') @section('content')
<div id="wrapper">
<div id="first-install">
    <h2>First page of istalling</h2>

    <p>This demo site was prepared by Aniko Hegedus as an admission exercise for a job interview.</p>
    <p>The project was built in Laravel and the following technologies were used:</p>
    <ul>
        <li>Laravel - PHP</li>
        <li>JavaScript</li>
        <li>jQuery</li>
        <li>SQL</li>
        <li>HTML</li>
        <li>CSS</li>
        <li>Git</li>
    </ul>
    <p>There are two steps of installing of a database, now please proceed to the next step.</p>
</div>

<div id="second-install">
    <h2>Second page of istalling</h2>
        <p>Please register your database</p>
        <div id="login" class="flexbox-container">
    
        {{ Form:: open(array('action' => 'post', 'url' => 'createTable')) }}
        {{ Form::label('email', 'Email Address') }}
        {{ Form::email('email', '') }}
        {{ '<br>'}}
        {{ '<br>'}}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
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
        {{ Form::label('database', 'Name of database') }}
        {{ Form::text('database') }}
        {{ '<br>'}}
        {{ '<br>'}}
        {{ Form::button('Save', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
        {{ Form::close() }}
        <br>
    </div>
</div>

<div class="pw_error">
    {{ isset($pwError) ? 'Please retype the passwords' : ''; }}
</div>

<div class="flexbox-container">
<button class="previous-btn btn">Previous page</button>
<button class="next-btn btn">Next page</button>
</div>
</div>
@stop