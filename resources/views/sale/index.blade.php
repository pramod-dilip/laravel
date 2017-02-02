@extends('master')
@section('pageContent')


<a href="{{ route('sale.create') }}">Create</a>


<h1>All Managers</h1>

<table border="1 black solid" >


@foreach($data as $datas)

<tr>

<td>
{{ $datas->id }}
</td>

<td>
{{ $datas->Name }}
</td>

<td>
{{ $datas->Mobile }}
</td>

<td>
{{ $datas->email }}
</td>

<td>
	{{ Form::open(array('url' => 'sale/' . $datas->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

 </td>

<td>
	<a href="{{ URL::to('sale/'.$datas->id) }}">Show</a>
</td>

<td>
	<a href="{{ Url::to('sale/'.$datas->id.'/edit') }}">Edit</a>
</td>


<td><a class="btn btn-info" href="{{ route('sale.show', $datas->id) }}">Show</a></td>


</tr>
@endforeach

</table>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>

        </div>
    @endif

        @if ($me = Session::get('pramod'))
        <div class="alert alert-success">
            <p>{{ $me }}</p>
            
        </div>
    @endif

@if(Auth::check())
{{ Auth::user()->id }}
@endif

@endsection