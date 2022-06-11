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
                                  @foreach ($student as $st) <!--variable pegang object!-->
                                  <tr>
                                  <td>{{ $f->id }}</td>
                                 <td>{{ $f->fee_month}}</td>
                                 <td>{{ $f->payment_deadline }}</td>
                                 <td>{{ $f->receipt }}</td>
                                 <td>{{ $f->payment_status }}</td>
                                 <td> <form action="{{ route('fee_trackers.destroy',$f->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('fee_trackers.show',$f->id) }}">Show</a>

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