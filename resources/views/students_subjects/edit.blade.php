@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Assign Student To Group</h2>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  @foreach($students_subjects as $stusub)
    <form action="{{ route('students_subjects.update',$stusub->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <select class="form-control" name="group_id">
                <option value="">-- Choose Group --</option>
                @foreach ($groups as $id =>$name)
                    <option
                    value="{{$id}}" {{ (isset($student_subject['group_id']) && $student_subject['group_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('students_subjects.index') }}"> Back</a>
   
    </form>
    @endforeach
@endsection
@elseif(Auth::User()->role=='guardian')
@extends('layouts.ftracktemp')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Change Student's Subject</h2>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($students_subjects as $stusub)
    <form action="{{ route('students_subjects.update',$stusub->id) }}" method="POST" >
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
        <select class="form-control" name="subject_id">
                <option value="">-- Choose Subject --</option>
                @foreach ($subjects as $id =>$name)
                    <option
                    value="{{$id}}" {{ (isset($student_subject['subject_id']) && $student_subject['subject_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('students_subjects.index') }}"> Back</a>
   
    </form>
    @endforeach
@endif