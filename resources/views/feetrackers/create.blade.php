@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Fee Tracker Row</h2>
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
   
<form action="{{ route('fee_trackers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Fee Month:</strong>
                <input type="text" name="fee_month" class="form-control" placeholder="Fee Month">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Deadline:</strong>
                <input type="text" class="form-control" name="payment_deadline" placeholder="Payment Deadline">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Assign To:</strong>
                @foreach ($guardians as $user)
                <input type="checkbox" class="form-control" name="userid[]" value="{{ $user->id}}" class="selectgroup-input @error('userid[]') is-invalid @enderror" >
                @error('userid[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{message}}</strong>
                    </span>
                    @enderror
                    <span class="selectgroup-button">{{$user->name}}</span>
            </div>
            @endforeach
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Receipt:</strong>
                <input type="file" class="form-control" name="receipt" placeholder="Receipt">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" class="form-control" name="payment_status" placeholder="Payment Status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('fee_trackers.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection