@if(Auth::User()->role=='admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Fee Trackers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fee_trackers.create') }}"> Add New Fee Trackers</a>
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
            <th>Fee Month</th>
            <th>Deadline</th>
            <th>Receipt</th>
            <th>Status</th>
            <th>Guardian's ID</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($feetracker as $f) <!--variable pegang object!-->
        <tr>
            <td>{{ $f->id }}</td>
            <td>{{ $f->fee_month}}</td>
            <td>{{ $f->payment_deadline }}</td>
            <td>{{ $f->receipt }}</td>
            <td>{{ $f->payment_status }}</td>
            <td>{{ $f->guardian_id }}</td>
            <td>
                <form action="{{ route('fee_trackers.destroy',$f->id) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('fee_trackers.edit',$f->id) }}">Edit</a>
   
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
                                
                                <h2>Fee Tracker</h2>

                                <table>
                                  <tr>
                                  <th>No</th>
                                  <th>Fee Month</th>
                                    <th>Deadline</th>
                                    <th>Receipt</th> <!-- not sure what would be suitable-->
                                    <th>Status</th>
                                    
                                    <th>Action</th>
                            
                                  </tr>
                                  @foreach ($feetracker as $f) <!--variable pegang object!-->
                                  <tr>
                                  <td>{{ $f->id }}</td>
                                 <td>{{ $f->fee_month}}</td>
                                 <td>{{ $f->payment_deadline }}</td>
                                 <td>{{ $f->receipt }}</td>
                                 <td>{{ $f->payment_status }}</td>
                                 
                                 <td> <form action="{{ route('fee_trackers.destroy',$f->id) }}" method="POST">
   
   

   <a class="btn btn-primary" href="{{ route('fee_trackers.edit',$f->id) }}">Edit</a>

   
</form>
</td>
                                  </tr>
                                  @endforeach
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        

@endif