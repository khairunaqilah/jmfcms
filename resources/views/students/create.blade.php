<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Student Registration</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.theme.default.min.css') }}" rel="stylesheet">

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
                                <a class="nav-link" href="{{route('home')}}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('subjects.index')}}">Subjects</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="{{route('students.index',['students' => auth()->user()->id])}}">Students</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="{{route('home')}}">
                               Junior Music Festival
                                <strong class="d-block">Classes Management System</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.show', ['user' => auth()->user()->id])}}">Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('fee_trackers.index',['guardian_id' => auth()->user()->id])}}">Fee Tracker</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
             </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            

            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Student Registration </h2>
                            
                                <form action="{{ route('students.store') }}" method="POST">
                                        @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="name"  class="form-control" placeholder="Student's name" required>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                        
                                            <input type="date" name="dob"  class="form-control"   placeholder="yyyy-mm-dd"  required>
                                            <script>document.getElementById("date").value</script>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                        <input type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value=""  class="form-control"placeholder="Student's Email" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="string" name="nric"  pattern="[0-9]+" required size="12" class="form-control" placeholder="IC Number" required>
                                        </div>
                                        
                                        <div class="col-lg-6 col-12">
                                       
                                            
                                        </div>

                                        
                                        
                                        <div class="col-lg-6 col-12">
                                            <p>Gender</p>
                                            <input  type="radio"  name="gender" value="male">
                                            <label for="male">Male</label><br>
                                            <input type="radio"  name="gender" value="female">
                                            <label for="female">Female</label><br>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <p>Race</p>
                                            <input  type="radio"  name="race" value="malay">
                                            <label for="malay">Malay</label><br>
                                            <input   type="radio"  name="race" value="chinese">
                                            <label for="chinese">Chinese</label><br>
                                            <input   type="radio"  name="race" value="indian">
                                            <label for="indian">Indian</label><br>
                                            <input   type="radio"  name="race" value="others">
                                            <label for="others">Others</label><br>
                                        </div>
                                      

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control" id="submit-button">Add Student</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                        <h5 class="mb-lg-4 mb-3">Opening Hours</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                Sunday : Closed
                            </li>

                            <li class="list-group-item d-flex">
                                Monday, Tuesday - Firday
                                <span>8:00 AM - 3:30 PM</span>
                            </li>

                            <li class="list-group-item d-flex">
                                Saturday
                                <span>10:30 AM - 5:30 PM</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3">Our Clinic</h5>

                        <p><a href="mailto:hello@company.co">hello@company.co</a><p>

                        <p>123 Digital Art Street, San Diego, CA 92123</p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-3">Socials</h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto mt-4 mt-lg-0">
                        <p class="copyright-text">Copyright © Medic Care 2021 
                        <br><br>Design: <a href="https://templatemo.com" target="_parent">TemplateMo</a></p>
                    </div>

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('jmftemp/js/jquery.min.js') }}"></script>
        <script src="{{ asset('jmftemp/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('jmftemp/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('jmftemp/js/scrollspy.min.js') }}"></script>
        <script src="{{ asset('jmftemp/js/custom.js') }}"></script>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </body>
</html>