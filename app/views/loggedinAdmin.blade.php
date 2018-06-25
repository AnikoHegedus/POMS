@extends('layout')

@section('content')


@if(isset($userToEdit))
<h2>Edit user</h2>
<div id="edit-user" class="flex-item">
    {{ Form:: open(array('action' => 'post', 'url' => 'edit')) }}
    {{ Form::hidden('id', $userToEdit->id) }}
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', $userToEdit->username) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', $userToEdit->email) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('password', 'Password') }}
    {{ Form::text('password', $userToEdit->password) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('admin', 'Admin') }}
    {{ Form::select('admin', ['0', '1']) }} {{ '<br>'}} {{ '<br>'}}
    {{ Form::label('banned', 'Banned') }}
    {{ Form::select('banned', ['0', '1']) }} {{ '<br>'}} {{ '<br>'}}
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
        <th>Banned</th>
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
            {{ ($user -> banned == 1) ? 'true' : 'false'; }}
          </td>
          <td class="flex-item">
              {{ $user -> registered }}
          </td>
          <td class="flex-item">
              {{ $user -> last_login }}
          </td>
          <td class="flex-item">
            {{ Form:: open(array('action' => 'post', 'url' => 'pick')) }}
            {{ Form::hidden('id', $user->id) }}
            {{ Form::button('Edit', array('type' => 'submit')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endif

@stop