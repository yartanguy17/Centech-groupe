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
              <li>GESTION DE TEMPS</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section   id="about-us" class="about-us">
        <div  class="container" data-aos="fade-down">
          <div class="row content">
          <div class="col-12"  data-aos="fade-down">
            <p style="text-align: center; font-size:50px; margin-bottom: 50px;">
                 Avec nos solutions reprenez un semblant de contrôle sur votre temps.
              </p>   
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <p style="text-align: justify; font-size:20px;">
              Un savoir centenaire en horlogerie d’édifice, équipements et entretien.
              </p>                
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-right">
              <p style="width: auto; height: 300px; background-color: #28AEF9; color: white; font-size: 80px;
                text-align: center; padding-top: 75px; border: 1px blue solid; border-radius: 20px;">CAMPANAIRE</p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us" style="background-color:#fafdff;">
        <div  class="container" data-aos="fade-up">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <p style="width: auto; height: 300px; background-color: #28AEF9; color: white; font-size: 80px;
                text-align: center; padding-top: 75px; border: 1px blue solid; border-radius: 20px;">SOFTWARE</p>
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                <p style="text-align: justify; font-size:20px;">
                Une gamme complète de solution de gestion des temps, contrôle d’accès, SIRH et badgeuses
              </p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us">
        <div  class="container">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <p style="text-align: justify; font-size:20px;">
                Solutions dédiées à l’affichage sportif : tableaux de scores, affichage vidéo LED, pupitre tactile
              </p>
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p style="width: auto; height: 300px; background-color: #28AEF9; color: white; font-size: 80px;
                text-align: center; padding-top: 75px; border: 1px blue solid; border-radius: 20px;">SPORT</p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us" style="background-color:#fafdff;">
        <div  class="container">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-left">
              <p style="width: auto; height: 300px; background-color: #28AEF9; color: white; font-size: 80px;
                text-align: center; padding-top: 75px; border: 1px blue solid; border-radius: 20px;">TIME</p>
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-right">
                <p style="text-align: justify; font-size:20px;">
                Gammes d’horloges avec distribution horaire, système de sonneries et affichage dynamique.
              </p>
            </div>
          </div>
        </div>
    </section>


   
  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>