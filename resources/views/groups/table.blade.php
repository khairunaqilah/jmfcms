@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Group</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('groups.create') }}"> Add New Group</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Teacher's Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($group as $g)
        <tr>
            <td>{{ $g->id }}</td>
            <td>{{ $g->name }}</td>
            <td>{{ $g->subjects->name}}</td>
            <td>{{ auth()->user()->name }}</td>
           
            
            <td>
                <form action="{{ route('groups.destroy',$g->id) }}" method="POST">
   
                     <a class="btn btn-info" href="{{ route('groups.show',$g->id) }}">Show</a> 
    
                    <a class="btn btn-primary" href="{{ route('groups.edit',$g->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection
@elseif(Auth::User()->role=='guardian')
<section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2>Groups Available</h2>
                                <a class="btn btn-success" href="{{route('users.index')}}"> Teachers</a>

                                <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Teacher's ID</th>
            
        </tr>
        @foreach ($group as $g)
        <tr>
            <td>{{ $g->id }}</td>
            <td>{{ $g->name }}</td>
            <td>{{ $g->subjects->name}}</td>
            <td>{{ $g->teacher_id }}</td>
           
            
            
        </tr>
        @endforeach
    </table>
@endif