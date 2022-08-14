@if(Auth::User()->role=='admin')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>JMFCMS</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('registration/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('registration/vendor/font-awesome-4.7/css/font-awesome.min.css')}}"rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('registration/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('registration/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('registration/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input id="name" type="text" class="input--style-4 form-control @error('name') is-invalid @enderror"   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">E-mail Address</label>
                                    <input id="email" class="input--style-4 form-control @error('email') is-invalid @enderror" type="email" name="email"value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <div class="input-group-icon">
                                        <input  id="password" class="input--style-4  form-control @error('password') is-invalid @enderror" type="password" name="password"required autocomplete="new-password">
                                        
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Role</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Teacher
                                            <input id="teacher" type="radio" class="form-control @error('role') is-invalid @enderror" name="role" value="teacher">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Guardian
                                            <input id="guardian" type="radio" class="form-control @error('role') is-invalid @enderror" name="role" value="guardian" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Admin
                                            <input id="admin" type="radio" class="form-control @error('role') is-invalid @enderror" name="role" value="admin" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input id="password-confirm" class="input--style-4 form-control " type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input id="phone_number"  class= "input--style-4 form-control @error('phone_number') is-invalid @enderror" name="phone_number" type="text" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                </div>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('registration/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('registration/vendor/select2/select2.min.js')}}"></script>
    <script src="{{ asset('registration/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{ asset('registration/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{ asset('registration/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
@endif