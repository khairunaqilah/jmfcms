@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Fee Tracker</h2>
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
  @foreach($feetrackers as $f)
    <form action="{{ route('fee_trackers.update',$f->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Fee Month:</strong>
                <input type="text" name="fee_month" class="form-control" value="{{$f->fee_month}}" readonly>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Receipt:</strong>
                <input type="file" class="form-control" name="receipt" value="{{$f->receipt}}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <!--buat if authentication utk admin shj boleh edit status payment!-->
                <strong>Status:</strong>
                <input type="text" class="form-control" name="payment_status" value="{{$f->payment_status}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('fee_trackers.index') }}"> Back</a>
   
    </form>
    @endforeach
@endsection