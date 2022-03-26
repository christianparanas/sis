@extends('layouts.default')
@section('content')
   


   @foreach ($programs as $program)
      @if (count($program['courses']))

         <table class="table mb-5">
           <h4>{{ $program['name'] }} ({{ $program['acronym']}})</h4>
           <tbody>
            @foreach ($program['courses'] as $course)
             <tr>
               <th scope="row"></th>
               <td>{{ $course['code'] }}</td>
               <td>{{ $course['name'] }}</td>
             </tr>
             @endforeach
           </tbody>
         </table>

       @endif
   @endforeach
@stop
