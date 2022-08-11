@if(Auth::User()->role=='teacher')
@extends('layouts.cikgu')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lesson Schedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lessonschedules.create') }}"> Add New Lesson Schedule</a>
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
            <th>Activity</th>
            <th>Date</th>
            <th>Time From</th>
            <th>Time To</th>
            <th>Remarks</th>
            <th>Status</th>
            <th>Group</th>
            <th>Teacher's Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($lessonschedule as $sched)
        <tr>
            <td>{{ $sched->id }}</td>
            <td>{{ $sched->activity }}</td>
            <td>{{ $sched->date }}</td>
            <td>{{ $sched->time_from }}</td>
            <td>{{ $sched->time_to }}</td>
            <td>{{ $sched->remarks }}</td>
            <td>{{ $sched->status }}</td>
            <td>{{ $sched->group_id}}</td>
            <td>{{ auth()->user()->name }}</td>
           
            
            <td>
                <form action="{{ route('lessonschedules.destroy',$sched->id) }}" method="POST">
   
                     <a class="btn btn-info" href="{{ route('lessonschedules.show',$sched->id) }}">Show</a> 
    
                    <a class="btn btn-primary" href="{{ route('lessonschedules.edit',$sched->id) }}">Edit</a>
   
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
                                
                                <h2>Lesson Schedules</h2>

                                <table>
                                  <tr>
                                    <th>No</th>
                                    <th>Activity</th>
                                    <th>Date</th>
                                    <th>Time From</th>
                                    <th>Time To</th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th>Group</th>
                                    <th>Teacher's ID</th>
                            
                                  </tr>
                                  @foreach ($lessonschedule as $sched)
                                <tr>
                                    <td>{{ $sched->id }}</td>
                                    <td>{{ $sched->activity }}</td>
                                    <td>{{ $sched->date }}</td>
                                    <td>{{ $sched->time_from }}</td>
                                    <td>{{ $sched->time_to }}</td>
                                    <td>{{ $sched->remarks }}</td>
                                    <td>{{ $sched->status }}</td>
                                    <td>{{ $sched->group_id}}</td>
                                    <td>{{ $sched->teacher_id }}</td>
                                
                                    
                                    
                                 
                                 
   
   

   

   

                                  </tr>
                                  @endforeach
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        
@endif