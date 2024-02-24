<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dstyle.css">
    <link rel="stylesheet" href="css/nav.css">
    

    <title> Dashbord Section </title>
  </head>
  <body>
    
<!-- Demo header-->
<section class=" header">
    <div class="container-fluid py-4">
        <!-- <header class="text-center mb-5 pb-5 text-white">
            <h1 class="display-4">Bootstrap vertical tabs</h1>
            <p class="font-italic mb-1">Making advantage of Bootstrap 4 components, easily build an awesome tabbed interface.</p>
            <p class="font-italic">Snippet by
                <a class="text-white" href="https://bootstrapious.com/">
                    <u>Bootstrapious</u>
                </a>
            </p>
        </header> -->

        <header>
                    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                        class="rounded-circle"
                        height="22"
                        alt="Portrait of a Woman"
                        loading="lazy"
                      />
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">My profile</a>
                      <a class="dropdown-item" href="#">Settings</a>
                      
                      <a class="dropdown-item" href="form/logout.php">Logout</a>
                    </div>
                  </li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="form/register.php">Registration<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="form/login.php">Login <span class="sr-only">(current)</span></a>
                      </li>

                    
                    
                     
                  
                  </ul>
                  
              </nav>

        </header>
              <div class="py-4"></div>

        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Uplord Images</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-image_details-tab" data-toggle="pill" href="#v-pills-image_details" role="tab" aria-controls="v-pills-image_details" aria-selected="false">
                          <i class="fa fa-calendar-minus-o mr-2"></i>
                          <span class="font-weight-bold small text-uppercase">Image Details</span></a>
  

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Uplord Vedio</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-vedio_details-tab" data-toggle="pill" href="#v-pills-vedio_details" role="tab" aria-controls="v-pills-vedio_details" aria-selected="false">
                          <i class="fa fa-calendar-minus-o mr-2"></i>
                          <span class="font-weight-bold small text-uppercase">Vedio Details</span></a>
  

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-job-tab" data-toggle="pill" href="#v-pills-job" role="tab" aria-controls="v-pills-job" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Job Vacnsies</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Contact </span></a>
          

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-Read-tab" data-toggle="pill" href="#v-pills-Read" role="tab" aria-controls="v-pills-Read" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Read more </span></a>
          

                    </div> 
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4"></h4>
                        <p class="font-italic text-muted mb-2"><?php include "index.php"; ?><br></p>
                    </div>


                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-image_details" role="tabpanel" aria-labelledby="v-pills-image_details-tab">
                      <h4 class="font-italic mb-4"></h4>
                      <p class="font-italic text-muted mb-2"><?php include "image_disply.php"; ?></p>
                  </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4"> <a href="vedio_insert.php">Uplord Vedio</a></h4>
                        <div><p class="font-italic text-muted mb-2"><?php include "vedio_insert.php"; ?><br></p></div>
                    </div>


                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-vedio_details" role="tabpanel" aria-labelledby="v-pills-vedio_details-tab">
                      <h4 class="font-italic mb-4"></h4>
                      <p class="font-italic text-muted mb-2"><?php require "vedio_display.php"; ?></p>
                    </div>
                    

                  
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-job" role="tabpanel" aria-labelledby="v-pills-job-tab">
                        <h4 class="font-italic mb-4">Job</h4>
                        <p class="font-italic text-muted mb-2">

                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Graphic Designers</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Editor </a>
                            </li>
                          
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php include "job/step3.php"; ?><br><?php include "job/graphic_disply.php"; ?></div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php include "job/editor_url_uplord.php"; ?><br><?php include "job/editor_display.php"; ?> </div>
                           
                          </div>
                          
                        </p>
                      </div>
                  

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <h4 class="font-italic mb-4"></h4>
                      <p class="font-italic text-muted mb-2"><?php include "contactview.php"; ?></p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-Read" role="tabpanel" aria-labelledby="v-pills-Read-tab">
                      <h4 class="font-italic mb-4"></h4>
                      <p class="font-italic text-muted mb-2"><?php include "read more/index.php"; ?><br></p>
                    </div>

                   
                  
                </div>
            </div>
        </div>
    </div>
  
</section>


















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
