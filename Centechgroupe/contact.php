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
          <li ><a  href="Pricing.php">Qui sommes nous?</a></li>
          <!--<li><a href="blog.php">Blog</a></li>-->
          <li class="active makeActive"><a href="contact.php">Contact</a></li>

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
          <h2 style="font-size: 40px;">Contact</h2>
          
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
          <iframe id="theMap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.876232441444!2d1.2168964!3d6.1348598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffed327808a262c1!2sCentech%20-%20Wavetec%20Afrique%20Francophone!5e0!3m2!1sfr!2stg!4v1604585442700!5m2!1sfr!2stg" height="456" frameborder="0" style="border:0; box-shadow: 6px 6px 30px black; margin:50px; border-radius:10px; overflow:auto;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
    </div>


      
    

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>138 Boulevard du 13 janvier<br>Hanoukopé Lomé-TOGO</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>wavetec@centech-togo.com<br>contact@example.com</p>
                </div>

                <div  class="col-lg-4 info mt-4 mt-lg-0">
                  <i   class="icofont-phone"></i>
                  <h4>Appel:</h4>
                  <p>+228 99 01 62 66<br></p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message est envoye!!</div>
              </div>
              <div class="text-center" ><button  style="background-color: #2fc1e6;" type="submit">Envoyer le message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php
    include('footer.php') 
  ?>


  <a  style="background-color: #2fc1e6;" href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include('scripts.php') ?>

</body>

</html>