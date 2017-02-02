@extends('master')
@section('pageContent')

<table>

{!! Form::open(array('action' => 'SaleController@index')) !!}
    <tr>
        <td>
{!! Form::label('name','Name') !!}<br>
        </td>
        <td>
{!! Form::text('name', 'Enter Your Name') !!}
        </td>
        <td></td><td>{{ $errors->first('name') }}</td>

        </tr><tr><td>
{!! Form::label('mobile') !!}
        </td><td>
{!! Form::number('mobile', 'Enter Your Mobile') !!}
        </td>

<td></td><td>{{ $errors->first() }}</td>

        <tr><td>
{!! Form::label('email', 'Email') !!}
        </td><td>
{!! Form::text('email') !!}
        </td>
    
    <tr>
        <td>
{!! Form::label('password') !!}</td>
        <td>
{!! Form::password('password') !!}</td>
    </tr>
        <tr><td></td><td>

{!! Form::submit() !!}
        </td>
        </tr>
{!! Form::close() !!}

</table>

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

@endsection