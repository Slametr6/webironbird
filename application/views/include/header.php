<div id="google_translate_element"></div>
	<script type="text/javascript">
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'ind', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<header class="header-area">
  <div class="logo-bar">
    <div class="container clearfix">
      <div class="logo">
        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logoibl.png" alt=""></a>
      </div>
      <div class="information-content">
        <div class="info-box  hidden-sm">
          <div class="icon"><span class="icon-envelope"></span></div>
          <div class="text">Email</div>
          <a href="mkt.distribution.ib@bluebirdgroup.com">mkt.distribution.ib@bluebirdgroup.com</a> </div>
          <div class="info-box">
            <div class="icon"><span class="icon-phone"></span></div>
            <div class="text">Telepon</div>
            <a class="location" href="https://api.whatsapp.com/send?phone=622180882324" target="_blank">+62 21 440-6444</a> </div>
            <div class="info-box">
              <div class="icon"><span class="icon-map-pin"></span></div>
              <div class="text">Kantor</div>
              <a class="location" href="#">Jl. Raya Cakung Cilincing No.10,</a><br>
							<a class="" href="#">Kota Jakarta Utara 14130</a> </div>
            </div>
          </div>
        </div>
				<div>
				</div>
        <div class="navigation-2">
          <nav class="navbar navbar-default ">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
             </div>
             <div class="collapse navbar-collapse" id="main-navigation">
              <ul class="nav navbar-nav">
                <li <?php if ($menu == 'home') { ?>
                  class="hidden-sm active"
                  <?php } ?>><a href="<?php echo base_url() ?>">Beranda</a>
                </li>
                <li <?php if ($menu == 'Company') { ?>
                  class="hidden-sm active"
                  <?php } ?>><a href="<?php echo base_url() ?>about/company/">Profil Perusahaan </a>
                </li>
                <!-- <li <?php if ($menu == 'Company' or $menu == 'Values') { ?>
                  class="dropdown active"
                  <?php } ?>><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Tentang Kami<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu">
                    <li> <a href="<?php echo base_url() ?>about/company/">Profil Perusahaan </a> </li>
                    <li> <a href="<?php echo base_url() ?>about/values/">Nilai Utama </a> </li>
                  </ul>
                </li> -->
                <li <?php if ($menu == 'service') { ?>
                  class="hidden-sm active"
                  <?php } ?>><a href="<?php echo base_url() ?>service">Layanan</a>
                </li>
                <li <?php if ($menu == 'Compro' or $menu == 'Galeri' or $menu == 'Achievement' or $menu == 'Berita') { ?>
                  class="dropdown active"
                  <?php } ?>><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Media <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>media/berita/">Berita </a> </li>
                    <li><a href="<?php echo base_url() ?>media/galeri/">Galeri  </a> </li>
                    <li><a href="<?php echo base_url() ?>media/achievement/">Pencapaian </a> </li>
                    <li><a href="<?php echo base_url() ?>assets/images/doc/Compro-IBL.pdf" target="_blank">Company Profile</a> </li>
                  </ul>
                </li>
								<!--
                <li <?php if ($menu == 'karir' or $menu == 'Internship') { ?>
                  class="dropdown active"
                  <?php } ?>><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Karir <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() ?>karir">Karir </a> </li>
                    <li><a href="<?php echo base_url() ?>karir/internship/">Internship  </a> </li>
                  </ul>
                </li>
                <li <?php if ($menu == 'kontak') { ?>
                  class="hidden-sm active"
                  <?php } ?>><a href="<?php echo base_url() ?>kontak/">Kontak</a>
                </li> -->
								<!-- <li <?php if ($menu == 'Tracking') { ?>
                  class="hidden-sm active"
                  <?php } ?>><a href="<?php echo base_url() ?>tracking/">Order Tracking</a>
                </li>	-->
								<li>
									<a href=""></a>
										<form >
											<input class="form-control" type="text" placeholder="Search" aria-label="Search">
										</form>
								</li>
							</ul>
              </div> 
            </div>
          </nav>
        </div>
      </header>
