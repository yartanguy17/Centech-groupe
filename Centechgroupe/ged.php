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
            <li> ARCHIVAGE NUMERIQUE ET GESTION ELECTRONIQUE DE DOCUMENTS</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Qui sommes nous? Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/images/Capturearchive.PNG" style="height: 200px;margin-bottom: 50px;"/>
          <p>CENTECH, qualifie les besoins, identifie les goulots d’étranglements et résout les problématiques documentaires des entreprises.</p>
      </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <ul>
              <li><i class="ri-check-double-line"></i> Sans cesse formées aux dernières technologies du secteur, nos équipes sont certifiées sur tous les produits distribués, à un haut niveau, et reconnues par les éditeurs leaders du marché.</li>
              <li><i class="ri-check-double-line"></i> Nous organisons le transfert de compétences afin de répondre à leur besoin d’autonomie.</li>
              <li><i class="ri-check-double-line"></i>  Nous organisons le transfert de compétences afin de répondre à leur besoin d’autonomie.</li>
            </ul>
            <p class="font-italic">
                Nous accompagnons nos partenaires distributeurs et intégrateurs selon leurs besoins . Nous organisons le transfert de compétences afin de répondre à leur besoin d’autonomie.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos compétences</strong></h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="assets/images/ged/cp.png" style=" margin-bottom:20px;" alt="Capture" class="img-responsive"/>
              </div>
              <p style="text-align: justify;">
                La capture permet de faire de tout document une valeur ajoutée pour l’entreprise.
              La numérisation simple d’un document crée une image au contenu difficilement exploitable
              Couplée avec une solution de routage plus ou moins automatisée, les solutions de capture permettent d’alimenter la plateforme d’informations transversale qu’est la GED, les process workflow et toutes les applications tierces dans l’entreprise.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <img src="assets/images/ged/dem.png" style=" margin-bottom:20px;" alt="Capture" class="img-responsive">
              </div>
              <p  style="text-align: justify;"> 
                La dématérialisation n’est pas une finalité en soi, ni une étape unique, c’est la composante indispensable d’un projet de gestion électronique de documents et d’automatisation de process métier. La numérisation est la première pierre d’une chaîne de traitement automatisée et dépend à la fois du matériel et des logiciels qui vont traiter le fichier et ses données, pour en tirer parti.
             </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <img src="assets/images/ged/arch.png" style=" margin-bottom:20px;" alt="Capture" class="img-responsive">
              </div>
              <p  style="text-align: justify;">
                Les informations contenues dans les documents d’une organisation, quelque que soient leur nature, constituent le noyau de son activité. Une solution de GED (gestion électronique de documents) ou ECM (entreprise content management – gestion de contenus) constitue un outil transversal essentiel à la performance de l’entreprise.
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <img src="assets/images/ged/accompag.png"  style="height: 100px; margin-bottom:20px;" alt="Capture" class="img-responsive">
              </div>
              <p style="text-align: justify;">
               
                <strong> Accompagnement </strong>et conduite de projet
                Maîtrise du processus par des ressources expertes en gestion de projet et services de conduite du changement
            </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <img src="assets/images/ged/formation.png"  style="height: 100px; margin-bottom:20px;" alt="Capture" class="img-responsive">
              </div>
              <p style="text-align: justify;">
                <strong>Formations, certifications et transfert </strong>de compétences
                Formation utilisateurs et administrateurs,  certification partenaires
            </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <img src="assets/images/ged/suivi.png"  style="height: 100px;  margin-bottom:20px;" alt="Capture" class="img-responsive">
              </div>
              <p style="text-align: justify;">
                <strong>Suivi & Maintenance</strong>
                Support des installations, mise en relation avec les éditeurs et assistance à la mise à jour des logiciels
            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    

   
  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>