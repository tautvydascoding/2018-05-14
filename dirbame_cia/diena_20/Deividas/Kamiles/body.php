<body>
  <!-- navigacija -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#v-header"><img src="img/logo.png" alt="Kamiles lesiai"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#first">Apie mus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#papildai">Papildai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Eshopindex.php" target="_blank">E-shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Kontaktai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- headeris -->

  <header id="v-header" class="v-header container">
    <div class="fullscreen-video-wrap">
      <video autoplay muted src="video1/lenses.mp4" autoplay="" loop="">
       </video>
    </div>
    <div class="header-content featurette-heading ">
      <h1>Matyk ir buk matomas!</h1>
      <p class="lead">Kontaktiniai lesiai, papildai, aksesuarai.</p>
      <a class="btn js-scroll-trigger" href="#first">Suzinok daugiau</a>
    </div>
  </header>

  <!-- main peigas -->

  <main >

    <section id="first">
              <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="info-box">
                          <h2 class="featurette-heading">Apie mus</h2>
                          <p class="lead">Atlikome apklausas, kas labiausiai domina zmones optikos ir akiu prieziuros temomis. Dauguma zmoniu pasiklysta optikos internetinese parduotuvese ir svetainese  nerasdami to ko istikruju iesko. Pas mus rasite svarbiausias prekes - palaikyti sveikatai. Atrinkta ir patikrinta informacija, bei  auksciausios kokybes prekes rinkoje. </p>


                      </article>
                    </div>
                    <hr class="featurette-divider">
          </section>


<div class="container marketing" >
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <?php while($pagrindinis = mysqli_fetch_assoc($rezultatai)) : ?>
    <div class="row featurette" >
      <div class="col-md-7">
        <h2 class="featurette-heading"><?= $pagrindinis['name'];   ?></h2>
        <p class="lead"><?= $pagrindinis['description'];   ?></p>
        <div class="">
          <a href="Eshopindex.php" target="_blank" class="btn btn-outline-light">Prekės</a>
        </div>
      </div>
      <div class="col-md-5" >
        <img class="mainfotos img-fluid mx-auto" src="<?= $pagrindinis['img'];   ?>" alt="">
      </div>
    </div >

    <div id="papildai"></div>
    <hr class="featurette-divider"  >

    <?php $pagrindinis = mysqli_fetch_assoc($rezultatai); ?>
    <div class="row featurette "  >
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?= $pagrindinis['name'];   ?></h2>
        <p class="lead"><?= $pagrindinis['description'];   ?></p>
        <a href="Eshopindex.php" target="_blank" class="btn  btn-outline-light">Prekės</a>
        <a  href="#papildai"></a>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="mainfotos img-fluid mx-auto" src="<?= $pagrindinis['img'];   ?>" alt="">
      </div >
      </div>
      <hr class="featurette-divider">
    <?php endwhile; ?>

    
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->

    <section id="googlemaps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2292.088384714548!2d23.88864561591996!3d54.93646758034293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e71f30d8cd391b%3A0x1519404ea62060c7!2sKaunas+Coding+schlool!5e0!3m2!1slt!2slt!4v1528698023377" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
  </main>

  <!-- footeris -->

  <footer >
    <div class="row contact">
      <div class="col-md-3 text-center">
        <div >
          <a href="#"><img src="img/logo.png" alt="Kamiles lesiai"></a>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <div class="social-bar">
          <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-snapchat-square"></i></a>
        </div>
        <div>
          Coryright CL &copy; 2018
        </div>
      </div>
      <div class="col-md-3 text-justify">
        <div id="contact" >
          <h2>Kontaktai:</h2>
          <p>Tel.: +370 6*** ****</p>
          <p>El.paštas: contactlesiai@gmail.com</p>
        </div>
      </div>
    </div>
  </footer>
