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
  <main id="main">
    <section id="Solution" style="min-height: 100vh;">
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <header class="section-header wow fadeInUp"><h3 style="margin-top:1%;">Green House <br> Solution</h3></header><br>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
               
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/solution/Program Kemitraan.jpeg" >
                        <div class="carousel-caption d-none d-md-block">
                         
                        </div>
                        <p style="font-size: 20pt;text-align:center;color:black"><b>Program Kemitraan</b></p>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/solution/Pendampingan Tanam.jpg" >
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                        <p style="font-size: 20pt;text-align:center;color:black"><b>Pendampingan Tanam</b></p>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/solution/Pembuatan Indoor Farming.jpg" >
                        <div class="carousel-caption d-none d-md-block">
                        
                        </div>
                        <p style="font-size: 20pt;text-align:center;color:black"><b>Pembuatan Indoor Farming</b></p>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/solution/Pembuatan Sistem Fertigasi.png" >
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                        <p style="font-size: 20pt;text-align:center;color:black"><b>Pembuatan Sistem Fertigasi</b></p>
                      </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a> -->
                  </div>
          
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <p style="font-size:18pt; margin-top:15%"><b>Hadir sebagai solusi untuk mengembangkan pertanian modern berbasis teknologi sesuai dengan kebutuhan tanaman guna memperoleh kualitas TERBAIK#MudahDenganTeknologi</b>
            </p>
          </div>
        </div>
      </div>
    </section><!-- #services -->
    <?php $this->load->view("footer")?>

</body>
</html>
