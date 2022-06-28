<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>JUNIOR MUSIC FESTIVAL</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.carousel.min.css')}}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/owl.theme.default.min.css')}}" rel="stylesheet">

        <link href="{{ asset('jmftemp/css/templatemo-medic-care.css')}}" rel="stylesheet">
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </head>
    
    <body id="top">
    
        <main>

            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="{{ url('/') }}">
                        JUNIOR MUSIC FESTIVAL
                        <strong class="d-block">Classes Managment System</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('subjects') }}">Subjects List</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="{{ url('/') }}">
                                JUNIOR MUSIC FESTIVAL
                                <strong class="d-block">Classes Managment System</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('groups') }}">Group List</a>
                            </li>

                            
                        </ul>
                    </div>

                </div>
            </nav>

            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="jmftemp\images\slider\logo.jpeg" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="jmftemp\images\slider\teacherowner.png" class="img-fluid" alt="">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="jmftemp\images\slider\logo.jpeg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="heroText d-flex flex-column justify-content-center">

                                <h1 class="mt-auto mb-2">
                                    Music
                                    <div class="animated-info">
                                        <span class="animated-item">For All </span>
                                        <span class="animated-item">Symphony</span>
                                        <span class="animated-item">Skill</span>
                                    </div>
                                </h1>

                                <p class="mb-4"></p>

                                <div class="heroLinks d-flex flex-wrap align-items-center">
                                    <a class="custom-link me-4" href="#about" data-hover="Learn More">Learn More</a>

                                    <p class="contact-phone mb-0"><i class="bi-phone"></i> 010-020-0340</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="mb-lg-3 mb-3">WHY YOUR CHILD SHOULD JOIN JMF?</h2>

                            <p>JMF is an extra-curriculur program that can enhance your child's talent and motor skills. Students would also receive certificates and co-curriculur marks</p>

                            <p></p>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12 mx-auto">
                            <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                                <p class="featured-text"><span class="featured-number">Best</span> For<br>Primary Students</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-6 ps-0">
                            <img src="jmftemp\images\gallery\Teacher Fadilah with bachelor.png" class="img-fluid galleryImage" alt="Teacher Fadilah" title="Teacher Fadilah">
                        </div>

                        <div class="col-lg-6 col-6 pe-0">
                            <img src="jmftemp\images\gallery\Teacher Hafif removed diploma.png" class="img-fluid galleryImage" alt="Teacher Hafif" title="Teacher Hafif">
                        </div>
                        <hr>
                        <div class="col-lg-6 col-6 pe-0">
                            <img src="jmftemp\images\gallery\Teacher Eddy.png" class="img-fluid galleryImage" alt="Teacher Eddy" title="Teacher Eddy">
                        </div>
                        
                        <div class="col-lg-6 col-6 pe-0">
                            <img src="jmftemp\images\gallery\Teacher Ernest.png" class="img-fluid galleryImage" alt="wear a mask" title="Teacher Ernest">
                        </div>
                        <hr>
                        <div class="col-lg-6 col-6 pe-0">
                            <img src="jmftemp\images\gallery\Teacher Nadine.png" class="img-fluid galleryImage" alt="Teacher nadine" title="Teacher Nadine">
                        </div>
                        
                        <div class="col-lg-6 col-6 pe-0">
                            <img src="jmftemp\images\gallery\Teacher Herman.png" class="img-fluid galleryImage" alt="Teacher Herman" title="Teacher Herman">
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding pb-0" id="timeline">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">About JMF</h2>
                        
                        <div class="timeline">
                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">What School Offers JMF Program ?</h3>

                                    <p>SK TTDI JAYA, SK BUKIT JELUTONG, SK PUNCAK ALAM, SK PUTRA HEIGHTS 2
                                    </p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-patch-check-fill timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                    <!--<time>2021-07-31 Saturday</time>-->
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Certificates</h3>

                                    <p> Competition Certificiates Certified by Kementerian Pelajaran Malaysia & ABRSM Certificate</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-book timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                   <!-- <time>2021-07-15 Thursday</time>-->
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Qualified Teachers</h3>

                                    <p>All  Teachers Are Experienced and Skilled In Their Instruments</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-file-medical timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                   <!-- <time>2021-06-28 Monday</time>-->
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                                <div class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Target</h3>

                                    <p class="mb-0 pb-0">To Make Music More Accesible To More Primary School Students
                                    </p>
                                    
                                    
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-globe timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">
                                  <!--  <time>2021-05-30 Sunday</time>-->
                                </div>
                            </div>

                            <div class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                                <div class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                    <h3 class=" text-light">Help</h3>

                                    <p>If system facing any issues, please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact Sterling Group</a> for service.</p>
                                </div>

                                <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                    <i class="bi-person timeline-icon"></i>
                                </div>

                                <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                                   <!-- <time>2021-05-18 Tuesday</time>-->
                                </div>
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
                        <h5 class="mb-lg-4 mb-3">To Contact Us</h5>

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
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
<!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
    </body>
</html>