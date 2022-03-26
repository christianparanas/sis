@extends('layouts.default')
@section('content')
   

	@foreach ($colleges as $college)
    <table class="table mb-5">
			<h4>{{ $college['name'] }} ({{ $college['acronym']}})</h4>
		  <tbody>
		  	@foreach ($college['programs'] as $program)
		    <tr>
		      <th scope="row"></th>
		      <td>{{ $program['acronym'] }}</td>
		      <td>{{ $program['name'] }}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	@endforeach

	


@stop
