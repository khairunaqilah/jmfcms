@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Teacher Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                {{ $user->phone_number }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qualification:</strong>
                @if($teacher->count() >= 1)
                    @foreach ($teacher as $teacher)
                        {{ $teacher->qualification }}
                    @endforeach
                @endif
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}"> Back</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"> Edit</a>
        </div>
    </div>
    @endsection


@elseif(Auth::User()->role=='guardian')
@include('layouts.gprofile')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Guardian's Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://media.istockphoto.com/vectors/pretty-girl-avatar-flat-cartoon-style-vector-illustration-vector-id1140166223?k=20&m=1140166223&s=170667a&w=0&h=wgeq7igZ8rP0WrzCBGJL70dLF9bPri1nrMXNerQ6kOA=" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user->name }}</h4>
                      <p class="text-secondary mb-1"> {{ $user->email }}</p>
                      <p class="text-muted font-size-sm">{{ $user->phone_number }}</p>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Home Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      @if($guardian->count() >= 1)
                      @foreach ($guardian as $guardian)
                          {{ $guardian->address }}
                      @endforeach
                  @endif
                    </div>
                  </div>
               
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="{{ route('users.edit',$user->id) }}">Edit</a>
                      <a class="btn btn-info "  href="{{ route('home') }}">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <script>
     
    </script>
    

@elseif(Auth::User()->role=='admin')
@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Admin Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                {{ $user->phone_number }}
            </div>
        </div>
        
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}"> Back</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"> Edit</a>
        </div>
</div>
</div>
 @endsection   
@endif