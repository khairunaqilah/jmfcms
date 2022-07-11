@if(Auth::User()->role=='guardian')

<section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2>Students</h2>

                                <table>
                                  <tr>
                                    <th>Student </th>
                                    <th>Student ID </th>
                                    <th>Subject</th>
                                    <th>Group</th>
                                   
                                    
                                    <th>Action</th>
                            
                                  </tr>
                                  @foreach ($student_subject as $stusub) <!--variable pegang object!-->
                                  <tr>
                                  <td>{{ $stusub->students->name}}</td>
                                  <td>{{ $stusub->student_id}}</td>
                                 <td>{{ $stusub->subjects->name}}</td>
                                 <td>{{ $stusub->group_id }}</td>
                                 
                                 
                                 <td> <form action="{{ route('students_subjects.destroy',$stusub->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('students_subjects.show',$stusub->id) }}">Show</a>

   <a class="btn btn-primary" href="{{ route('students_subjects.edit',$stusub->id) }}">Edit</a>

   
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