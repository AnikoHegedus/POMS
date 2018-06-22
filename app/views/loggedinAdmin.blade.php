@extends('layout')

@section('content')

@if(isset($loggedin_user))
<h2>Hello, {{ $loggedin_user->username }} !</h2>
@endif

@if(isset($userToEdit))
<h2>Edit user</h2>
<div id="edit-user" class="flex-item">
    {{ Form:: open(array('action' => 'post', 'url' => 'editUser/'.$userToEdit->id)) }}
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', $userToEdit->username) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', $userToEdit->email) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('password', 'Password') }}
    {{ Form::text('password', $userToEdit->password) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('admin', 'Admin') }}
    {{ Form::text('admin', $userToEdit->admin) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::button('Save', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
    {{ Form::close() }}
</div>
@endif

@if(isset($all_users))
<div id="users-table" class="flex-item">
<table>
      <thead>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Admin</th>
        <th>Registered</th>
        <th>Last login</th>
        <th>Edit</th>
      </thead>
      <tbody>
      @foreach($all_users as $user)
        <tr>
          <td class="flex-item">
              {{ $user -> id }}
          </td>
          <td class="flex-item">
              {{ $user -> username }}
          </td>
          <td class="flex-item">
              {{ $user -> email }}
          </td>
          <td class="flex-item">
            {{ ($user -> admin == 1) ? 'admin' : 'user'; }}
          </td>
          <td class="flex-item">
              {{ $user -> registered }}
          </td>
          <td class="flex-item">
              {{ $user -> last_login }}
          </td>
          <td class="flex-item">
            {{ Form:: open(array('action' => 'post', 'url' => 'pickUser/'.$user->id)) }}
            {{ Form::button('Go', array('class' => 'btn', 'id' => 'final', 'type' => 'submit')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endif

@stop