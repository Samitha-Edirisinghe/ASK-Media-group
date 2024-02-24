<?php include_once "image uplord/db_conn.php"; ?>
<?php include_once "image uplord/vedio/db_conn.php"; ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || DanTV – Ask Media Pvt Ltd</title>
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
        <link href="css/slider/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
        <link href="css/slider/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/slider/css/style.css" rel="stylesheet">
  
        <style>
		.body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			/* min-height: 100vh; */
			min-height: 70vh;
		}
		.alb {
			width: 300px;
			height: 200px;
			padding: 15px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		.a {
			text-decoration: none;
			color: black;
			padding-left: 10px;
		}
		.card25{
			
			margin: 0px;
			border-radius:0px 0px 15px 15px;
			background-color: black;
			margin-top:10px;
		}
		.h5{
			text-align: center;
			padding:5px 0px 5px 0px;
			color:white;
		}
	</style>
        
    </head>
    <body >

        <!-- preloader -->
        <!-- <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/icon/preloader.svg" alt="">
                </div>
            </div>
        </div> -->
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
                                            <li class="show"><a href="index.php">Home</a></li>
                                            <li><a href="javascript:void(0)">News</a>
                                                <ul class="submenu">
                                                    <li><a href="https://www.eelanadu.lk" target="_blank">Eelanadu</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">Activities</a>
                                                <ul class="submenu">
                                                    <li><a href="dantvnet.php">DAN TV Network</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0)">Channels</a>
                                                <ul class="submenu">
                                                    <li><a href="channels.php">Channels presentation</a></li>
                                                    <!-- <li><a href="programs.php">Programs catalogue</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a href="careers.php">Careers</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <a href="https://www.dantv.tv/index.php/73-dantv/live-tv/504-tamiloli" class="livechannel" style="line-height: 27px">LIVE</a>
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

        <!-- #back_to_camera -->
    
        <!-- .fluid_container -->
                    
        <!-- slider-area -->
            <section class="slider-area home-four-slider">
                <div class="fluid_container">
                    <div class="slider1 col-xl-8 col-lg-8 col-sm-12" style="margin-bottom:20px;">
                        <div class="bend niceties preview-2">
                            <div id="ensign-nivoslider" class="slides">
                                <img src="css/slider/img/slider/slider1.png" alt="" title="#slider-direction-1" />
                                <img src="css/slider/img/slider/slider2.png" alt="" title="#slider-direction-2" />
                                <img src="css/slider/img/slider/slider3.png" alt="" title="#slider-direction-3" />
                                <img src="css/slider/img/slider/slider4.png" alt="" title="#slider-direction-4" />
                                <img src="css/slider/img/slider/slider5.png" alt="" title="#slider-direction-5" />
                                <img src="css/slider/img/slider/slider6.png" alt="" title="#slider-direction-6" />
                                
                            </div>

                        <!-- direction 1 -->
                        <div id="slider-direction-1" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                            <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 2 -->
                        <div id="slider-direction-2" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 3 -->
                        <div id="slider-direction-3" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 4 -->
                        <div id="slider-direction-4" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 5 -->
                        <div id="slider-direction-5" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 6 -->
                        <div id="slider-direction-6" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                        <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 7 -->
                        <div id="slider-direction-7" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">
                                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                                <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- direction 8 -->
                        <div id="slider-direction-8" class="slider-direction slider-two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="slider-content text-center">

                                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                                <a class="ready-btn right-btn page-scroll" href="channels-details.php">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 slides2">
                        <div class="testimonial-area position-relative justify-content-center">
                                <div class="tournament-top-wrap">
                                    <div class="section-title tournament-title">
                                        <h2>Featured  <span>Videos</span></h2>
                                    </div>
                                </div>
                                <div class="testimonial-active owl-carousel">
                                    <div class="testimonial-item">

<?php 
          $sql = "SELECT * FROM vedio_url ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($vedio = mysqli_fetch_assoc($res)) { 
             $url1=$vedio['url1'];
             $url2=$vedio['url2'];
             $url3=$vedio['url3'];
             $url4=$vedio['url4'];
             $url5=$vedio['url5'];
            
			 ?>
                
                <?php } }?>    
                                   <?php echo $url1;?>             
                                    
                                     </div>

                                 <div class="testimonial-item">
                                 <?php echo $url2;?>
                                    </div>

                                    <div class="testimonial-item">
                                    <?php echo $url3;?>
                                    </div>

                                    <div class="testimonial-item">
                                    <?php echo $url4;?>
                                    </div>

                                    <div class="testimonial-item">
                                    <?php echo $url5;?>
                                    </div>

                                    

                                </div>
                            </div>
                    </div>
                </div>  
            </section>
        <!-- slider-area-end -->
  
        <!-- <div style="height:500px;"></div> -->
     

		 <div style="clear:both;"></div>
            
            <section class="live-match-area pt-90">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="section-title home-four-title text-center mb-60">
                                    <h2>Most Popular  <span>Programs</span></h2>
                                </div>
                            </div>
                        </div>
                        
                        <?php 
                              $sql = "SELECT * FROM images ORDER BY id DESC";
                              $res = mysqli_query($conn,  $sql);

                              if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) { 
                                 $text=$images['text'];
                                 $image25= $images['image_url'];
                                 ?>
                                
                                 <div class="alb  ">
                                     <a href="" class="a">
                                    <div class="card card25">
                                    <img src="image uplord/uploads/<?=$image25?>">
                                     <h5 class="h5"><?php echo $text; ?></h5>
                                    </div></a>
                                 </div>
                        <?php } }?>

                        <div class="row">
                            <div class="col-xl-3 col-lg-12">
                                <div class="live-match-wrap">
                                    <a href="https://youtu.be/Ss4MY_Ym2Bs">
                                        <img src="img/images/live_match_img.jpg" alt="" width="100%">
                                    </a>
                                    <h4 class="popularpro"><a href="https://youtu.be/Ss4MY_Ym2Bs">ASK MEDIA</a></h4>
                                </div>

                            </div>

                            <div class="col-xl-3 col-lg-12">
                                <div class="live-match-wrap">
                                    <a href="https://youtu.be/Ss4MY_Ym2Bs">
                                        <img src="img/images/live_match_img.jpg" alt="" width="100%">
                                    </a>
                                    <h4 class="popularpro"><a href="https://youtu.be/Ss4MY_Ym2Bs">ASK MEDIA</a></h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12">
                                <div class="live-match-wrap">
                                    <a href="https://youtu.be/Ss4MY_Ym2Bs">
                                        <img src="img/images/live_match_img.jpg" alt="" width="100%">
                                    </a>
                                    <h4 class="popularpro"><a href="https://youtu.be/Ss4MY_Ym2Bs">ASK MEDIA</a></h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12">
                                <div class="live-match-wrap">
                                    <a href="https://youtu.be/Ss4MY_Ym2Bs">
                                        <img src="img/images/live_match_img.jpg" alt="" width="100%">
                                    </a>
                                    <h4 class="popularpro"><a href="https://youtu.be/Ss4MY_Ym2Bs">ASK MEDIA ASK MEDIA</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-match-area-end -->

            <!-- inner-about-area -->
            <section class="inner-about-area fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                            <div class="inner-about-img">
                                <img src="img/images/Ask Media.jpg" class="wow fadeInRight" data-wow-delay=".3s" alt="" width="80%">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="section-title title-style-three mb-25">
                                <h2>ASK <span>MEDIA</span></h2>
                            </div>
                            <div class="inner-about-content">
                                <h5>LEADING CABLE TV PROVIDER AND MAJOR  TELEVISION NETWORK</h5>
                                <p>ASK Media group began its journey with just a single Channel DAN Tamil Oli in 1997 in France.</p>
                                <p>With a clear and focused vision, the company expanded its boundaries into Sri Lanka under the company name  of ASK Media in 2007 on terrestrial mode building a formidable and exemplary position in the media field.</p>
                                <a href="about-us.php" class="btn btn-style-two">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- inner-about-area-end -->



                <!-- blog-area -->
            <section class="blog-area pt-115 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title title-style-three text-center mb-70">
                                <h2>OUR  <span>Channels</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.youtube.com/c/DANTamilOli" target="_blank"><img src="images/logo/DAN.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.youtube.com/c/DANTamilOli" target="_blank">DAN TV</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.youtube.com/c/DANTamilOli" target="_blank"><img src="images/logo/DAN Tamil Oli-NEW.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.youtube.com/c/DANTamilOli" target="_blank">DAN TAMIL OLI</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.facebook.com/DanYarlTV/" target="_blank"><img src="images/logo/Yaarl TV - Logo [Black].png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.facebook.com/DanYarlTV/" target="_blank">YARL TV</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="404.php"><img src="images/logo/DAN Music HD-NEW.png" alt=""></a>
                                    <h4 class="popularpro"><a href="404.php">DAN MUSIC</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="404.php"><img src="images/logo/DAN COMEDY LOGO HD.png" alt=""></a>
                                    <h4 class="popularpro"><a href="404.php">DAN COMEDY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.youtube.com/c/DANNEWSsrilanka" target="_blank"><img src="images/logo/DAN News 01.jpg" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.youtube.com/c/DANNEWSsrilanka" target="_blank">DAN NEWS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.youtube.com/c/OHMTVdan/" target="_blank"><img src="images/logo/ohmtv logo.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.youtube.com/c/OHMTVdan/" target="_blank">OHM TV</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.youtube.com/c/HolyMary" target="_blank"><img src="images/logo/Holy Mary Logo.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.youtube.com/c/HolyMary" target="_blank">HOLY MARY</a>
                                </div>
                            </div>
                        </div><div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://www.youtube.com/c/PIRAITV" target="_blank"><img src="images/logo/Pirei Television.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://www.youtube.com/c/PIRAITV">PIREI TV</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://youtube.com/c/KalviTV" target="_blank"><img src="images/logo/Kalvi TV Logo.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://youtube.com/c/KalviTV" target="_blank">KALVI TV 1</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://youtube.com/c/KalviTV" target="_blank"><img src="images/logo/KALVI TV CHANNEL - 2 LOGO.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://youtube.com/c/KalviTV" target="_blank">KALVI TV 2</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://youtube.com/c/KalviTV" target="_blank"><img src="images/logo/KALVI TV CHANNEL - 3 LOGO.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://youtube.com/c/KalviTV" target="_blank">KALVI TV 3</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="blog-post blog-style-two mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="https://youtube.com/c/KalviTV" target="_blank"><img src="images/logo/KALVI TV CHANNEL - 4 LOGO.png" alt=""></a>
                                    <h4 class="popularpro"><a href="https://youtube.com/c/KalviTV" target="_blank">KALVI TV 4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

<!-- End Slider -->



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
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!--Slider js here -->
        <script src="css/slider/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
        <script src="css/slider/js/main.js"></script>

        

    </body>
</html>


