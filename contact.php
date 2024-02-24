<?php 


if(isset($_POST['submit']))
    {
        $message = $_POST['message'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        echo "$name";
       
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_db";

       
        $con = mysqli_connect($host, $username, $password, $dbname);
        
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
      
        $sql = "INSERT INTO contact (id,message, name , email) VALUES ('0', '$message','$name', '$email')";
     
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);


        // $sql ="SELECT * FROM users ORDER BY id DESC";

        // $result = mysqli_query($con ,$sql);
    }
?>

</body>
</html>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact Us || DanTV – Ask Media Pvt Ltd</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--Slider CSS here -->


    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/icon/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-area -->
        <header class="header-style-four">
            <div class="header-top-area s-header-top-area d-none d-lg-block">
                <div class="container custom-container-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="header-top-mail">
                                 <!-- <p><span></span><i class="far fa-envelope"></i><a href="mailto:news@dantv.lk">news@dantv.lk</a></p> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-social">
                                <span>Follow us on </span>
                                <ul>
                                    <li><a href="https://www.facebook.com/askmedianetwork" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <!-- <li><a href="https://www.youtube.com/channel/UCTpIm5MDqPvEcHIcPrLrA6Q" target="blank"><i class="fab fa-youtube"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-four-wrap">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu menu-style-two">
                                <nav>
                                    <div class="logo">
                                        <a href="index.php"><img src="img/logo/logo.png" width="100%" style="margin: 0 0 0 -23px;" alt="Logo"></a>
                                    </div>
                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="javascript:void(0)">NEWS</a>
                                                <ul class="submenu">
                                                    <li><a href="https://www.eelanadu.lk" target="_blank">Eelanadu</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">ACTIVITIES</a>
                                                <ul class="submenu">
                                                    <li><a href="dantvnet.php">DAN TV Network</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">CHANNELS</a>
                                                <ul class="submenu">
                                                    <li><a href="channels.php">Channels presentation</a></li>
                                                    <!-- <li><a href="programs.php">Programs catalogue</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a href="careers.php">CAREERS</a></li>
                                            <li class="show"><a href="contact.php">CONTACT</a></li>
                                            <a href="https://www.dantv.tv/index.php/73-dantv/live-tv/504-tamiloli"class="livechannel"style="line-height:27px">LIVE</a>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
        

        <!-- contact-area -->
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.209712659848!2d80.0184475143101!3d9.663114781396443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe56a624adc4df%3A0x3f18ea42e90ab913!2zQVNLIE1lZGlhIChQdnQpIEx0ZC5b4K6f4K6-4K6p4K-NIOCupOCuruCuv-CutOCvjSDgrpLgrrPgrr9d!5e0!3m2!1sen!2ssg!4v1643095980335!5m2!1sen!2ssg" width="100%" height="445" style="border:1px;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-45">
                            <div class="section-title title-style-three mb-20">
                                <h2>CONTACT<span> US</span></h2>
                            </div>
                            <div class="contact-info-list mb-40">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>707,Hospital Road,Jaffna</li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:news@dantv.lk" style="color: #6c6c6c;">news@dantv.lk</a></li>
                                </ul>
                            </div>
                            <div class="contact-form">
                            <form action="contact.php" method="post">

                                <textarea name="message" id="message" name="message" placeholder="Write Message..."></textarea>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="Your Mail">
                                        </div>
                                    </div>
                                     <input type="submit" class="btn btn-warning" value="SUBMIT MESSAGE" name="submit" style="color:black; padding-top:10px;">
                                <!-- <button >SUBMIT MESSAGE</button> -->
                            </form> 

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->



            

        </main>
        <!-- main-area-end -->

        
        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg s-footer-bg">
                <!-- newsletter-area -->
                <div class="newsletter-area s-newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <div class="section-title newsletter-title">
                                        <h2>Our <span>Newsletter</span></h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="newsletter-form-grp">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" placeholder="Enter your email...">
                                            </div>
                                            <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newsletter-area-end -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.php"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>707,Hospital Road,Jaffna</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span><a href="mailto:news@dantv.lk" style="color: #6c6c6c;">news@dantv.lk</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h3>Quick <span>Link</span></h3>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                                        <li><a href="privacy-Policy.php">Privacy Policy</a></li>
                                        <li><a href="cookie-Policy.php">Cookie Policy</a></li>
                                        <li><a href="sitemap.php">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h3>Follow <span>us</span></h3>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/askmedianetwork" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <!-- <li><a href="https://www.youtube.com/channel/UCTpIm5MDqPvEcHIcPrLrA6Q" target="blank"><i class="fab fa-youtube"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Newsletter Sign Up</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-fire"><img src="img/images/footer_fire.png" alt=""></div>
                <div class="footer-fire footer-fire-right"><img src="img/images/footer_fire.png" alt=""></div>
            </div>
            <div class="copyright-wrap s-copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <span><p class="fw-title mb-35">Copyright &copy; 2022 . All Rights Reserved | Solution By  <a href="https://vpsprojects.lk">VPS Projects</a></p></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

      



		<!-- JS here -->
        <script src="js/vendor/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            function basicmap() {
                    // Basic options for a simple Google Map
                    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                    var mapOptions = {
                        // How zoomed in you want the map to start at (always required)
                        zoom: 11,
                        scrollwheel: false,
                        // The latitude and longitude to center the map (always required)
                        center: new google.maps.LatLng(40.6700, -73.9400), // New York
                        // This is where you would paste any style found on Snazzy Maps.
                        styles: [{ "featureType": "all", "elementType": "geometry.fill", "stylers": [{ "weight": "2.00" }] }, { "featureType": "all", "elementType": "geometry.stroke", "stylers": [{ "color": "#9c9c9c" }] }, { "featureType": "all", "elementType": "labels.text", "stylers": [{ "visibility": "on" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "color": "#f2f2f2" }] }, { "featureType": "landscape", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": -100 }, { "lightness": 45 }] }, { "featureType": "road", "elementType": "geometry.fill", "stylers": [{ "color": "#eeeeee" }] }, { "featureType": "road", "elementType": "labels.text.fill", "stylers": [{ "color": "#7b7b7b" }] }, { "featureType": "road", "elementType": "labels.text.stroke", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "road.highway", "elementType": "all", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "color": "#46bcec" }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "geometry.fill", "stylers": [{ "color": "#c8d7d4" }] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [{ "color": "#070707" }] }, { "featureType": "water", "elementType": "labels.text.stroke", "stylers": [{ "color": "#ffffff" }] }]
                    };
                    // Get the HTML DOM element that will contain your map
                    // We are using a div with id="map" seen below in the <body>
                    var mapElement = document.getElementById('contact-map');

                    // Create the Google Map using our element and options defined above
                    var map = new google.maps.Map(mapElement, mapOptions);

                    // Let's also add a marker while we're at it
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(40.6700, -73.9400),
                        map: map,
                        icon: 'img/icon/map_marker.png',
                        title: 'Geco'
                    });
                }
                if ($('#contact-map').length != 0) {
                    google.maps.event.addDomListener(window, 'load', basicmap);
                }
        </script>

        <!--Slider js here -->

    </body>
</html>
