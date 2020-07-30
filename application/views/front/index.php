<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A N I T A</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/animate.css">
    
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/aos.css">

    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url('vendor/digilab/') ?>css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">ANITA<span>harum</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#nilai-section" class="nav-link"><span>Nilai</span></a></li>
	          <li class="nav-item"><a href="#guru-section" class="nav-link"><span>Guru</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item"><a href="<?= base_url('auth') ?>" class="nav-link"><span>Login Guru</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
	  	<h3 class="vr">ASSALAMUALAIKUM</h3>
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(<?=base_url('vendor/digilab/') ?>images/bg_1.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Selamat Datang di Aplikasi </span>
			            <h1 class="mb-4 mt-3">Nilai Tahfidz<span> SDITHARUM</span></h1>
			            <p>Pantau perkembangan Hafalan Quran Siswa-siswi anda,
                  Jadikan Bekal Mereka di Dunia dan Akhirat.</p>
			            
			            <p><a href="#nilai-section" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
    </section>
		

    <section id="nilai-section" class="ftco-section-2 img" style="background-image: url(<?=base_url('vendor/digilab/') ?>images/bg_3.jpg);">
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<a href="<?php echo base_url('front/get_where/Harian')?>" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Evaluasi Harian</h2>
    							<p>Hasil Evaluasi harian, hafalan yang di setorkankan ananda di sekolah </p>
    						</a>
    						<a href="<?php echo base_url('front/get_where/uts')?>" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>U T S</h2>
    							<p>Anak Sholeh/sholeh tidak putus asa</p>
    						</a>
    						<a href="<?= base_url('front/nilai_uas') ?>" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>U A S</h2>
    							<p>Berikan Nilai Maksimal dalam setiap Ujian.</p>
    						</a>
    						<a href="<?= base_url('front/nilai_persiapan') ?>" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Persiapan Munaqosah</h2>
    							<p>Peran dan Dukungan Orang tua di rumah sangat berarti dalam perkembangan ananda.</p>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


		<section class="ftco-section testimony-section" id="guru-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 >Guru</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php foreach ($guru as $u): ?>
               <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(<?=base_url('assets/img/profile/'. $u->image);?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4"><small><i>"<?= $u->motivasi ?>"</i></small></p>
                    <p class="name"><?= $u->name ?></p>
                    <span class="position"><small><?= $u->no_hp ?></small></span>
                  </div>
                </div>
              </div>
                  <?php endforeach; ?>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Hubungi Kami</h2>
            <p>SDIT HARAPAN UMAT JEMBER</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Jalan Danau Toba Gg. Islamic Center Jember</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://(0331) 324478">(0331) 324478</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:sditharum@yahoo.co.id">sditharum@yahoo.co.id</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">Website</a></p>
	          </div>
          </div>
        </div>

	
  
       
 <ul class="ftco-footer-social list-unstyled float-md-center float-lft mt-5 text-center">
                <!-- <li class="ftco-animate"><a href=""><span class="icon-twitter"></span></a></li> -->
                <li class="ftco-animate"><a href="https://www.facebook.com/sditharumjember/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/sditharumjember/"><span class="icon-instagram"></span></a></li>
              </ul>

            <p style="text-align: center;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This App by <br> <i class="icon-heart color-danger" aria-hidden="true"></i><a href="" target="_blank"> M. Hasin Malik</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=base_url('vendor/digilab/') ?>js/jquery.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/popper.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/bootstrap.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/jquery.waypoints.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/jquery.stellar.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/owl.carousel.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/aos.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url('vendor/digilab/') ?>js/google-map.js"></script>
  
  <script src="<?=base_url('vendor/digilab/') ?>js/main.js"></script>
    
  </body>
</html>