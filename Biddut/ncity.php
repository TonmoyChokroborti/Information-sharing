<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Electricity</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Bangladesh Electricity<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link  active" href="#hero">Home</a></li>
          <li><a class="nav-link " href="#about">About</a></li>
          <li><a class="nav-link " href="#services">Services</a></li>
          <li><a class="nav-link  " href="index2.php">Helpline </a></li>
          <li><a class="nav-link " href="problem.php">Complaint</a></li>
         
          <li><a class="nav-link " href="reg.php">Registration</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     

    </div>
  </header><!-- End Header -->
  <br><br><br>


<div  class="container">
  
      <div class="row mb-2">
    <?php
    include('db/connection.php');
    $query1 = mysqli_query($conn," select * from narayongonj    ");
    while ($row = mysqli_fetch_array($query1)){
      $city = $row['city'];
      $location = $row['location'];
      $ward = $row['ward'];
      $number = $row['number'];
      
    
    ?>
  
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $city ; ?></strong>
               <div class="mb-1 text-muted"><?php echo $location ; ?></div>
              <div class="mb-1 text-muted"><?php echo $ward ; ?></div>
              
              <div class="mb-1 text-muted"><?php echo $number ; ?><br/><br/><a href="tel:<?php echo $number ; ?>"> CALL</a>
            </div>
              
              
            </div>
           
          </div>
        </div>
      <?php } ?>
        
    </div>

    
          

    



  
       

         







 


         

        </div><!-- /.blog-main -->

     

          
        </div>
      </div>

      

    </div>
  </div>

    

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Electricity  Helpline
 </h3>
            <p>
            
Find your locality helpline number of  electric stations when you needed 
  <br>
    
Get your  service at  one click 
               
              
            </p>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-links">
            <h3>Electricity Complaint box</h3>

            <p> If  you  are facing  electric  supply  issue   problems 
            
 
  <br>
  then report on our complaint box
    

               
              
            </p>
            
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Electricity new connection </h4>
            <p>Register your new connection  on online <br><br>


            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

   
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>