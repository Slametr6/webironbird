<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<?php $this->view('include/header'); ?>
  <section id="one-page-contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 no-padding">
          <div id="map"></div>
        </div>
        <div class="col-md-6 padding-top-100">                  
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12">
              <div class="location-item text-center">
                <div class="icon"> <i class="icon-map"></i> </div>
                <h4 class="text-uppercase">Lokasi</h4>
                <p> Cakung Cilincing, Jakarta Utara </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
              <div class="location-item text-center">
                <div class="icon"> <i class="icon-phone"></i> </div>
                <h4 class="text-uppercase">Telepon</h4>
                <p> +62 2180-8823-24 / +62 21 440-6444 </p>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
              <div class="location-item text-center">
                <div class="icon"> <i class="icon-envelope"></i> </div>
                <h4 class="text-uppercase">Email</h4>
                 <p> Sales@ironbird.co.id </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <input type="text" placeholder="Nama" id="name" name="name" class="form-control">
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <input type="email" placeholder="Email" id="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12">
              <div class="form-group">
                <textarea cols="12" rows="10" placeholder="Pesan..." id="message" name="message" class="form-control"></textarea>
              </div>
            </div>
           <div class="col-sm-12 col-md-12 col-xs-12">
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg pull-right" id="submit" value="Send message" name="submit">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php $this->view('include/copyright'); ?>
    <?php $this->view('include/js'); ?>
</body>

</html>