<?php
require 'php/functions.php';
//melakukan query
$buku = query("SELECT * FROM buku")

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <!-- font google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <title>BOOK_ID</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body id="home" class="scrollspy">
  <!-- Nav Bar -->
  <div class="navbar-fixed">
    <nav class="brown darken" role="navigation">
      <div class="nav-wrapper">
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="#home" class="brand-logo logo">
          <i class="material-icons">bookmarks</i>BOOK_ID</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#product">Our Product</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li>
            <a href="php/login.php">
              <button type="" class="waves-effect waves-light btn-large blue darken-2">Login</button>
            </a>
          </li>
        </ul>
      </div>
  </div>
  </nav>

  <!--   Side Nav   -->
  <ul class="sidenav" id="mobile-nav">
    <div class="container">
      <li><a href="#home"><i class="fas fa-home"></i>HOME</a></li>
      <li><a href="#about"><i class="fas fa-building"></i>ABOUT US</a></li>
      <li><a href="#product"><i class="fas fa-book"></i></i>OUR PRODUCT</a></li>
      <li><a href="#contact"><i class="fas fa-phone-square"></i>CONTACT US</a></li>
      <li>
        <a href="php/login.php">
          <button type="" class="waves-effect waves-light btn-small blue darken-2"><i class="material-icons">person_outline</i>Login</button>
        </a>
      </li>
    </div>
  </ul>
  <!-- Akhir Side Nav -->
  <!--   Akhir Nav   -->

  <!-- Slider -->
  <section class="slider scrollpsy">
    <ul class="slides">
      <li>
        <img src="assets/img/slider1.jpg">
        <div class="caption left-align">
          <h1>Welcome To BOOK_ID Store!</h1>
          <h4 class="light grey-text text-lighten-3">Thank You for visiting our Store!</h4>
        </div>
      </li>
      <li>
        <img src="assets/img/slider5.jpg">
        <div class="caption center-align">
          <h3>BOOK Definition</h3>
          <h5 class="light grey-text text-lighten-3">A book is a medium for recording information in the form of writing or images,
            typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.
            The technical term for this physical arrangement is codex (plural, codices )</h5>
        </div>
      </li>
    </ul>
  </section>

  <!-- Akhir Slider -->

  <!-- About Us -->
  <section id="about" class="about scrollspy brown lighten-4">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3" style="padding: 20px;">About Us</h3>
        <div class="col m6 light">
          <h4 class="center light grey-text text-darken-3">What We Are? </h4>
          <p>Book_id is a trusted book store in Bekasi. Established by inspired owners his hobbies in reading and collecting books.
            Book_id can now be purchased online by visiting our partner's media.</p>
        </div>
        <div class="col m6 light">
          <p>NOVEL</p>
          <div class="progress">
            <div class="determinate brown darken" style="width: 95%"></div>
          </div>
          <p>KOMIK</p>
          <div class="progress">
            <div class="determinate brown darken" style="width: 85%"></div>
          </div>
          <p>EDUCATION</p>
          <div class="progress">
            <div class="determinate brown darken" style="width: 70%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About Us --->

  <!-- Paralax --->
  <div class="parallax-container">
    <div class="parallax"><img src="assets/img/bg5.jpg"></div>
  </div>


  <!-- Our Product // Card -->
  <section id="product" class="product scrollspy">
    <h3 class="center light grey-text text-darken-3" style="padding: 20px;">Our Product</h3>
    <div class="buku">
      <?php $i = 1;  ?>
      <?php foreach ($buku as $bk) :  ?>
        <div class="row">
          <div class="col m3 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="assets/img/<?= $bk["gambar"]; ?>">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?= $bk["judul"]; ?><i class="material-icons right">more_vert</i></span>
                <p>
                  <a href="php/detail.php?id_buku=<?= $bk['id_buku'] ?>" <?= $bk["judul"] ?>>Detail Produk</a>
                </p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Deskripsi<i class="material-icons right">close</i></span>
                <p><?= $bk['sinopsis'] ?></p>
              </div>
            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>
        </div>
    </div>
  </section>

  <!-- Akhir Card -->

  <!-- diskon -->
  <div class="diskon scrollspy">
    <div class="container">
      <div class="tulisan">
        <marquee direction="down">
          <h3 class="center black-text">Check this for Discount Info!</h3>
        </marquee>
      </div>
      <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="assets/img/banner1.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="assets/img/banner2.jpg"></a>
        <a class="carousel-item" href="#three!"><img src="assets/img/banner3.jpg"></a>
        <a class="carousel-item" href="#four!"><img src="assets/img/banner4.jpg"></a>
      </div>
    </div>
  </div>

  <!-- Partner -->
  <div class="partner scrollspy">
    <div class="container">
      <h4 class="center light grey-text text-darken-3">Online Store and Media Partner</h4>
      <div class="row">
        <div class="col m6 s12 center">
          <img src="assets/img/tokopedia.png">
        </div>
        <div class="col m6 s12 center">
          <img src="assets/img/shopee.png">
        </div>
        <div class="row">
          <div class="col m6 s12 center">
            <img src="assets/img/jnt.png">
          </div>
          <div class="col m6 s12 center">
            <img src="assets/img/id.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Us -->
  <section id="contact" class="contact scrollspy">
    <div class="container">
      <h3 class="center black-text">Contact Us</h3>
      <div class="row">
        <form>
          <div class="card-panel">
            <h5 class="center">Please fill out this Form!</h5>
            <div class="input-field">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="name" id="name" required class="validate">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <i class="material-icons prefix">email</i>
              <input type="email" name="email" id="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <i class="material-icons prefix">message</i>
              <textarea name="message" id="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
            <button type="submit" class="btn-small blue darken-2">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="page-footer brown">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><i class="fas fa-map-pin"> </i>Our Office</h5>
          <p class="grey-text text-lighten-4"> You can visit our store At Metland Cibitung</p>
          <p>Cluster Taman Ancol No 9 and </p>
          <p>Ruko Nagoya No 10</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></i>Contact Info</h5>
          <ul>
            <li>
              <span><i class="fa fa-map-marker-alt"></i></span>
              <span>Metland Cibitung<br>
                Bekasi, Indonesia</span>
            </li>
            <br>
            <li>
              <span><i class="fas fa-phone"></i></i></span>
              <span><br>+6281 9055 86834</span>
            </li>
            <br>
            <li>
              <span><i class="fa fa-envelope"></i></span>
              <span>
                bookid@gmail.com<br>
                storeidbook@gmail.com
              </span>
            </li>
            <br>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Media Partner</h5>
          <ul>
            <li><a class="white-text" href="#!">Shopee</a></li>
            <li><a class="white-text" href="#!">Tokopedia</a></li>
            <li><a class="white-text" href="#!">JNT</a></li>
            <li><a class="white-text" href="#!">ID Exprees</a></li>
          </ul>
          <ul class="social">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright"></div>
  </footer>


  <!--  Scripts-->

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/41c4d5f501.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>

  <script>
    (function($) {
      $(function() {

        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        // Slider
        $('.slider').slider({
          fullWidth: true,
          indicators: false,
          transition: 600,
          interval: 3000,
          height: 500


        });
        //Parallax
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        // Carousel Banner Diskon
        $('.carousel.carousel-slider').carousel({
          fullWidth: true,
          indicators: false,
          dataindicators: true,
          height: 250
        });
        setInterval(function() {
          $('.carousel.carousel-slider').carousel('next');
        }, 2000);

        //Scrollspy
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });


      });

    })(jQuery);
  </script>

</body>

</html>