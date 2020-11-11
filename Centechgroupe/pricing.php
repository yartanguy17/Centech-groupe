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
          <li><a href="portfolio.php">Portfolio</a></li>
          <li  class="active makeActive"><a  href="Pricing.php">Qui sommes nous?</a></li>
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
          <h2  style="font-size: 40px;">Notre equipe</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Qui sommes nous? Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <p style="text-align: justify;">
            La volonté de ses promoteurs est de permettre aux Entreprises et Organismes de la sous-région Ouest Africaine
            de se mettre au diapason des Nouvelles Technologies
            par un apport de solutions et prestations de qualité,
            ainsi qu’un transfert de compétences et de technologie.
          </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p style="text-align: justify;">
              CENTECH Centre d’Etude des Nouvelles Technologies et Energies est une
              structure technique et commerciale installée au TOGO depuis Juin 2014.
              Elle intègre le Groupe WAVETEC depuis 2016 et devient ainsi le support technique et
              commerciale dans la Zone Afrique Francophone du Groupe Anglais, l’un des leaders
               en Transformation Digitale.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Notre  <strong>Equipe</strong></h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/images/directeur.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href="https://www.facebook.com/TekoStevenSogodo"><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/steven-teko-sogodo-660764118"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Steven Teko Sogodo</h4>
                <span>Directeur général</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/images/bryan4.jpeg" class="img-fluid" alt="" height="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Brayan</h4>
                <span>Chef Designer</span>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>-->

        </div>

      </div>
    </section><!-- End Our Team Section -->

 

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos partenaires</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href="https://www.wavetec.com/"><img src="assets/images/partenaires/wev.png"  class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href=""><img src="assets/images/partenaires/afrique_it.jpeg" style="height:80px;" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/canon.jpg" class="img-fluid" alt="" style="width: 200px; height: 80px;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/cisco.png" class="img-fluid" alt="" style="width: 100px; height: 80px;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/dell.jpg" class="img-fluid" alt="" style="width: 100px; height: 80px;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/sdmo.png" class="img-fluid" alt="" style="width: 120px; height: 80px;">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href=""><img src="assets/images/partenaires/alcatel.jpg"  class="img-fluid" alt="" style="width: 200px; height: 200px;" ></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/wireless.png" class="img-fluid" alt="" style="width: 100px; height: 50px;">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/osram.png" class="img-fluid" alt="" style="width: 150px; height: 80px;">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/avaya.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/expert.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/schneider.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/legrand.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/falmson.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/hyper.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/hp.jpg" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/apc.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/ortea.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/nexans.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/zenit.jpg" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/siemens.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/thorn.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/philips.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/york.jpg" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/helita.png" class="img-fluid" alt="" >
            </div>
          </div>      
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/ciat.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/tdsi.png" class="img-fluid" alt="" >
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/images/partenaires/france-air.png" class="img-fluid" alt="" style="width: 250px; height: 100px;" >
            </div>
          </div>

          

        </div>
        


      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>


</body>

</html>