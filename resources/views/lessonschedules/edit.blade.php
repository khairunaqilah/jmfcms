@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Lesson Schedule</h2>
        </div>
       
    </div>
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

<form action="{{ route('lessonschedules.update', $lessonschedule->id) }}" method="POST">
    @csrf
    @method('PUT')
  
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Activity:</strong>
                <input type="text" name="activity" class="form-control" value="{{$lessonschedule->activity}}" readonly>
            </div>
            <br>        
        <br>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="date" class="form-control" value="{{$lessonschedule->date}}" readonly>
                
            </div>
            <br>        
        <br>
        </div>
  
    
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Time From:</strong>
                <input type="text" name="time_from" class="form-control" value="{{$lessonschedule->time_from}}" readonly>
            </div>
            <br>        
        <br>
        </div>
       
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Time To:</strong>
                <input type="text" name="time_to" class="form-control" value="{{$lessonschedule->time_to}}" readonly>
            </div>
            <br>        
        <br>
        </div>
       
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Remarks:</strong>
                <input type="text" name="remarks" class="form-control" value="{{$lessonschedule->remarks}}">
            </div>
            <br>        
        <br>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
            <select class="form-control" name="status" >
                                        <option value="">-- Status --</option>
                                                
                                                    <option value="Scheduled">Scheduled
                                                    <option value="Completed">Completed
                                                    <option value="Postponed">Postponed
                                                </select>
                                            
            </div>
            <br>        
        <br>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Group:</strong>
                <input type="text" name="group_id" class="form-control" value="{{$lessonschedule->group_id}}" readonly>
        </div>
        <br>        
        <br>
    </div>
    
    <br>
    
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('lessonschedules.index') }}"> Back</a>
        </div>
    </div>
   
</form>

@endsection
@endif