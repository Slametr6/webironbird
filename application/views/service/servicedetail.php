<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php $this->view('include/header'); ?>
    <section class="breadcrumbs-area parallex">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <div class="col-sm-12 col-md-6 page-heading text-left">
                        <h3>Our expertise </h3>
                        <h2><?php echo $svc->NamaService; ?></h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding-70 services-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-md-push-3 col-xs-12" style="text-align: justify;">
                    <div id="post-slider" class="owl-carousel owl-theme margin-bottom-30">
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url()?>assets/images/services/<?php echo $svc->ImgDetail; ?>" alt="">
                        </div>
                    </div>
                    <p><?php echo $svc->Konten ?></p>
                </div>
                <?php $this->view('include/menuservice'); ?>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <?php $this->view('include/copyright'); ?>
    <?php $this->view('include/js'); ?>
</body>

</html>