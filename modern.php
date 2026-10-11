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

  <!--==========================
    Intro Section
  ============================-->
  <main id="main">

    <!--================================
        Green Solution
    ==================================-->
    

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
		<h3 style="margin-top:1%">Modern Farming</h3>
          <!-- <h3>Green House Solution</h3>
          <p>Hadir sebagai solusi untuk mengembangkan pertanian modern berbasis teknologi <br> sesuai dengan kebutuhan tanaman guna memperoleh kualitas TERBAIK.<br> 
#MudahDenganTeknologi</p> -->
        </header>

        <div class="row" style="text-align:center">
           <div class="col-lg-12 col-md-612 box wow bounceInUp" data-wow-duration="1.4s" style="text-align:center">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
          <!-- <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" style="text-align:center">
            <h4 class="title" style="margin-left: 0px;"><a href="" style="margin-left: 0px;">Program Kemitraan</a></h4>
            <img src="<?php echo base_url();?>base/img/solution/Program Kemitraan.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title" style="margin-left: 0px;"><a href="" >Pendampingan Tanam</a></h4>
            <img src="<?php echo base_url();?>base/img/solution/Pendampingan Tanam.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title" style="margin-left: 0px;"><a href="" style="margin-left: 0px;">Pembuatan Indoor Farming</a></h4>
            <img src="<?php echo base_url();?>base/img/solution/Pembuatan Indoor Farming.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <h4 class="title" style="margin-left: 0px;"><a href="" style="margin-left: 0px;">Pembuatan Sistem Fertigasi</a></h4>
            <img src="<?php echo base_url();?>base/img/solution/Pembuatan Sistem Fertigasi.JPG" alt="" class="img-fluid">
          </div> -->
        </div>
      </div>

    </section><!-- #services -->




    <!--==========================
      Portfolio Section
    ============================-->

    <?php $this->load->view("footer")?>

</body>
</html>
