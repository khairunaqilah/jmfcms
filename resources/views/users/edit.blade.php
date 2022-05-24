@if(Auth::User()->role=='teacher')
@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Teacher</h2>
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
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email :</strong>
                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Email"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" class="form-control" name="password" value="{{ Auth::user()->password }}" placeholder="password"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" class="form-control" name="phone_number" value="{{ Auth::user()->phone_number}}" placeholder="phone number"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qualification:</strong>
                    @if($teacher->count() > 1)
                        @foreach ($teacher as $teacher)
                            <input type="text" class="form-control" name="qualification" value="{{ $teacher->qualification}}" placeholder="Qualification"></input>
                        @endforeach
                    @else
                        <input type="text" class="form-control" name="qualification" value="" placeholder="Qualification"></input>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection
@elseif(Auth::User()->role=='admin')
extends('layouts.template')

@elseif(Auth::User()->role=='guardian')
extends('layouts.guardiantemp')

@endif