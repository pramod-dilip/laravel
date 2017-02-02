@extends('master')
@section('pageContent')



<div class="roundCorner">
{!! Form::open(array('action' => 'subscriberController@update', 'url' => 'editMyRecord', 'method' => 'post')) !!}
{!! Form::label('Id') !!}
{!! Form::text('id', 'Your Id') !!}



<br>
{!! Form::submit() !!}

<!-- {!! Form::submit() !!} -->

{!! Form::close() !!}
</div>

@endsection