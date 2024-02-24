<?php include "Image Uplord/read more/db_conn.php"; ?>



     <!-- <a href="index.php">&#8592;</a> -->
   
    

	








<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Channels-Dtails || DanTV – Ask Media Pvt Ltd</title>
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

        <style>
		body {
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
		a {
			text-decoration: none;
			color: black;
			padding-left: 10px;
		}
		.card{
			
			margin: 0px;
			border-radius:0px 0px 15px 15px;
			background-color: black;
			margin-top:10px;
		}
		h5{
			text-align: center;
			padding:5px 0px 5px 0px;
			color:white;
		}
	</style>

    </head>
    <body>

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
                                <p><span></span><i class="far fa-envelope"></i><a href="mailto:news@dantv.lk">news@dantv.lk</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-social">
                                <span>Follow us on :</span>
                                <ul>
                                    <li><a href="https://www.facebook.com/askmedianetwork" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCTpIm5MDqPvEcHIcPrLrA6Q" target="blank"><i class="fab fa-youtube"></i></a></li>
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
                                                    <li><a href="programs.php">Programs catalogue</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="careers.php">CAREERS</a></li>
                                            <li><a href="contact.php">CONTACT</a></li>
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

         <!-- site map-area -->
         <?php 
          $sql = "SELECT * FROM readmore ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
             $text=$images['text'];
			 $image25= $images['image_url'];
             $name= $images['name'];
			 ?>
            
          
            <!-- blog-area -->
            <section class="blog-area primary-bg pt-120 pb-175">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-list-post blog-details-wrap">
                                <div class="blog-list-post-content">
                                    <h4><?php echo "$name"; ?></h4>
                                    <p><?php echo "$text;" ?></p>
                                                   
                                    <?php } }?>
                                    
 
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

               

            </section>
            <!-- blog-area-end --> 
           
        </main>
        <!-- main-area-end -->





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


    </body>
</html>
