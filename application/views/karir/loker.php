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
                        <h2>Informasi Karir</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding-70" id="loker">
        <div class="container">
            <div class="row">
            <?php foreach ($data as $value): ?>
                <div class="col-sm-12 col-xs-12 col-md-6">
                    <div class="choose-services">
                        <ul class="choose-list">
                            <li>
                                <div class="choose-box"> <span class="iconbox"><i class="icon-briefcase"></i></span>
                                    <div class="choose-box-content">
                                        <h4> <?php echo $value->JenisKarir ?> </h4>
                                        <p>Tanggal Mulai : <?php echo date('d-M-Y', strtotime($value->TglMulai)); ?> </p>
                                        <p>Tanggal Berakhir : <?php echo date('d-M-Y', strtotime($value->TglBerakhir)); ?> </p>
                                        <div class="more-about"> 
                                            <a class="btn btn-primary btn-lg" href="<?php echo base_url() ?>karir/detail/<?php echo $value->Slug; ?>">Read More<i class="fa fa-chevron-circle-right"></i></a> 
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <?php $this->view('include/copyright'); ?>
<?php $this->view('include/js'); ?>
</body>

</html>