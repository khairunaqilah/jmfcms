@extends('layouts.cikgu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Group Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Group Name:</strong>
                {{ $group->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Subject:</strong>
                {{ $group->subjects->name }}
            </div>
        </div>
       
        
        
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Student List</a>
                <a class="btn btn-primary" href="{{ route('groups.index') }}"> Back</a>
        </div>
    </div>
@endsection