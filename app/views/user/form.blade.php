@extends('main_layout')

@section('content')
    <?php
    Form::macro('openRowWrapper', function() {
        return '<div class="row">';
    });

    Form::macro('closeRowWrapper', function() {
        return '</div>';
    })
    ?>

    {{ Form::model($user, ['route' => 'users.store']) }}
        {{ Form::openRowWrapper() }}
            {{ Form::label('login', 'Login') }}
            {{ Form::text('login') }}
        {{ Form::closeRowWrapper() }}
        {{ Form::openRowWrapper() }}
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        {{ Form::closeRowWrapper() }}
        {{ Form::openRowWrapper() }}
            {{ Form::label('first_name', 'First Name') }}
            {{ Form::text('first_name') }}
        {{ Form::closeRowWrapper() }}
        {{ Form::openRowWrapper() }}
            {{ Form::label('last_name', 'Last Name') }}
            {{ Form::text('last_name') }}
        {{ Form::closeRowWrapper() }}
    {{ Form::close() }}
@stop