@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Fee Tracker</h2>
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
  
    <form action="{{ route('feetrackers.update',$fee_tracker->id) }}" method="POST">
        @csrf
        @method('PUT')
   
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
                <a class="btn btn-primary" href="{{ route('feetrackers.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection