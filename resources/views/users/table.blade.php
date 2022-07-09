@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Users</h2>
               
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
            <th>Role</th>
            <th>Created At</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name}}</td>
            <td>{{ $u->role }}</td>
            <td>{{ $u->created_at }}</td>
            <td>
                <form action="{{ route('users.destroy',$u->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$u->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$u->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
           
        </tr>
        @endforeach
    </table>
    
@endsection