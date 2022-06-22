@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Group</h2>
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
   
<form action="{{ route('groups.update', $group->id) }}" method="POST">
    @csrf
    @method('PUT')
  
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Group Name:</strong>
                
                <input type="text" name="name" class="form-control" placeholder="name">
                
            </div>
            <br>        
        <br>
        </div>
        
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <select class="form-control" name="subject_id">
                <option value="">-- Choose Subject --</option>
                @foreach ($subjects as $id =>$name)
                    <option
                    value="{{$id}}" {{ (isset($group['subject_id']) && $group['subject_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>
    </div>
    
    <br>
    
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('groups.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection
@endif