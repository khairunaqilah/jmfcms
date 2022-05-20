@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Fee Trackers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('feetrackers.create') }}"> Add New Fee Trackers</a>
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
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($subject as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->fee_month}}</td>
            <td>{{ $s->payment_deadline }}</td>
            <td>{{ $s->receipt }}</td>
            <td>{{ $s->payment_status }}</td>
            <td>
                <form action="{{ route('feetrackers.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('feetrackers.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('feetrackers.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection