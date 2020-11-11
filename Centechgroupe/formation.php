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
          <ol>
            <li><a href="index.php">Acceuil</a></li>
            <li>FORMATION</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->



      <section   id="about-us" class="about-us">
        <div  class="container">
          <div class="row content">
          <div class="col-12"  data-aos="fade-down">
              <p style="font-size: 50px; text-align:center;">Nos Certifications <hr></p>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <img src="assets/img/prime.jpg" style="height: 300px;" width="auto; border-radius: 20px;" />
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p class="font-italic" >
                <p style="text-align: justify; font-size:20px;">
                Professionnel ou entreprise à la recherche d’une homologation ou 
                qualification en virtualisation, gestion de réseau et de système, 
                marketing numérique, gouvernance SI, cloud, bureau, etc.
              </p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us" style="background-color:#fafdff;">
        <div  class="container">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <img src="assets/img/perfect.jpg" style="height: 300px;" width="auto; border-radius: 20px;" />
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p class="font-italic" >
                <p style="text-align: justify; font-size:20px;">
                Professionnel particulier ou étudiant à la recherche d’une homologation, 
                aptitude ou réorientation autour d'une carrière numérique et financez vous-même la formation
              </p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us">
        <div  class="container">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <img src="assets/img/level.jpg" style="height: 300px;" width="auto; border-radius: 20px;" />
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p class="font-italic">
                <p style="text-align: justify; font-size:20px;">
                Souhaitez-vous améliorer vos connaissances numériques de façon simple et optimisé, 
                vous pouvez jouir de nos très courts séminaires sur divers sujets captivants.
              </p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us" style="background-color:#fafdff;">
        <div  class="container">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <img src="assets/img/services.jpg" style="height: 300px;" width="auto; border-radius: 20px;" />
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p class="font-italic">
                <p style="text-align: justify; font-size:20px;">
                Besoin d’une équipe professionnelle pour améliorer vos supports de communication, 
                la maintenance de votre réseau et système ou l’organisation d’un séminaire.
              </p>
            </div>
          </div>
        </div>
    </section>

    <section   id="about-us" class="about-us">
        <div  class="container">
          <div class="row content">
            <div class="col-12"  data-aos="fade-down">
              <p style="font-size: 50px; text-align:center;">Nos Formations <hr></p>
            </div>
            <div class="col-12" data-aos="fade-up" style="text-align: justify; font-size: 20px;">
              <p><i class="bx bx-circle"></i>Administration Réseaux et systèmes (CCNP security/ sVPN 300-730, CCNA 200-301, 
              CCNP Entreprise | ENARSI, CCNP Entreprise | ENCOR, MCSA 70-412 : Configuration des services avancés 
              Win Server 2012 R2, MCSA 70-411 : Administration de Win Server 2012 R2, MCSA 70-410 : Installation 
              et configuration, CCNP security / scor 350-701 )</p>
              <p><i class="bx bx-circle"></i> ICDL (Outils bureautiques Avancés, excel avance, excel base, icdl standard)</p>
              <p><i class="bx bx-circle"></i> Métiers du web (Internationale en Marketing Digital DMI Pro)</p>
              <p><i class="bx bx-circle"></i> Sessions programmées (CCNP Entreprise | ENCOR, MCSA 70-410 : Installation et 
              configuration, CCNP security / scor 350-701, Internationale en Marketing Digital DMI Pro)</p>
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