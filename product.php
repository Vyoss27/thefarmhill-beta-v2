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

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
    .hijautua:{
      color: #2b5223;
    }
    .hijaumuda:{
      color: #548a4e;
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
  <main id="main"><br><br>
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Products</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Melon</li>
              <li data-filter=".filter-card">Sayur</li>

            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/1.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/1.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Galia Melon</h4>
                <p >Melon Greeniegal</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/2.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/2.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Rock Melon</h4>
                <p>Emeralda Melon</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/3.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/3.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Green Honey Dew Melon</h4>
                <p>Greeniesweet Melon</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/4.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/4.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Orange Honey Dew Melon</h4>
                <p>Greeniesweet Melon</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/5.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/5.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Dalmatian</h4>
                <p>Honey Dew Melon</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/6.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/6.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Hamigua Melon</h4>
                <p>Sunray Melon</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/7.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/7.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Musk Melon</h4>
                <p>Amaiame Melon</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/8.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/8.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Piel de Sapo Melon</h4>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/9.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/9.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Golden Melon</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/10.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/10.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Amaishiro Melon</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/11.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/11.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Orenji Melon</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/12.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/12.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Chamoe Melon</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/13.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/13.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Tuscany Melon</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/14.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/14.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Redish Melon</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Melon/25.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Melon/25.png" data-lightbox="portfolio"   class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Melon Slice</h4>
              </div>
            </div>
          </div>






          <!--//SAYURAN//-------------------------------------------------------------------------------------------------------------------------------------------->

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/15.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/15.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Junction Lettuce</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/16.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/16.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Romain Lettuce</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/17.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/17.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Lolorosa Lettuce</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/18.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/18.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Locorna Lettuce</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/19.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/19.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Green Bok Choy</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/20.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/20.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>White Bok Choy</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/21.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/21.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Pickle Cucumber</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/22.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/22.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
              <h4>Kyuri Cucumber</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/23.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/23.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Mixed Salad</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/24.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/24.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Mixed Salad (with Dressing)</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/26.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/26.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Teropong Chili</h4>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/27.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/27.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Cherry Tomato</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/28.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/28.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Beef Tomato</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/29.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/29.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Nasubi Eggplant</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url();?>base/img/Sayur/30.png" class="img-fluid" alt="">
                <a href="<?php echo base_url();?>base/img/Sayur/30.png" class="link-preview" data-lightbox="portfolio"    title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>Bell Peppers</h4>
  
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #portfolio -->

    <section id="mitra" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Mitra</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url();?>base/img/clients/all_fresh_logo JAKARTA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/BORMA LOGO BANDUNG.jfif" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/Duta_buah_logo TANGERANG.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/grand_lucky_logo JAKARTA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/hero logo JAKARTA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/hokky_buah_logo SURABAYA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/Jakarta_fruit_market_logo JAKARTA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/lotte mart jakarta, jateng.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/market city logo JAKARTA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/MAXIM JAKARTA.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/OMAH BUAH BANDUNG.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/rumah_buah_logo TANGERANG.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/total_buah_logo TANGERANG.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/transmart logo JATENG.png" alt="">&ensp;
          <img src="<?php echo base_url();?>base/img/clients/yogya logo BOGOR.png" alt="">&ensp;
        </div>
      </div>
    </section><!-- #clients -->

    <?php $this->load->view("footer")?>

</body>
</html>
