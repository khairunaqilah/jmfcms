@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student Timetable</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('timetables.create') }}"> Add New Teacher?</a>
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
        @foreach ($table as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->users->id }}</td>
            <td>{{ $t->users->name }} </td>
            <td>{{ $t->users->email }} <br>
            <td>{{ $t->users->phone_number }}</td>
            <td>{{ $t->qualification }}</td>
            
            <td>
                <form action="{{ route('teachers.destroy',$t->id) }}" method="POST">
   
                    <!-- <a class="btn btn-info" href="{{ route('timetables.show',$t->id) }}">Show</a> -->
    
                    <a class="btn btn-primary" href="{{ route('teachers.edit',$t->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection