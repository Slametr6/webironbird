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
                        <h3>Halaman</h3>
                        <h2>Layanan Perusahaan</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="custom-padding white" id="about-section-3">
        <div class="container">
            <div class="main-boxes">
                <div class="row">
                    <?php foreach ($data as $value): ?>
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="services-grid-1">
                            <div class="service-image">
                                <a href="<?php echo base_url() ?>service/<?php echo $value->Slug; ?>"><img alt="<?php echo strtolower($value->NamaService); ?>" class="img-responsive" src="<?php echo base_url()?>assets/images/services/<?php echo $value->Img; ?>"></a>
                            </div>
                            <div class="services-text">
                                <a href="<?php echo base_url() ?>service/<?php echo $value->Slug; ?>"><h4><?php echo $value->NamaService; ?></h4></a>
                            </div>
                        </div>
                    </div>    
                    <?php endforeach ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->view('include/copyright'); ?>
    <?php $this->view('include/js'); ?>
</body>

</html>