<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Guide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/fav.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/main.css">



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>


    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->


    <section class="info-welcome">
        <div class="container">
            <p>
                Welcome to Top Masters - Your Cleaning Wizards!
            </p>
        </div>
    </section>

    <?php
    include('header.php');
    ?>

    <main>

        <!-- hero area start here -->
        <section class="tp-slider-area-three fix">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 align-items-center d-flex">
                        <div class="container">

                            <div class="banner-heading">
                                <h1>
                                   Guides
                                </h1>
                                <div class="tp-page-title z-index">
                                    <div class="breadcrumb-menu">
                                        <nav class="breadcrumb-trail breadcrumbs">
                                            <ul class="trail-items">
                                                <li class="trail-item trail-begin"><a href="index.php">Home</a>
                                                </li>
                                                <li class="trail-item trail-end"><span>Guide</span></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div>
                            <img src="./assets/img/slider/bubble-1.png" class="bubble_img_top img-fluid"
                                alt="Image not found">
                        </div> -->
                    </div>
                    <div class="bubble_img-about">
                        <img src="./assets/img/slider/bubble.png" alt="Image not found" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 p-0">
                        <img src="./assets/img/guide/guide-bann.png" alt="Image not found"
                            class="img-fluid men-cleaning">
                        <div>
                            <img src="./assets/img/slider/dots-img.png" alt="Image not found"
                                class="banner_img_dots img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end here -->

        <!-- project area start here -->
        <div class="tp-prjects-area pt-120 pb-120">
            <div class="container">

                <div class="service-heading text-center">
                    <!-- <h6>
                        WHAT WE OFFER
                    </h6>
                    <h2>
                        Choose the Apex of Cleaning Excellence
                    </h2> -->
                    <div class="bubble-service">
                        <img src="./assets/img/process/bubble.png" alt="Image not found" height="100" width="100"
                            class="img-fluid">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="tp-prjects-tab-menu mb-60">
                            <ul class="nav justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Carpet</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Glass</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab1" data-bs-toggle="tab"
                                        data-bs-target="#contact1" type="button" role="tab" aria-controls="contact1"
                                        aria-selected="false">Outdoor</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab2" data-bs-toggle="tab"
                                        data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2"
                                        aria-selected="false">Office</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab3" data-bs-toggle="tab"
                                        data-bs-target="#contact3" type="button" role="tab" aria-controls="contact3"
                                        aria-selected="false">Kitchen</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="row pb-50">
                    <div class="col-12">
                        <div class="bubble-testi">
                            <img src="./assets/img/slider/bubble.png" alt="Image not found" class="img-fluid">
                        </div>
                        <div class="tp-prjects-tab-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="bubble_img">
                                            <img src="./assets/img/slider/bubble.png" alt="Image not found"
                                                class="img-fluid">
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <a href="./Guide-internal.php"><img
                                                            src="assets/img/guide/guide-3.png" class="img-fluid"
                                                            alt="img not found"></a>
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">19 March 2023</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="./Guide-internal.php">Kitchen cleaning
                                                                checklist for a spotless kitchen</a></h4>
                                                        <a href="./Guide-internal.php" class="button">Read
                                                            more</a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <a href="./Guide-internal.php"><img
                                                            src="assets/img/guide/guide-2.png" class="img-fluid"
                                                            alt="img not found"></a>
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">19 March 2023</span>
                                                        <h4 class="tp-project-title"><a href="./Guide-internal.php">How
                                                                much does house
                                                                cleaning cost?</a></h4>
                                                        <a href="./Guide-internal.php" class="button">Read
                                                            more</a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <a href="./Guide-internal.php"><img
                                                            src="assets/img/guide/guide-1.png" class="img-fluid"
                                                            alt="img not found"></a>
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">19 March 2023</span>
                                                        <h4 class="tp-project-title"><a href="./Guide-internal.php">How
                                                                to disinfect your
                                                                house after COVID-19</a></h4>
                                                        <a href="./Guide-internal.php" class="button">Read
                                                            more</a>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-1.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Window Cleaning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-2.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Kitchen Cleaning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-1.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Window Cleaning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-2.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Kitchen Cleaning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-1.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Window Cleaning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-2.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Kitchen Cleaning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-1.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Window Cleaning</a></h4>
                                                    </div>
                                                    <div class="tp-project-text-icon">
                                                        <a href="project-details.php"><i class="fal fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-project z-index mb-30">
                                                <div class="tp-project-img">
                                                    <img src="assets/img/project/project-tab-2.jpg" class="img-fluid"
                                                        alt="img not found">
                                                </div>
                                                <div class="tp-project-text">
                                                    <div class="tp-project-text-content">
                                                        <span class="tp-project-subtitle">Residential Service</span>
                                                        <h4 class="tp-project-title"><a
                                                                href="project-details.php">Kitchen Cleaning</a></h4>
                                                    </div>
                                                    <div class="tp-project-text-icon">
                                                        <a href="project-details.php"><i class="fal fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- project area end here -->


        <!--contact form starts here-->
        <section class="mb-60">
            <div class="container">
                <div class="bubble-testi">
                    <img src="./assets/img/about/bubble.png" alt="Image not found" class="img-fluid">
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-4 address-block pt-60 pb-60 px-5">
                        <div>
                            <h2>
                                Office Timing
                            </h2>
                            <div class="ofc-design-line mb-30">

                            </div>
                            <!-- <p class="text-white">
                                54B, Tailstoi Town 5238 ST,La city, IA 522364
                            </p> -->
                            <p class="text-white">
                                Monday - Friday<br>
                                8.00 am - 7.00 pm / Sunday<br>
                                (Closed)
                            </p>
                        </div>
                        <br>
                        <div class="mt-30">
                            <h4>
                                Have a Questions ?
                            </h4>
                            <p class="text-white"><b>04123 81 557</b></p>
                        </div>

                    </div>
                    <div class="col-md-7  my-2 mx-3">
                        <h2 class="content-heading">Get in touch</h2>
                        <form action="submit">
                            <div class="row form-m-inline">
                                <div class="form-group col-12 col-md-6">
                                    <label for="firstName"></label>
                                    <input type="text" class="form-control" id="firstName" name="name"
                                        placeholder="First Name" />
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="lastName"></label>
                                    <input type="text" class="form-control" id="lastName" name="name"
                                        placeholder="Last Name" />
                                </div>
                            </div>

                            <div class="row form-m-inline">
                                <div class="form-group col-12 col-md-6">
                                    <label for="email"></label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Email address" />
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="phone"></label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="Phone" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message"></label>
                                <textarea class="form-control" id="message" name="message" rows="4"
                                    placeholder="Message"></textarea>
                            </div>

                            <a type="submit" class="btn contact-form col-12">
                                Submit
                            </a>
                        </form>
                    </div>

                </div>

        </section>
        <!--contact form ends here-->


    </main>
    
    <?php
    include('footer.php');
    ?>



    <!-- JS here -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>