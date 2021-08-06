<footer class="parallex our-app-foot footer-area">
  <div class="footer-content">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="row clearfix">
            <div class="col-lg-7 col-sm-6 col-xs-12 column">
              <div class="footer-widget about-widget">
                <div class="logo">
                  <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/corevalues.png" width="" height="" class="img-responsive"></a>
                </div>                
                <div>
                  <p class="t1-s-2 cl-0 p-b-9" style="font-size: 16px !important; text-align: justify;">
                   Iron Bird Logistics Akan membantu Anda dalam melakukan kegiatan logistik. Dengan sumber daya manusia yang berpengalaman dan profesional disetiap bidangnya serta sistem yang terintegrasi, Kami adalah pilihan untuk bisnis Anda.
                 </p>
               </div>
             </div>
           </div>
           <div class="col-lg-5 col-sm-6 col-xs-12 column">
            <h2>Kontak Kami</h2>
            <div class="footer-widget links-widget">
              <ul class="contact-info">
                <li><span class="icon fa fa-map-marker"></span> Jl. Raya Cakung Cilincing  No.10, Kota Jakarta Utara 14130</li>
                <li><span class="icon fa fa-phone"></span> +62 21 440-6444</li>
                <li><span class="icon fa fa-envelope-o"></span> mkt.distribution.ib@bluebirdgroup.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="row clearfix">
          <div class="col-lg-6 col-sm-6 col-xs-12 column">
            <div class="footer-widget links-widget">
              <h2>Menu</h2>
              <ul>
                <div class="row">
                  <div class="col-md-6">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url() ?>about/company/">Tentang Kami</a></li>
                    <li><a href="<?= base_url() ?>service/">Layanan</a></li>
                  </div>
                  <div class="col-md-3">
                    <li><a href="<?= base_url() ?>media/berita/">Media</a></li>
                   <!-- <li><a href="<?= base_url() ?>karir/">Karir</a></li>
                    <li><a href="<?= base_url() ?>kontak/">Kontak</a></li> -->
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12 column">
            <h2>Follow</h2>
            <div class="social-links-two clearfix"> 
                <a href="https://api.whatsapp.com/send?phone=<?= $sosmed->whatsapp; ?>" target="_blank" class="whatsapp img-circle">
                  <span style="font : normal normal normal 14px/1.8 FontAwesome;" class="fa fa-whatsapp"></span>
                </a> 
                <a href="<?= $sosmed->link ?>" target="_blank" class="youtube img-circle">
                  <span style="font : normal normal normal 14px/1.8 FontAwesome;" class="fa fa-youtube"></span>
                </a> 
                <a href="https://www.instagram.com/<?= $sosmed->instagram; ?>" target="_blank" class="instagram img-circle">
                  <span style="font : normal normal normal 14px/1.8 FontAwesome;" class="fa fa-instagram"></span>
                </a> 
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-copyright">
  <div class="auto-container clearfix">
    <div class="copyright text-center">Copyright 2020 &copy; <a target="#" href="ironbird.id">Iron Bird Logistics</a> All Rights Reserved</div>
  </div>
</div>
</footer>
