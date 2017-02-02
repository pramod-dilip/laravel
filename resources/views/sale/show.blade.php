@extends('master')
@section('pageContent')



<table border="1 solid black">

<tr>

<td>
{{ $texts->id }}
</td>

<td>
{{ $texts->Name }}
</td>

<td>
{{ $texts->Mobile }}
</td>

<td>
{{ $texts->email }}
</td>

</tr>

</table>





@endsection

