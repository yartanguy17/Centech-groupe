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
              <li>INFOGERANCE & LEASING</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Qui sommes nous? Section ======= -->
    <section   id="about-us" class="about-us">
      <div  class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <p>
              Pour les clients qui désirent externaliser leur système
               d’information, CENTECH propose ses services d’infogérance
                sur site.
               </p>
               <img src="assets/images/info/info3.jpg" style="height: 300px;" width="auto;" />
             </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p class="font-italic" style="margin-top: 100px;" >
              <p style="text-align: justify;"> En déléguant la gestion et la maintenance de votre parc informatique à un professionnel vous pouvez garder vos ressources sur le cœur de votre métier.
                Nos équipes prennent le relais du collaborateur en charge du service informatique, afin de vous proposer, selon votre besoin, des prestations d’accompagnement diverses
                </p>
          </div>
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->
    <section   style="background-color:mintcream;" id="about-us" class="about-us">
      <div  class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            
              
             </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <ul>
              <li><i class="ri-check-double-line"></i> Audit et conseil</li>
              <li><i class="ri-check-double-line"></i> Installations et paramétrages</li>
              <li><i class="ri-check-double-line"></i>Gestion et exploitation quotidienne du parc informatique</li>
              <li><i class="ri-check-double-line"></i>Définition et application des politiques de sécurité</li>
              <li><i class="ri-check-double-line"></i> Maintenance et support utilisateur</li>
             
            </ul> 
            <p>Ces offres d’infogérance s’adaptent à la taille de votre parc informatique, 
              à vos logiciels métier et à vos usages.</p> 
          </div>
        </div>

      </div>
    </section>
    <section   id="about-us" class="about-us">
      <div  class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <p> Les avantages de l’infogérance sur site:</p>
            <ul>
              
              <li><i class="ri-check-double-line"></i> 	Conservation de votre infrastructure en interne,</li>
              <li><i class="ri-check-double-line"></i> seuls la gestion et l’exploitation sont déléguées </li>
              <li><i class="ri-check-double-line"></i> 	Economie d’une ou plusieurs ressources pour la gestion de votre parc</li>
              <li><i class="ri-check-double-line"></i> Souplesse et évolutivité des solutions offertes en fonction de vos besoins </li>
              <li><i class="ri-check-double-line"></i> 	Infrastructure informatique performante et sécurisée </li>
              <li><i class="ri-check-double-line"></i> 	Accompagnement par un expert pour vous conseiller dans vos choix</li>
              <li><i class="ri-check-double-line"></i> Cependant, à tout moment, il vous est possible d’évoluer et de choisir entre
                l’infogérance sur site ou l’externalisation partielle ou totale de votre système
                d’information.</li>
              </ul>
              <p style="text-align: justify;">   Pour tous les clients sous contrat de maintenance CENTECH dispose d’une interface en ligne accessible 24/ 24h, 7/7j
                                        pour la gestion de vos demandes d’interventions, le suivi des incidents et de leur résolution et pour toutes demandes
                                        spécifiques.</p>
            
               
             </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <img src="assets/images/infog2.jpg" style="margin-left : 100px;">
            
          </div>
        </div>

      </div>
    </section>
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <h3 >Nous intervenons  sur différents aspects :</h3>
        <img src="assets/images/internet.jpg" style="float: left;height: 300px;">
       <div style="text-align:right;">
        <p  >    	Diagnostic et identification de la panne</p>
        <p >     Établissement de devis pour remplacer le matériel en cause</p>
        <p >     Remplacement des pièces</p>
        <p > 	Configuration de poste utilisateurs ou de serveurs</p>
    
   
      </div>
        
      </div>
    </section>
    <section   style="background-color:mintcream;" id="about-us" class="about-us">
      <div  style="text-align: center;" class="container" data-aos="fade-up">
        <div class="section-title">
         
        </div>
        
        </div>

      </div>
    </section>
    <div class="container">
      
    </div>

    
 


    

   
  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>