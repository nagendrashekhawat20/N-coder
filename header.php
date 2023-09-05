    <header>
        <div class="tp-header-area-three header-sticky">
            <div class="tp-custom-container">
                <div class="row justify-content-xl-center align-items-center">
                    <div class="col-xxl-3 col-xl-4 col-8">
                        <div class="tp-header-logo-three">
                            <a href="index.php"><img src="assets/img/logo/logo.png" class="img-fluid"
                                    alt="logo not found"></a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-4 d-flex justify-content-center">
                        <div class="tp-main-menu tp-main-menu-three">
                            <nav id="tp-mobile-menu">
                                <ul>
                                    <li class="menu-item-has-children"><a href="index.php" class="active">HOME</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="about.php">ABOUT</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="service.php">SERVICES</a>
                                        <ul class="sub-menu">
                                            <li><a href="./Office-cleaning.php">Office Cleaning</a></li>
                                            <li><a href="./Residential _Cleaning.php">Residential Cleaning</a></li>
                                            <li><a href="./Gardening & Landscaping.php">Gardening & Landscaping</a>
                                            </li>
                                            <li><a href="./Emergency-Cleaning.php">Emergency Cleaning</a></li>
                                            <li><a href="./Carpet-Steam-Clean.php">Carpet Steam Clean</a></li>
                                            <li><a href="./High-Pressure-Cleaning.php">High Pressure Cleaning</a></li>
                                            <li><a href="./Strip-&-Seal.php">Strip & Seal</a></li>
                                            <li><a href="./Window-Cleaning.php">Window Cleaning</a></li>
                                            <li><a href="./High-Level-Window-Cleaning.php">High Level Window
                                                    Cleaning</a></li>
                                            <li><a href="./Graffiti-Removal.php">Graffiti Removal</a></li>
                                            <li><a href="./Hard-Floor-Scrubbing.php">Hard Floor Scrubbing</a></li>
                                            <li><a href="./House-moves.php">House Moves</a></li>
                                            <li><a href="./Labour-hire.php">Labor Hire</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="./Guide.php">GUIDES</a>

                                    </li>
                                    <li class="menu-item-has-children"><a href="contact.php">CONTACT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu activation -->
                        <div class="side-menu-icon d-xl-none text-end">
                            <button class="side-toggle text-dark"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 d-none d-xl-block">
                        <div class="tp-header-right-three">
                            <!-- <div class="tp-header-number-three">
                                <span>Call Us : <a href="tel:33888200-55">33 888 200 - 55</a></span>
                            </div> -->
                            <div class="tp-header-btn-three">
                                <a href="tel:33888200-55" class="header-btn"><b>Call Us:</b>0481 826 682</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu info -->
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="tp-mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><i class="flaticon-pin"></i>Perth Western Australia</li>
                            <li><i class="flaticon-email"></i><a
                                    href="mailto:admin@topmasterservice.com.au">admin@topmasterservice.com.au</a></li>
                            <li><i class="flaticon-phone-call"></i><a href="tel:0481 826 682">0481 826 682</a></li>
                        </ul>
                        <div class="sidebar__menu--social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- mobile menu info -->


    <!-- JS here -->
<script>
  window.onUsersnapLoad = function(api) {
    api.init();
  }
  var script = document.createElement('script');
  script.defer = 1;
  script.src = 'https://widget.usersnap.com/global/load/c78366c4-3bc1-45a9-a79c-97982f589328?onload=onUsersnapLoad';
  document.getElementsByTagName('head')[0].appendChild(script);
</script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/9.3.0/mmenu.js" integrity="sha512-D1qgHT+xXRgN9gLLLYHbQ/c8wkrADqfXg1kr1dRbP9nOtNzIKKNDU+hmFqR1fSbsU1YFBkw6TbvfZo+SyI0K6w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function openModal() {
            $('#modalContactForm').modal('show');
        }

        var imagePopUp = document.querySelector();
        imagePopUp.addEventListener('click', function (e) {
            $('#modalContactForm').modal('show');
        });
    </script>
