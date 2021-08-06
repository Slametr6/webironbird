<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <?php $this->view('include/header'); ?>
  <div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
      <ul>
			<?php foreach ($slide as $value): ?>
       <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
        <img src="<?php echo base_url() ?>assets/images/slider/<?php echo $value->Img ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
      </li>
			<?php endforeach ?>
  </ul>
</div>
</div>
<div class="parallex-small ">
  <div class="container">
    <div class="row custom-padding-20 ">
      <div class="col-md-12 col-sm-12">
        <div class="parallex-text">
          <h4 style="text-align: center;">Your Reliable Logistics Solution Partner</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="custom-padding white" id="about-section-3">
  <div class="container">
    <div class="main-heading text-center">
      <h2>Layanan Perusahaan</h2>
    </div>
    <div class="main-boxes">
      <div class="row">
        <?php foreach ($data as $value): ?>
          <div class="col-sm-12 col-md-4 col-xs-12">
            <div class="services-grid-1">
              <div class="service-image">
                <img alt="Freight Forwarding" src="<?php echo base_url() ?>assets/images/services/<?php echo $value->Img; ?>">
              </div>
              <div class="services-text">
                <h4><?php echo $value->NamaService; ?></h4>
                <p><?php echo substr($value->Konten, 0, 140); ?> ....</p>
              </div>
              <div class="more-about"> <a class="btn btn-primary btn-lg" href="<?php echo base_url() ?>service/<?php echo $value->Slug; ?>">Read More <i class="fa fa-chevron-circle-right"></i></a> </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>

<section class="quote" id="quote">
  <div class="container">
    <div class="row clearfix">
      <div class="choose-title">
        <h2>Alasan memilih kami</h2>
      </div>
      <div class="choose-services">
        <div class="row">
          <div class="col-md-6">
            <ul class="choose-list">
              <li>
                <div class="choose-box"> <span class="iconbox"><i class="flaticon-logistics-delivery-truck-and-clock"></i></span>
                  <div class="choose-box-content">
                    <h4>Layanan pengiriman cepat</h4>
                    <p><?php echo $alasan->LayananPengirimanCepat; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="choose-box"> <span class="iconbox"><i class="flaticon-24-hours-symbol"></i></span>
                  <div class="choose-box-content">
                    <h4>Pelayanan Terbaik</h4>
                    <p><?php echo $alasan->PelayananTerbaik; ?></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="choose-list">
              <li>
                <div class="choose-box"> <span class="iconbox"><i class="flaticon-woman-with-headset"></i></span>
                  <div class="choose-box-content">
                    <h4>Keselamatan dan Kenyamanan</h4>
                    <p><?php echo $alasan->KeselamatanDanKenyamanan; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="choose-box"> <span class="iconbox"><i class=" flaticon-clipboard-verification-symbol"></i></span>
                  <div class="choose-box-content">
                    <h4>Customer Focus</h4>
                    <p><?php echo $alasan->CustomerFocus ?></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->view('include/copyright'); ?>
<?php $this->view('include/js'); ?>
<script type="text/javascript">

</script>

</body>

</html>
