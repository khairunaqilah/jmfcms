<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Student Profile</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap.min.css') }}"rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.theme.default.min.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/profile.css') }}" rel="stylesheet">
        <link href="{{ asset('jmftemp/css/templatemo-medic-care.css') }}" rel="stylesheet">
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>
    
    <body id="top">
    
        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        Junior Music Festival
                        <strong class="d-block">Classes Management System</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="patientList.html">Student List</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index.html">
                              Junior Music Festival
                                <strong class="d-block">Classes Management System</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Testimonials</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="addStudent.html">Registration</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="patientList.html">Students</a></li>
              <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('jmftemp/https://media.istockphoto.com/vectors/pretty-girl-avatar-flat-cartoon-style-vector-illustration-vector-id1140166223?k=20&m=1140166223&s=170667a&w=0&h=wgeq7igZ8rP0WrzCBGJL70dLF9bPri1nrMXNerQ6kOA=') }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $student->name }}</h4>
                      <p class="text-secondary mb-1">{{ $student->id }}</p>
                      <p class="text-muted font-size-sm">{{ $age }}</p>
                      <button style="background-color:blue;"class="btn btn-primary"href="{{route('subjects.index')}}" >Fee Tracker</button>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">IC Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $student->nric }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">School</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $student->school }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent's Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Hajar Binti Harun
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent's Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     hajarharun@gmail.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Parent's Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     0124435672
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Student's Race</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $student->race }}
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">D.O.B</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $student->dob }}
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Home Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    12, Jalan Desa, Kampung Baru
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Student's Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $student->email }}
                    </div>
                  </div>
                  <hr>
                  
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="updateStudent.html">Update</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Program</i>&nbsp; Teachers</h6>
                     
                      <small>Keyboard</small>
                       
                        <p class="text-muted font-size-sm">Teacher Nadine</p>
                        <small>Music Theory </small>
                       
                         <p class="text-muted font-size-sm">Teacher Nadine</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
    <script>
     
    </script>