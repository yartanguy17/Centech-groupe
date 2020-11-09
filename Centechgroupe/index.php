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
          <li class="active makeActive" ><a href="index.php">Acceuil</a></li>       

            <?php include('servicesHover.php')?> 

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
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/images/slider1.jpg);">
          <div class="carousel-container">
            
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image:url(assets/images/digi10.jpg);">
          <div class="carousel-container">
            
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/images/slider3.jpg);">
          <div class="carousel-container">
            
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><strong>Bienvenue chez <span class="centech">CENTECH</span></strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <p>              
              <span class="centech">Centre d’Etude des Nouvelles Technologies et Energies</span> est une 
              structure technique et commerciale installée au TOGO depuis Juin 2014. 
              Elle intègre le Groupe WAVETEC depuis 2016 et devient ainsi le 
              support technique et commerciale dans la Zone Afrique Francophone du Groupe Anglais, 
              l’un des leaders en Transformation Digitale.  
            </p>

            <img src="assets/images/logo1.jpeg" style="height: 400px; margin-top: -17px; margin-left: -70px;" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            <span class="centech">CENTECH</span> fonde sa principale activité sur l’Ingénierie Informatique, la Transformation Digitale 
            et l’Intégration des Réseaux d’entreprises et urbains.  
            Pour ses décideurs, la culture de l’excellence et du travail bien fait est le cheval de bataille 
            de tous les jours.
 
            </p>
            
            <img src="assets/images/img.jpg" style="height: 500px;" >
          </div>
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->

   

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
        </div>

        

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <img src="assets/images/TRANSFORMATION DIGITALE/TRANSFORMATION_DIGITALE.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">DIGITALISATION</h4>
              <a href="assets/images/TRANSFORMATION DIGITALE/TRANSFORMATION_DIGITALE.jpg" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus"></i></a>
              <a href="http://www.centech-togo.com/"  title="TRANSFORMATION_DIGITALE" class="details-link" ><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-web">
            <img src="assets/images/Capturearchive 2.PNG" style="height: 250px;" class="img-fluid" alt="">
            <div class="portfolio-info">
                </figure>
              <h4 style="font-size: 15px;"> ARCHIVAGE ET GED</h4>
              <a href="assets/images/Capturearchive 2.PNG"  data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
              <a href="ged.php" class="details-link"title="ARCHIVAGE NUMERIQUE ET GED"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-app">   
            <img src="assets/images/INFOGERANCE & LEASING/INFOGERANCE & LEASING.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 16px;"> INFOGERANCE &  <br/> LEASING</h4>
              <a href="assets/images/INFOGERANCE & LEASING/INFOGERANCE & LEASING.jpg" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus"></i></a>
              <a  href="infogerance.php"  class="details-link" title="INFOGERANCE & LEASING"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/images/CENTECH SHOP/miagbo.PNG" style="height: 260px;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">SHOP</h4>
              <a href="assets/images/CENTECH SHOP/miagbo.PNG" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-web">
            <img src="assets/images/moneycapture.PNG" style="height: 260px;" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">MOBILE MONEY</h4>
              <a href="assets/images/moneycapture.PNG" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus">
                
              </i></a>
              <a href="money.php" class="details-link" title="MOBILE MONEY"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <img src="assets/images/SECURITE INFORMATIQUE/SECURITE_INFORMATIQUE.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 16px;" >SECURITE <br/> INFORMATIQUE</h4>
              
              <a href="assets/images/SECURITE INFORMATIQUE/SECURITE_INFORMATIQUE.jpg" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus"></i></a>
              <a href="securite.php" class="details-link" title="SECURITE INFORMATIQUE"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/images/SECURITE INFORMATIQUE/su.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 16px;">SÛRETE <br/>ELECTRONIQUE</h4>
              
              <a href="assets/images/SECURITE INFORMATIQUE/su.jpg" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus"></i></a>
              <a href="surete.php" class="details-link" title="SÛRETE ELECTRONIQUE"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/images/FORMATION ET CERTIFICATION/FORMATION ET CERTIFICATION.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">FORMATION</h4>
              
              <a href="assets/images/FORMATION ET CERTIFICATION/FORMATION ET CERTIFICATION.jpg" data-gall="portfolioGallery" class="venobox preview-link" ><i class="bx bx-plus"></i></a>
              <a href="formation.php"  title="FORMATION ET CERTIFICATION" class="details-link"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 portfolio-item filter-web">
            <img src="assets/images/INCUBATION DE STARTUP/INCUBATION_DE_STARTUP.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">STARTUPS</h4>
              
              <a href="assets/images/INCUBATION DE STARTUP/INCUBATION_DE_STARTUP.jpg" data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
              <a    href="incubation.php" class="details-link" title="INCUBATION DE STARTUPS"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md- 4 portfolio-item filter-web">
            <img src="assets/images/ORGANISATION DE FORUMS ET SALONS TECHNOLOGIQUES/emotion-horloge.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">GESTION DE TEMPS</h4>
              
              <a href="assets/images/ORGANISATION DE FORUMS ET SALONS TECHNOLOGIQUES/emotion-horloge.jpg" data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
              <a   href="forum.php" title="ORGANISATION DE FORUMS ET SALONS TECHNOLOGIQUES" class="details-link" ><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 portfolio-item filter-web">
            <img src="assets/images/IMMOBILIER/IMO.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4 style="font-size: 15px;">IMMOBILIER</h4>
              
              <a href="assets/images/IMMOBILIER/IMO.jpg" data-gall="portfolioGallery" class="venobox preview-link"><i class="bx bx-plus"></i></a>
              <a   href="immobilier.php"  title="IMMOBILIER" class="details-link" title="INCUBATION DE STARTUPS"><i class="bx bx-link"></i></a>
            </div>
          
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