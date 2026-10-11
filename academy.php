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
    <!--================================
        Academy
    ==================================-->
    

    <section id="services" style="min-height:100vh" >
      <div class="row" >
        <div class="col-md-12" >
          <div class="container">

          <header class="section-header wow fadeInUp">
            <h2 style="text-align:center;margin-top:1%"><img class="img-fluid" src="<?php echo base_url();?>base/img/academy/Logo-FA.png" alt="" title="" style="width:180px;"/></h2>
            <p>Platform edukasi yang menggandeng praktisi berpengalaman dibidangnya untuk membudidayakan pertanian hidroponik dengan baik dan benar serta dapat memberikan kebermanfaatan kepada masyarakat</p>
          </header>

          <div class="row" style="text-align:center">
			<div class="col-md-3">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/YFDP_.png" onclick="show('YFDP')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/YAIP.png" onclick="show('YAIP')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                    </div>
                  </div>
			</div>
			<div class="col-md-3">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/TeFa.png" onclick="show('TEFA')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/Podcast.png" onclick="show('PDCS')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                    </div>
                  </div>
			</div>
			<div class="col-md-3">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/Webinar.png" onclick="show('WBNR')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/Farmhill x Pesantren.png" onclick="show('FXPS')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                    </div>
                  </div>
			</div>
			<div class="col-md-3">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/MPP.png"  onclick="show('MPP')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>base/img/academy/Magang Guru.png"  onclick="show('MGG')">
							<div class="carousel-caption d-none d-md-block">
							</div>
                      </div>
                    </div>
                  </div>
			</div>
          </div>

          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--------------------------------------------MODAL INFO TEXT----------------------------------------------------------------->
<div class="modal fade" id="info-sukses" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="margin-top: 10%">
        <div id="modal1" class="modal-content">
            <div class="modal-header" style="background-color: white;">                          
                <h5 class="modal-title" id="myModalLabel"></h5>
            </div>
            <div class="modal-body" style="text-align: center;"> 
                <span id='informasisukses'></span>
            </div>              
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="$('#modal_add_cuti').modal('hide');InitForm();">Ok</button>
            </div>    
        </div>
    </div>
</div>
    <?php $this->load->view("footer")?>

</body>
<script>
	function show(_param){
		$('#informasisukses').empty();
		$('#myModalLabel').empty();
		if(_param == "YFDP"){
			$('#myModalLabel').append("Youth Farmers Development Program");
			$('#informasisukses').append("Pembekalan hardskill beserta softskill yang dibutuhkan di dunia kerja industri pertanian modern");
			$('#info-sukses').modal("show");
		}else if(_param=="YAIP"){
			$('#myModalLabel').append("Youth Agrigator Intership Program");
			$('#informasisukses').append("Magang perguruan tinggi dengan fokus mengedepankan kloaborasi antar bidang untuk industri pertanian modern");
			$('#info-sukses').modal("show");
		}else if(_param=="TEFA"){
			$('#myModalLabel').append("Teaching Factory");
			$('#informasisukses').append("Kerjasama pembangunan fasilitas pembelajaran yang memiliki kemampuan produksi setara industri");
			$('#info-sukses').modal("show");
		}else if(_param=="PDCS"){
			$('#myModalLabel').append("Podcast");
			$('#informasisukses').append("Edukasi pertanian bagi khalayan umum yang dikemas dalam wadah kekinian");
			$('#info-sukses').modal("show");
		}else if(_param=="WBNR"){
			$('#myModalLabel').append("Webinar");
			$('#informasisukses').append("Edukasi pertanian modern yang dilaksanakan sacara rutin melalui platform online");
			$('#info-sukses').modal("show");
		}else if(_param=="FXPS"){
			$('#myModalLabel').append("Farmhill X Pesantren");
			$('#informasisukses').append("Ekosistem Edukasi Pertanian Modern dan Entrepreneurship di Pesantren");
			$('#info-sukses').modal("show");
		}else if(_param=="MPP"){
			$('#myModalLabel').append("Masa Persiapan Pensiun");
			$('#informasisukses').append("Pelatihan pertanian modern skala rumah tangga dan industri untuk persiapan menjalanai masa pensiun");
			$('#info-sukses').modal("show");
		}else if(_param=="MGG"){
			$('#myModalLabel').append("Magang Guru / Dosen");
			$('#informasisukses').append("Edukasi Pertanian modern taraf industri kepada para tenaga pendidik");
			$('#info-sukses').modal("show");
		}							
		
	}
</script>
</html>
