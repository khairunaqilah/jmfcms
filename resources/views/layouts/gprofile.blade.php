@if(Auth::User()->role=='guardian')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Guardian Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.carousel.min.css') }}"rel="stylesheet">

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
                    <a class="navbar-brand mx-auto d-lg-none" href="{{route('home')}}">
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
                                <a class="nav-link" href="{{route('fee_trackers.index',['fee_trackers' => auth()->user()->id])}}">Fee Tracker</a>
                            </li>

                            <li class="nav-item">
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
              
              
                Logout
              
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
             </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
@endif