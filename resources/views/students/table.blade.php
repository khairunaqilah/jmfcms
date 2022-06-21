@if(Auth::User()->role=='guardian')

<section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2>Students</h2>

                                <table>
                                  <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>NRIC</th>
                                    <th>School</th> <!-- not sure what would be suitable-->
                                    <th>Parent's Name</th>
                                    <th>Action</th>
                            
                                  </tr>
                                  @foreach ($student as $st) <!--variable pegang object!-->
                                  <tr>
                                  <td>{{ $st->id }}</td>
                                 <td>{{ $st->name}}</td>
                                 <td>{{ $st->nric }}</td>
                                 <td>{{ $st->school }}</td>
                                 <td>{{ auth()->user()->name }}</td>
                                 <td> <form action="{{ route('students.destroy',$st->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('students.show',$st->id) }}">Show</a>

   <a class="btn btn-primary" href="{{ route('students.edit',$st->id) }}">Edit</a>

   
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