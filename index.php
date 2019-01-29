<!DOCTYPE html>
<?php
require "server/functions.php";
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Store Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style2.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact us.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <!--<header class="jumbotron my-4">-->
        <header class="my-4">
        <img class="card-img-top" src="images/home.jpg" alt="">
      </header>

      <!-- Page Features -->
      <div class="row text-center">
          <?php getPro(); ?>

          <!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--          <div class="card">-->
<!--            <img class="card-img-top" src="images/macbook_air.jpg" alt="">-->
<!--            <div class="card-body">-->
<!--              <h4 class="card-title">Macbook Air</h4>-->
<!--              <p class="card-text">1.8 GHz Intel Core i5 Dual-Core 8GB of 1600 MHz LPDDR3 RAM | 128GB SSD-->
<!--                Integrated Intel HD Graphics 6000 13.3" 1440 x 900 Glossy Display-->
<!--                802.11ac Wi-Fi | Bluetooth 4.0 Thunderbolt 2 | USB 3.0</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--              <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--          <div class="card">-->
<!--            <img class="card-img-top" src="images/macbook_pro.JPG" alt="">-->
<!--            <div class="card-body">-->
<!--              <h4 class="card-title">Macbook Pro</h4>-->
<!--              <p class="card-text">Apple MacBook Pro MD101LL/A 13.3-inch Laptop (2.5Ghz, 4GB RAM, 500GB HD) (Certified Refurbished) w/ ED Bundle - $99 Value (Bundle Includes: Protective Skin + 1 Year CPS Limited Warranty)</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--              <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--          <div class="card">-->
<!--            <img class="card-img-top" src="images/microsoft%20_surface.jpg" alt="">-->
<!--            <div class="card-body">-->
<!--              <h4 class="card-title">Microsoft Surface</h4>-->
<!--              <p class="card-text">Dimensions	12.13” x 8.79” x .57” (308.1 mm x 223.27 mm x 14.48 mm)-->
<!--                Display	Screen: 13.5” PixelSense™ Display-->
<!--                Resolution: 2256 x 1504 (201 PPI)-->
<!--                Surface Pen* enabled-->
<!--                10 point multi-touch-->
<!--                Memory	8GB or 16GB RAM-->
<!--                Processor	Intel® Core™ 8th Gen i5 or i7</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--              <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-lg-3 col-md-6 mb-4">-->
<!--          <div class="card">-->
<!--            <img class="card-img-top" src="images/hp_spectre.jpg" alt="">-->
<!--            <div class="card-body">-->
<!--              <h4 class="card-title">Hp Spectre</h4>-->
<!--              <p class="card-text">Windows 10 Home 64,-->
<!--                8th Generation Intel® Core™ i5 processor,-->
<!--                Intel® UHD Graphics 620; 8GB Memory(onboard).-->
<!--                8GB Memory(onboard); 256 GB SSD storage,-->
<!--                Fingerprint reader; Trusted Platform Module (TPM) support</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--              <a href="#" class="btn btn-primary">Find Out More!</a>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Store 2018</p>
      </div>
      <!-- /.container -->
    </footer>

  </body>

</html>
