
@extends('master')
@section('pageContent')


<div class="roundCorner">
{!! Form::open(array('action' => 'subscriberController@store')) !!}
{!! Form::label('Name') !!}
{!! Form::text('name', 'Your name') !!}

<?php
echo ($errors->first('name', '<li>:message</li>'));
?>
<br>

{!! Form::label('Email') !!}
{!! Form::text('email', 'Your email') !!}
<?php
echo ($errors->first('email', '<li>:message</li>'));
?>
<br>
{!! Form::label('Phone') !!}
{!! Form::text('phone', 'Your phone') !!}
<?php
echo ($errors->first('phone', '<li>:message</li>'));
?>
<br>
{!! Form::label('Credential') !!}
{!! Form::password('Credential') !!}

<?php
echo ($errors->first('Credential', '<li>:message</li>'));
?>

<br>
{!! Form::submit() !!}

<!-- {!! Form::submit() !!} -->

{!! Form::close() !!}
</div>

@endsection