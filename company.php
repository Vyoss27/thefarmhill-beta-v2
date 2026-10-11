
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Farmhill</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>base/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>base/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>base/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
  <link href="<?php echo base_url();?>base/lib/animate/animate.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>base/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>base/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>base/css/style.css" rel="stylesheet">
  <style>
      [class*="col-"] {
        float: left;
        margin-top: 6%;
        width: 100%;
      }

      @media only screen and (min-width: 600px) {
        .video{
          
        }
      }

      @media only screen and (min-width: 768px) {
        .video{
          
        }
      }
      #mySidenav a {
        position: absolute;
        left: -80px;
        transition: 0.3s;
        padding: 15px;
        width: 150px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 0 5px 5px 0;
      }

      #mySidenav a:hover {
        left: 0;
      }

      #about {
        top: 20px;
        background-color: #04AA6D;
      }

      #blog {
        top: 80px;
        background-color: #005945;
      }

      #projects {
        top: 140px;
        background-color: #005945;
      }

      #contact {
        top: 200px;
        background-color: #005945;
      }
  </style>
</head>

<body>

<?php $this->load->view("header")?>
  
<section id="intro" style="background: url('<?php echo base_url();?>base/img/BG/BG_NEW_USE.png') center top no-repeat fixed;min-height:100vh">
    
    <div class="intro-container">
    
      <div class="row">
        <div class="col-md-12 video">
          <div id="mySidenav" class="sidenav">
            
            <a href="<?php echo base_url();?>index.php/Welcome/modern" id="blog" title=""><span style="font-size:7.5pt">Modern Farming &nbsp;&nbsp;</span><img class="img-fluid" src="<?php echo base_url();?>base/img/icon/product.png" alt="" title="" style="width:30px;"/> </a>
            <a href="https://wa.me/6282119325262" id="projects" title="Hubungi Kami">Contact &nbsp;&nbsp;<img class="img-fluid" src="<?php echo base_url();?>base/img/icon/contact.png" alt="" title="" style="width:30px;"/></a>
            <a href="https://wa.me/6282135859947" id="contact" title="Pesan Sekarang">Chat &emsp;&emsp;<img class="img-fluid" src="<?php echo base_url();?>base/img/icon/chat.png" alt="" title="" style="width:30px;"/></a>
          </div>
          <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
              <video width="100%" controls autoplay="autoplay">
                <source src="<?php echo base_url();?>base/video/video.mp4" type="video/mp4">
              </video>
              <label style="font-size:10pt;color:white">Scroll Down<br><img class="img-fluid" src="<?php echo base_url();?>base/img/scroll.gif" alt="" title="" style="width:65px;"/></label>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #intro -->
  <main id="main">
  <!-- <section id="mainmenu">

  </section>#services -->


<!-- #services -->
    <!--================================
        Learn
    ==================================-->
  
    <!--Melon Muter-->
    <section id="services" style="min-height:100vh">
      <div class="container">
        <div class="row">
            <div class="col-md-6" id="" >
              <img src="<?php echo base_url();?>base/img/muter_2.gif" class="img-fluid" alt="">
            </div>
            <div class="col-md-6" id="" style="text-align: center;padding: 30px 0;font-weight:BOLD;font-size:32pt;color:#2a3b19;">
                <text>TASTE BETTER, <br> LIVE HEALTHIER</text> <br><br>
                <iframe width="475" height="230" src="https://www.youtube.com/embed/u0GYkA-E6nE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </section>
    <!--end-->
    <!--Mengapa Hidroponil-->
    <section id="portfolio_home" style="min-height:100vh">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" style="text-align: center;margin-bottom:5% ">
            <!-- <img src="<?php echo base_url();?>base/img/BG/judul kenapa hidroponik.png" class="img-fluid" alt="" style=""> -->
            <div class="centered_judul">
              <h2 style="text-align:center !important;font-family:coolvetica;color:#2a3b19;"><b><br><br>Mengapa Harus Hidroponik?<br></b></h2>
            </div>
          </div>
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="skills-content"><br>
              <p style="text-align:justify">Sistem hidroponik menggunakan media tanam yang ‘netral’ sehingga memungkinkan petani untuk mengelola nutrisi tanaman secara presisi. Selain itu, Teknik pengairan dengan menggunakan drip fertigation memastikan nutrisi yang diberikan diserap secara optimal oleh tanaman. Teknik sirkulasi air dan treatment sebelum tanam membuat produk hidroponik bebas dari residu pestisida yang berbahaya. Selain itu, sistem hidroponik memungkinkan jarak tanam dilakukan secara lebih rapat sehingga tonase panen/m2 jauh lebih besar dibandingkan penanaman konvensional. Proses pengairan dilakukan & dikontrol dengan bantuan mesin sehingga memudahkan pekerjaan petani. </p>
            </div>
          </div>  
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp text-center" data-wow-delay="0.1s">
            <img src="<?php echo base_url();?>base/img/png/hematair.png" class="img-fluid" alt="" style="width:150px;">
            <h3>Hemat Air</h3>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp text-center" data-wow-delay="0.1s">
            <img src="<?php echo base_url();?>base/img/png/Energy.png" class="img-fluid" alt=""style="width:150px;">
            <h2>Hemat Tenaga</h2>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp text-center" data-wow-delay="0.2s">
            <img src="<?php echo base_url();?>base/img/png/Lahan.png" class="img-fluid" alt="" style="width:150px;">
            <h3>Hemat Lahan</h3>
          </div>
        </div>
      </div>
    </section>
    <!--End-->
    <section id="clients" class="wow fadeInUp" style="min-height:100vh">
      <div class="container">

        <div class="row" style="text-align:center;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp" style="text-align: center;margin-bottom:5%; margin-top:10%; ">
            <!-- <img src="<?php echo base_url();?>base/img/BG/judul kenapa hidroponik.png" class="img-fluid" alt="" style=""> -->
            <div class="centered_judul">
              <h1 style="text-align:center !important;font-family:coolvetica"><b>Sertifikasi Produk<br><br></b></h1>
            </div>
          </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <div class="">
                <img src="<?php echo base_url();?>base/img/SERTIFIKASI/new/LOGO GAP.png" alt="" class="image-fluid" style="width:250px;">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <div class="">
                <img src="<?php echo base_url();?>base/img/SERTIFIKASI/new/LOGO HALAL.png" alt="" class="image-fluid" style="width:250px;">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="">
                <img src="<?php echo base_url();?>base/img/SERTIFIKASI/new/PRIMA-2.png" alt="" class="image-fluid" style="width:250px;">
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="">
                <img src="<?php echo base_url();?>base/img/SERTIFIKASI/new/PRIMA-3.png" alt="" class="image-fluid" style="width:250px;">
              </div>
            </div>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Portfolio Section
    ============================-->
    <?php $this->load->view("footer")?>


</body>
</html>
