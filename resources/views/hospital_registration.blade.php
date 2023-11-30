<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Centric Hospital Visit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">

            <img class="img-fluid rounded-circle" src="jnec.png" alt="" style="width:115px; height:115px;">
                <!-- <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i></h1> -->
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="classes.html" class="nav-item nav-link">Contact US</a>
                    <a href="hospital_registration" class="nav-item nav-link">Apply for Hostpital Visit</a>
                    
                </div>
                
                <a href="" class="">
                <img class="img-fluid rounded-circle" src="std_visit.jpg" alt="" style="width:115px; height:115px;">
                
                </a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Apply Your Hospital Leave</h1>
                                <form action="{{url('/apply_visit')}}" method="post">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname" name="name" placeholder="Your Name">
                                                <label for="gname">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gmail" name="std_no" placeholder="Your student number">
                                                <label for="gmail">Student Number</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="cname" name="email" placeholder="Your RUB mail address">
                                                <label for="cname">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" name="phone" placeholder="Phone Number">
                                                <label for="cname">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating">
                                                <select class="form-control border-0" id="department" name="department">
                                                    <option value="" selected disabled>Select Department</option>
                                                    <option value="CIVIL_ENGINEERING_SURVEYING">DEPARTMENT OF CIVIL ENGINEERING & SURVEYING</option>
                                                    <option value="ELECTRICAL_ENGINEERING">DEPARTMENT OF ELECTRICAL ENGINEERING</option>
                                                    <option value="MECHANICAL_ENGINEERING">DEPARTMENT OF MECHANICAL ENGINEERING</option>
                                                    <option value="ELECTRONIC_COMMUNICATION_ENGINEERING">DEPARTMENT OF ELECTRONIC AND COMMUNICATION ENGINEERING</option>
                                                    <option value="INFORMATION_TECHNOLOGY">DEPARTMENT OF INFORMATION TECHNOLOGY</option>
                                                    <option value="HUMANITIES_MANAGEMENT">DEPARTMENT OF HUMANITIES & MANAGEMENT</option>
                                                </select>
                                                <label for="department">Department</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0"  name="message"id="message" style="height: 100px"></textarea>
                                                <label for="message">Reason for Visiting the Hospital</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


        <!-- Team Start -->
       
        <!-- Team End -->


        <!-- Testimonial Start -->
       
        <!-- Testimonial End -->


        <!-- Footer Start -->
       
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>