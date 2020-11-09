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
              <li>MOBILE MONEY</li>
            </ol>
          </div>
        </div>

      </div>
      
    </section><!-- End Breadcrumbs -->
    <div class="container">

    </div>
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/images/money/money.jpg" style="height: 350px;" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              Qu’est-ce que le <strong>  Mobile Money</strong>  ?</br>
              Le<strong>  Mobile Money</strong> est une technologie qui permet aux gens de recevoir,
              garder et dépenser de l’argent en utilisant un téléphone portable.
            </p>
            <ul >
              <span>Envoi et dépenses:</span>
              <li style="list-style-type:square;">En utilisant le menu ou l’application du portefeuille mobile sur leur téléphone portable, les utilisateurs peuvent transférer des fonds à quelqu’un ou payer des sociétés comme des magasins ou des restaurants.</li>
              <li  style="list-style-type:square;">Les utilisateurs peuvent aussi retirer de l’argent de leur portefeuille mobile auprès des agences dans leur pays.</li>
              <li  style="list-style-type:square;">Les portefeuilles mobiles sont une alternative populaire aux espèces et aux banques parce qu’ils sont faciles à utiliser, sécurisés et on peut les utiliser partout où il y a un signal de téléphone portable</li>
            </ul>
           
          </div>
        </div>

      </div>
    </section><!-- End Qui sommes nous? Section -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <div>Envoyer vers un compte Mobile Money:</br>
              Si vous avez déjà envoyé un dépôt bancaire ou un
              retrait d’espèces, vous pouvez vouloir essayer un transfert vers un portefeuille mobile.</br>
              Les transferts vers un
              mobile se réalisent instantanément d’habitude, jour comme nuit. </br>
              Le bénéficiaire du transfert n’a pas besoin de se déplacer pour le recevoir.</br>
              Les bénéficiaires recevront une notification sur leur téléphone portable quand
              l’argent est crédité à leur compte. Les expéditeurs du transfert recevront aussi
              une notification une fois le transfert terminé.
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <div class="container" data-aos="fade-up">
                <div >
                <img src="assets/images/money/transfer.jpg" style="height: 250px;">
                </div>

              </div>
           
          </div>
        </div>
          
      </div>

    </section>
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div  style="text-align: justify;" class="row content">
          Envoyer vers un portefeuille mobile est facile avec CASH MONEY. 
           En fait, nous sommes connectés à plus de services de Mobile Money que tout autre fournisseur de
             transfert d’argent.
            Nous envoyons toujours votre argent aux personnes que vous aimez rapidement.
       Comment?  Nous avons déjà des fonds dans tous les pays disponibles, donc il n'y a pas d'attente. 
          Et, dès que votre transaction sera terminée, vous et votre destinataire recevrez un SMS et un courrier électronique.
        </div>
        
      </div>

    </section>
    
      
        

   
  </main><!-- End #main -->

  <?php
    include('footer.php') 
  ?>

</body>

</html>