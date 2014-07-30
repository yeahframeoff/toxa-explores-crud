@extends('layout.main')

@section('content')
    <?php
    Form::macro('openRowWrapper', function($class) {
        return '<div class="' . $class .'">';
    });

    Form::macro('closeRowWrapper', function() {
        return '</div>';
    });

    Form::macro('bsText', function($name, $title)
    {
        return
            Form::openRowWrapper('form-group') .
                Form::label($name, $title, ['class' => 'col-xs-2 control-label']) .
                Form::openRowWrapper('col-sm-4') .
                    Form::text($name, Input::old($name),['placeholder' => "$title...", 'class' => 'form-control']) .
                Form::closeRowWrapper() .
            Form::closeRowWrapper();
    });

    Form::macro('bsPassword', function($name, $title)
    {
        return
            Form::openRowWrapper('form-group') .
                Form::label($name, $title, ['class' => 'col-xs-2 control-label']) .
                Form::openRowWrapper('col-sm-4') .
                    Form::password($name, ['placeholder' => "$title...", 'class' => 'form-control'])  .
                Form::closeRowWrapper() .
            Form::closeRowWrapper();
    });

    ?>

    @if (isset($user))
    {{ Form::model($user, ['route' => 'users.store', 'class' => 'form-horizontal', 'role' => 'form']) }}
    @else
    {{ Form::open(['route' => 'users.store', 'class' => 'form-horizontal', 'role' => 'form']) }}
    @endif
        {{ Form::bsText('login', 'Login') }}
        {{ Form::bsPassword('password', 'Password') }}
        {{ Form::bsText('first_name', 'First Name') }}
        {{ Form::bsText('last_name', 'Last Name') }}

        {{ Form::submit('Create User', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@stop