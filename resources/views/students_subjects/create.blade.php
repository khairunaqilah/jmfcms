@if(Auth::User()->role=='guardian')

<section class="section-padding" id="booking">
                <div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Register Subjects For Your Child</h2>
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
<form action="{{ route('students_subjects.store') }}" method="POST">
    @csrf
  
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
            <select class="form-control" name="student_id">
                <option value="">-- Choose Student --</option>
                @foreach ($students as $id =>$name)
                    <option
                    value="{{$id}}" {{ (isset($student_subject['student_id']) && $student_subject['student_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
            <br>        
        <br>
        </div>
        
   
        <div class="col-xs-6 col-sm-6 col-md-6">
            <select class="form-control" name="subject_id">
                <option value="">-- Choose Subject --</option>
                @foreach ($subjects as $id =>$name)
                    <option
                    value="{{$id}}" {{ (isset($student_subject['subject_id']) && $student_subject['subject_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>
    </div>
    
    <br>
    
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
   
</form> 
</section>
        
@endif