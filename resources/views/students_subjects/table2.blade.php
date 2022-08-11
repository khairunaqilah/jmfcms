
@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Students Registered</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students_subjects.index') }}"> Unassigned Students</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
    <tr>
                                    <th>Student </th>
                                    <th>Student's DOB </th>
                                    <th>Student ID </th>
                                    <th>Subject</th>
                                    <th>Group</th>
                                   
                                    
                                    <th>Action</th>
                            
                                  </tr>
                                  @foreach ($student_subject as $stusub) <!--variable pegang object!-->
                                  <tr>
                                  <td>{{ $stusub->students->name}}</td>
                                  <td>{{ $stusub->students->dob}}</td>
                                  <td>{{ $stusub->student_id}}</td>
                                 <td>{{ $stusub->subjects->name}}</td>
                                 <td>{{ $stusub->group_id }}</td>
                                 
                                 
                                 <td> <form action="{{ route('students_subjects.destroy',$stusub->id) }}" method="POST">
   
   

   <a class="btn btn-primary" href="{{ route('students_subjects.edit',$stusub->id) }}">Edit</a>
    @csrf
    @method('DELETE')
      
     <button type="submit" class="btn btn-danger">Delete</button>

   
</form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection
@elseif(Auth::User()->role=='admin')
@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Students Registered</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students_subjects.create') }}"> Add New Group</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
    <tr>
                                    <th>Student </th>
                                    <th>Student's DOB </th>
                                    <th>Student ID </th>
                                    <th>Subject</th>
                                    <th>Group</th>
                                   
                                    
                                    <th>Action</th>
                            
                                  </tr>
                                  @foreach ($student_subject as $stusub) <!--variable pegang object!-->
                                  <tr>
                                  <td>{{ $stusub->students->name}}</td>
                                  <td>{{ $stusub->students->dob}}</td>
                                  <td>{{ $stusub->student_id}}</td>
                                 <td>{{ $stusub->subjects->name}}</td>
                                 <td>{{ $stusub->group_id }}</td>
                                 
                                 
                                 <td> <form action="{{ route('students_subjects.destroy',$stusub->id) }}" method="POST">
   
  

   <a class="btn btn-primary" href="{{ route('students_subjects.edit',$stusub->id) }}">Edit</a>
    @csrf
    @method('DELETE')
      
     <button type="submit" class="btn btn-danger">Delete</button>

   
</form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection
        

@endif