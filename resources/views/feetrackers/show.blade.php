@extends('layouts.ftracktemp')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Fee Tracker Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fee Month:</strong>
                {{ $fee_tracker->fee_month}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deadline:</strong>
                {{ $fee_tracker->payment_deadline }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Receipt:</strong>
                {{ $fee_tracker->receipt }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $fee_tracker->payment_status }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('feetrackers.index') }}"> Back</a>
        </div>
    </div>
@endsection