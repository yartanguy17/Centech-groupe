<?php
include('vew/header.php');
?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.php" style="color: #2fc1e6;">
      <img src="assets/images/logo.jpg" alt="Logo" width="100" height="50">
    </a></h1>      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <li ><a href="index.php">Acceuil</a></li>
          <?php include('servicesHover.php')?>
          
          <li class="active makeActive"><a href="portfolio.php">Portfolio</a></li>
          <li ><a  href="Pricing.php">Qui sommes nous?</a></li>
          <!--<li><a href="blog.php">Blog</a></li>-->
          <li><a href="contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <?php 
      include('header-social-links.php');
      ?>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section  style="background-color:skyblue;" id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex justify-content-between align-items-center">
         
            <ol>
              <li><a href="index.php">Acceuil</a></li>
              <li>IMMOBILIER</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CENTECH IMMOBILIER </h2>
          <p>Permettre à notre clientèle de louer ,acheter et de construire des Appartements | Villas | Maisons | Bureau :</p>
     
        </div>

        <div class="row content">
      
          
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">
          <div class="col-lg-3 col-md-4 portfolio-item filter-app">   
            <img src="assets/images/achat/acheter-louer.jpg" style="height: 200px;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">APPARTEMENTS</h4>
            <a  href="appartement.php"  class="details-link" title="INFOGERANCE & LEASING"><i class="bx bx-link"></i></a>
            </div>
          </div>
  
          <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <img src="assets/images/villa/villa5.jpg"  style="height: 200px;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;" >VILLAS</h4>
           <a href="villa.php" class="details-link" title="SECURITE INFORMATIQUE"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/images/maison/maison6.jpg"  style="height: 200px;" class="img-fluid" alt="">
            <div class="portfolio-info">
             <h4 style="font-size: 15px;" > MAISONS</h4>
              <a href="maison.php" class="details-link" title="SÛRETE ELECTRONIQUE"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/images/bureau/bureau4.jpg" style="height: 200px;"  class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">BUREAUX</h4>
          <a href="bureau.php"  title="FORMATION ET CERTIFICATION" class="details-link"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
         
         
      </div>
    </section><!-- End Portfolio Section -->

  




   
  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>