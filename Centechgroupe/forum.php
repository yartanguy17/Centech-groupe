<?php
include('vew/header.php');
?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php" style="color: #2fc1e6;">Centech</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <li ><a href="index.php">Acceuil</a></li>
          <?php include('servicesHover.php')?>
          
          <li class="active makeActive"><a href="portfolio.php">Portfolio</a></li>
          <li ><a  href="Pricing.php">Qui sommes nous?</a></li>
          <li><a href="blog.php">Blog</a></li>
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
              <li>GESTION DE TEMPS</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


   
  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>