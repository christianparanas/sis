@extends('layouts.default')
@section('content')
   

<h3>Edit Student Information</h3>
<form action="/update" method="POST">
	@csrf

  <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Student Name</label>
     <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" value="{{ $student['name'] }}" required>
     <input type="text" name="student_number" style="display: none;" value={{ $student['student_number'] }}>
   </div>
   <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Student Program</label>
      <select name="program" class="form-select" aria-label="Default select example">
        @foreach ($programsArr as $program)
        	@if ($program['id'] == $student['program_id']) 
        		<option selected value={{ $program['id'] }}>{{ $program['name'] }}</option>
        	@endif
          <option value="{{ $program['id'] }}">{{ $program['name'] }}</option>
        @endforeach
      </select>
   </div>
   <a href="/"><button type="button" class="btn btn-secondary">BACK</button></a>
   <button type="submit" class="btn btn-primary">UPDATE</button>
</form>

@stop