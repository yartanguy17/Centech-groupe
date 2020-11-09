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

          <li class="active makeActive" onmouseover="makeVisible()" onmouseout="makeUnvisible()">
          <a href="services.php">Services</a>
                <div class="vision">
                    <div class="vision_dropdown">
                    <div class="row">
                        <div class="col-4">
                        <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <li><a class="nav-link active" id="v-pills-services-tab" data-toggle="pill" href="#v-pills-services" role="tab" aria-controls="v-pills-services" aria-selected="true">INGENIEURIE INFORMATIQUE</a></li>
                            <li><a class="nav-link" id="v-pills-portfolio-tab" data-toggle="pill" href="#v-pills-portfolio" role="tab" aria-controls="v-pills-portfolio" aria-selected="false">INFOGERANCE & LEASING</a></li>
                            <li><a class="nav-link" id="v-pills-description-tab" data-toggle="pill" href="#v-pills-description" role="tab" aria-controls="v-pills-description" aria-selected="false">SECURITE INFORMATIQUE</a></li>
                            <li><a class="nav-link" id="v-pills-blog-tab" data-toggle="pill" href="#v-pills-blog" role="tab" aria-controls="v-pills-blog" aria-selected="false">AUDIT INFORMATIQUE</a></li>
                            <li><a class="nav-link" id="v-pills-digitale-tab" data-toggle="pill" href="#v-pills-digitale" role="tab" aria-controls="v-pills-digitale" aria-selected="false">TRANSFORMATION DIGITALE</a></li>
                            <li><a class="nav-link" id="v-pills-mmoney-tab" data-toggle="pill" href="#v-pills-mmoney" role="tab" aria-controls="v-pills-mmoney" aria-selected="false">MOBILE MONEY</a></li>
                            <li><a class="nav-link" id="v-pills-courant-tab" data-toggle="pill" href="#v-pills-courant" role="tab" aria-controls="v-pills-courant" aria-selected="false">CÂBLE COURANT FORT ET FAIBLE</a></li>
                            <li><a class="nav-link" id="v-pills-electronique-tab" data-toggle="pill" href="#v-pills-electronique" role="tab" aria-controls="v-pills-electronique" aria-selected="false">SÛRETE ELECTRONIQUE</a></li>
                            <li><a class="nav-link" id="v-pills-archivage-tab" data-toggle="pill" href="#v-pills-archivage" role="tab" aria-controls="v-pills-archivage" aria-selected="false">ARCHIVAGE NUMERIQUE ET GED</a></li>
                            <li><a class="nav-link" id="v-pills-incubation-tab" data-toggle="pill" href="#v-pills-incubation" role="tab" aria-controls="v-pills-incubation" aria-selected="false">INCUBATION DE STARTUPs</a></li>
                            <li><a class="nav-link" id="v-pills-forum-tab" data-toggle="pill" href="#v-pills-forum" role="tab" aria-controls="v-pills-forum" aria-selected="false">FORUMS ET SALONS TECHNOLOGIQUES </a></li>
                            <li><a class="nav-link" id="v-pills-certification-tab" data-toggle="pill" href="#v-pills-certification" role="tab" aria-controls="v-pills-certification" aria-selected="false">FORMATION ET CERTIFICATION</a></li>
                        </nav>
                        </div>                
                        <div class="col-8" >
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab" style="overflow-x: hidden;">
                            <p>Lorem ipsum dolor sit amet. <br> Lorem ipsum dolor sit amet. <br> lorem</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-portfolio" role="tabpanel" aria-labelledby="v-pills-portfolio-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-description" role="tabpanel" aria-labelledby="v-pills-description-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-blog-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-digitale" role="tabpanel" aria-labelledby="v-pills-digitale-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-mmoney" role="tabpanel" aria-labelledby="v-pills-mmoney-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-courant" role="tabpanel" aria-labelledby="v-pills-courant-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-electronique" role="tabpanel" aria-labelledby="v-pills-electronique-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-archivage" role="tabpanel" aria-labelledby="v-pills-archivage-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-incubation" role="tabpanel" aria-labelledby="v-pills-incubation-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-forum" role="tabpanel" aria-labelledby="v-pills-forum-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-certification" role="tabpanel" aria-labelledby="v-pills-certification-tab">...</div>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
          </li>
          <li><a href="portfolio.php">Portfolio</a></li>
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
          <h2 style="font-size: 40px;">Services</h2>
          
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card">
            <img src="assets/images/Capturewave1.PNG"  > 
            <div class="card-body">
              <h5 class="card-title">Système de gestion des files d'attente</h5>
              <p class="card-text">La solution d'entreprise clé en main de Wavetec est conçue pour aider les entreprises à gérer efficacement les zones de service, à réduire les temps d'attente et à améliorer l'efficacité du service.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/images/wave2.PNG" > 
            <div class="card-body">
              <h5  class="card-title">Commentaires des clients</h5>
              <p class="card-text">Opinion Plus - Un système de rétroaction avancé qui permet aux entreprises de collecter des informations en temps réel sur les opinions des clients et les expériences de service.</p>
              
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/images/wave3.PNG"  > 
            <div class="card-body">
              <h5 class="card-title">Kiosques libre-service</h5>
              <p class="card-text">Notre gamme de bornes libre-service donne à vos clients le choix et la flexibilité d'effectuer leurs transactions à n'importe quel endroit de manière plus pratique.</p>
              
            </div>
          </div>
        </div>

      </div>
      </div>
    </section>
    

    

  
    

  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>
  
  <a  style="background-color: #2fc1e6;" href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <?php include('scripts.php') ?>

</body>

</html>