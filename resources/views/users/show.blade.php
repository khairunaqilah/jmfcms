@if(Auth::User()->role=='teacher')
@extends('layouts.template')
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
@extends('layouts.gtemp')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Guardian Details</h2>
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
                <strong>Address:</strong>
                @if($guardian->count() >= 1)
                    @foreach ($guardian as $guardian)
                        {{ $guardian->address }}
                    @endforeach
                @endif
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"> Edit</a>
        </div>
    </div>
    @endsection

@elseif(Auth::User()->role=='admin')
extends('layouts.template')
@endif