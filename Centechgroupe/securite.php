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
          <ol>
            <li><a href="index.php">Acceuil</a></li>
            <li>SECURITE INFORMATIQUE</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CENTECH GROUPE SECURITE</h2>
          
          <p>Le service de securité informatique de CENTECH est à votre service .</p>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/images/secureimg.jpg"  style="height: 400px;"/>
            
               
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <h3>Pourquoi sécuriser l'informatique de votre entreprise?</h3>
            <div style="text-align: justify;">
              La nécessité de protéger les données sensibles ou confidentielles de l'entreprise
         implique la mise en place d'une politique de sécurité informatique.
         Certaines données ne doivent pas être accessibles de l'extérieur ou visibles par des groupes d'utilisateurs internes non autorisés.
          La vulnérabilité de ces données n'est pas envisageable,
           elles doivent être protégées contre tout accès non autorisé. 
           Les risques sont importants, les données RH ne doivent absolument pas être diffusées à l'ensemble du personnel.
            Les données concernant les clients de l'entreprise ne doivent pas non plus être visibles de l'extérieur. 
            De manière générale toutes les données sensibles ou confidentielles doivent faire l'objet d'une politique de sécurité informatiquevisant à les protéger contre tout accès non autorisé.
            
            </div>
            
            <p class="font-italic">
            
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-left">
            
            <h3>Comment protéger les données de l'entreprise ?</h3>
            <p style="text-align: justify;">
              Dans le cadre de nos prestations de sécurité informatique, nous proposons un audit informatique pour déterminer les points de vulnérabilité de votre système d'information. Lors de cet audit nous étudions les possibilités d'accès et la pertinence des éléments de sécurité en place. Dans une seconde phase nous prescrirons l'installation d'éléments de sécurité tel qu'un Firewall, la mise en oeuvre d'une politique de gestion de compte utilisateur, des liaisons VPN, des solutions de cryptage des données.
           </p>
               
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/images/10.jpg" style="height: 300px;margin-left: 150px;">
            
           </div>
               
  

      </div>
    </section><!-- End About Us Section -->

  
    
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/images/securiteimg-removebg-preview.png"  style="height: 300px;"/>
            
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            
         <h3>Qui est succeptible de pirater vos données ?</h3>
         <p style="text-align: justify;">
          Il faut distinguer les risques internes et externes. En général les risques internes sont sous-estimés, ce qui créé des points sensibles et des risques réels de diffusion d'informations confidentielles. En ce qui concerne les risques internes les risques sont multiples ; personnels de passage, salariés indélicats, erreurs de manipulations. Les attaques de l'extérieur sont plus nombreuses ; pour les contrer il est nécessaire de mettre en place les éléments de sécurité efficaces. Généralement  les sources d'attaques possibles sont les pirates ou les concurrents.
              
         </p>
     
               
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
    
            </div>
            
            <p class="font-italic">
            
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>