@extends('layouts.default')
@section('content')

   <div class="d-flex bd-highlight navbar navbar-expand-lg mb-5 text-white">
     <div class="p-2 flex-grow-1 bd-highlight"></div>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">ADD STUDENT</button>
   </div>

   <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <form action="/store" method="POST">
              @csrf

              <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                 <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" required>
               </div>
               <div class="mb-3">
                  <label for="program" class="form-label">Student Program</label>
                  <select name="program" id="program" class="form-select">
                    @foreach ($programsArr as $program)
                      <option value="{{ $program['id'] }}">{{ $program['name'] }}</option>
                    @endforeach
                  </select>
               </div>

               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Add Student</button>
               </div>
           </form>
         </div>

       </div>
     </div>
   </div>
   

   <table class="table mb-5">
     <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">STUDENT #</th>
         <th scope="col">NAME</th>
         <th scope="col">PROGRAM</th>
         <th scope="col">OPTIONS</th>
       </tr>
     </thead>
     <tbody>

      @foreach ($studentsArr as $stud)
            <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $stud['student_number'] }}</td>
            <td>{{ $stud['name'] }}</td>
            <td>{{ $stud['program']['acronym'] }}</td>
            <td>
               <a href="/edit/{{ $stud['student_number'] }}"><button type="button" class="btn btn-secondary">EDIT</button></a>
               <a onclick="return confirm('Are you sure this student data?')" href="/delete/{{ $stud['student_number'] }}"><button type="button" class="btn btn-danger">DELETE</button></a>
            </td>
          </tr>
      @endforeach
           
      </tbody>
   </table>


   <table class="table">
     <thead>
       <tr>
         <th scope="col">STUDENT #</th>
         <th scope="col">NAME</th>
         <th scope="col">COLLEGE</th>
         <th scope="col">PROGRAM</th>
         <th scope="col">COURSE CODE</th>
         <th scope="col">COURSE NAME</th>
         <th scope="col">DATE ENROLLED</th>
       </tr>
     </thead>
     <tbody>

      @foreach ($students as $key => $student)
         @for ($i = 0; $i < count($student['program']['courses']); $i++)
            <tr>
            <td>{{ $student['student_number'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['program']['college']['acronym'] }}</td>
            <td>{{ $student['program']['acronym'] }}</td>
            <td>{{ $student['program']['courses'][$i]['code'] }}</td>
            <td>{{ $student['program']['courses'][$i]['name'] }}</td>
            <td>{{ $student['updated_at'] }}</td>
          </tr>
         @endfor

         
      @endforeach
           
      </tbody>
   </table>
   
@stop
