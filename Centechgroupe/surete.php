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
            <li> SÛRETE ELECTRONIQUES</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>CENTECH SÛRETE </h2>       
          <p>Le service de SÛRETE ELECTRONIQUE  de CENTECH est à votre service .</p>
        </div>
        <div   class="row content">
          <div class="col-lg-6" data-aos="fade-right" >
            
            <img src="assets/images/suretec2.png" style="height: 250px;" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <h3 > Maintenance préventive de parcs informatiques</h3>
            <p style="text-align:justify;">
              Un réseau bien construit nécessite toujours un suivi régulier et efficace, tant par souci de règlage des cas d'urgence que par volonté de suivre l'état du matériel, ses évolutions futures... CENTECH GROUPE vous propose de vous appuyer sur son expérience pour aborder ce point en toute sérénité.
            </P>
           
          </div>
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->
    
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

       

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            
            <h3>Surveillance du parc matériel</h3>
            <p style="text-align:justify;">
              Beaucoup de problèmes sur un réseau peuvent être prévus, anticipés. Qu'il s'agisse de problèmes d'espace disque, d'un matériel en fin de vie, il est tout à fait possible d'éviter une partie des situations d'urgence en mettant en place un plan de surveillance efficace et régulier.</br></br>
            Nous sommes alors en mesure de vous indiquer quelle opération mener pour éviter un problème à venir, quel réajustement serait intéressant pour optimiser votre parc par rapport à une nouvelle situation de travail
.           </p>
<h3>Surpervision des serveurs</h3>
            <p style="text-align:justify;">
              Lors de maintenances trimestrielles à mensuelles, nos techniciens étudient l'état physique et logique de vos serveurs, et établissent un rapport préventif vous alertant en cas de problème logiciel ou matériel comme un problème de mémoire, espace disque insuffisant.
            </P>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <img src="assets/images/surete-removebg-preview.png" style="height: 500px;margin-left: 100px;" >
       </div>

        </div>

      </div>
    

    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <h3  style="text-align:center;">Nos  offres</h3>
        <p style="text-align:justify;">
          CENTECH GROUPE ingénierie informatique vous propose de lui confier vos contrats de maintenance, afin de suivre au jour le jour l'évolution de votre parc informatique.
          Au delà de la résolution des problèmes, nous vous conseillerons sur la bonne marche de votre réseau informatique, de la connexion Internet aux machines client
        </p>
   
      </div>
    </section>
    
    
       
        


       

   
  </main><!-- End #main -->

  <?php include('footer.php') ?>
</body>

</html>