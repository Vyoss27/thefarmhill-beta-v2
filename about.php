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
    #carousel {
      position: relative;
      height: 400px;
      top: 50%;
      transform: translateY(-50%);
      overflow: hidden;
    }
    #carousel div {
      position: absolute;
      transition: transform 1s, left 1s, opacity 1s, z-index 0s;
      opacity: 1;
    }
    #carousel div img {
      width: 400px;
      transition: width 1s;
    }
    #carousel div.hideLeft {
      left: 0%;
      opacity: 0;
      transform: translateY(50%) translateX(-50%);
    }
    #carousel div.hideLeft img {
      width: 200px;
    }
    #carousel div.hideRight {
      left: 100%;
      opacity: 0;
      transform: translateY(50%) translateX(-50%);
    }
    #carousel div.hideRight img {
      width: 200px;
    }
    #carousel div.prev {
      z-index: 5;
      left: 30%;
      transform: translateY(50px) translateX(-50%);
    }
    #carousel div.prev img {
      width: 300px;
    }
    #carousel div.prevLeftSecond {
      z-index: 4;
      left: 15%;
      transform: translateY(50%) translateX(-50%);
      opacity: 0.7;
    }
    #carousel div.prevLeftSecond img {
      width: 200px;
    }
    #carousel div.selected {
      z-index: 10;
      left: 50%;
      transform: translateY(0px) translateX(-50%);
    }
    #carousel div.next {
      z-index: 5;
      left: 70%;
      transform: translateY(50px) translateX(-50%);
    }
    #carousel div.next img {
      width: 300px;
    }
    #carousel div.nextRightSecond {
      z-index: 4;
      left: 85%;
      transform: translateY(50%) translateX(-50%);
      opacity: 0.7;
    }
    #carousel div.nextRightSecond img {
      width: 200px;
    }

    .buttons {
      position: relative;
      left: 50%;
      transform: translateX(-50%);
      bottom: 10px;
      text-align: center;
    }

  .navbar_bottom {
      overflow: hidden;
      background-color: #0e3510;
      position: fixed;
      bottom: 0;
      width: 100%;
      border-top-right-radius:0;
      border-top-left-radius:10% 100%;
      border-bottom-right-radius:0;
      border-bottom-left-radius:0;
    }

    .navbar_bottom a {
      float: right;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      font-family: "Montserrat", sans-serif;
      font-weight: 700;
      font-size: 13px;
      text-transform: uppercase;
    }

    .navbar_bottom a:hover {
      background: #ff8f0b;
      color: black;
    }

    .navbar_bottom a.active {
      background-color: #66BB6A;
      color: white;
    }
  </style>
</head>

<body>
    <?php $this->load->view("header")?>
    <section id="about">
      <div class="container">

        <header class="section-header" style="">
          <p style="font-size: 25pt;font-family:beau;margin-bottom:1.5%;padding-bottom:0px;margin-top:2%;font-family:coolvetica;color:#2a3b19"> Top of Mind Modern Farming </p>
        </header>

        <div class="row about-cols">

            <!-- <div class="col-md-12 wow fadeInUp" style="margin-bottom:  0px;">
              <p style="text-align:justify">
              &emsp;&emsp;&emsp;The Farmhill merupakan merk dagang di bawah PT Kebun Bumi Lestari yang bergerak dibidang pertanian hidroponik. Dengan menyematkan teknologi pada proses bertani, membuat kami mampu menghasilkan produk-produk hidroponik yang memiliki kualitas tampilan, rasa, dan gizi yang tinggi. Selain itu, proses kultivasi dengan pengelolaan yang efektif membuat kami dapat menyediakan produk hidroponik secara konsisten dengan kuantitas yang optimal.
              </p>
            </div> -->
            <div class="col-md-12 wow fadeInUp">

                  <div id="carousel" >
                    <div class="prev">
                      <img src="<?php echo base_url();?>base/img/aboutus/1.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="selected"> 
                      <img src="<?php echo base_url();?>base/img/aboutus/2.png" alt="" class="img-fluid">
                    </div>

                    <div class="next">
                      <img src="<?php echo base_url();?>base/img/aboutus/3.png" alt="" class="img-fluid">
                    </div>
                  </div>

                  <div class="buttons">
                    <button class= "btn btn-success" id="prev" style="border-radius: 50%;"><i class="ion-arrow-left-a"></i></button>
                    <button class= "btn btn-success" id="next" style="border-radius: 50%;"><i class="ion-arrow-right-a"></i></button>
                  </div>
            </div>
          
            <!-- <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                        <img src="<?php echo base_url();?>base/img/aboutus/Penyedia Produk Sayur.png" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-leaf"></i></div>
                    </div>
                    <h2 class="title">Penyedia Produk Sayur dan Buah  Hidroponik</h2>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col">
                    <div class="img">
                        <img src="<?php echo base_url();?>base/img/aboutus/Penyedia Jasa Pelatihan.png" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-body-outline"></i></div>
                    </div>
                    <h2 class="title">Penyedia Jasa Pelatihan & Pendampingan Pertanian Hidroponik</h2>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col">
                    <div class="img">
                        <img src="<?php echo base_url();?>base/img/aboutus/Penyedia Jasa Perencana.png" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-wrench"></i></div>
                    </div>
                <h2 class="title">Penyedia Jasa Perencana & Pelaksana Pembangunan Bangunan, Peralatan, <br> dan Sistem Pertanian</h2>
                </div>
            </div> -->

        </div>

      </div>


      
    </section><!-- #about -->

	<!--==========================
      Directors Section
    ============================-->
    <section id="bodd" style="">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Board Of Directors</h3>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?php echo base_url();?>base/img/BOD/M JATIARDI FITRIANTORO_CHIEF EXECUTIVE OFFICER.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>M Jatiardi Fitriantoro</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?php echo base_url();?>base/img/BOD/YASIR RAMADHAN_CHIEF OPERATING OFFICER.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Yasir Ramadhan</h4>
                  <span>Chief Operating Officer</span>
                  <div class="social">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #Directors Section -->
	
    <!-- #visi misi -->
    <section id="call-to-action">
    


      <div class="container text-left">
        <h3><u>Visi Kami</u></h3>
        <p> Menjadi penyedia produk & jasa hidroponik terbaik untuk Indonesia</p>
        <br><br>
      </div>
      <div class="container text-left">
        <h3><u>Misi Kami</u></h3>
        <p> 1. Mengembangkan pertanian dengan teknologi modern</p>
        <p> 2. Menghasilkan dan memasarkan produk berkualitas secara berkelanjutan</p>
        <p> 3. Memberdayakan sumber daya milenial sebagai tonggak masa depan bangsa.</p>
      </div>
    </section><!-- #call-to-action -->
    <?php $this->load->view("footer")?>
    
</body>
</html>
