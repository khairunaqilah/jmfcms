@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student Timetable</h2>
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
            <th>Teacher Id</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Qualification</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->user_id}}</td>
            
           
            
            <td>
                <form action="{{ route('teachers.destroy',$t->id) }}" method="POST">
   
                   
                   
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection