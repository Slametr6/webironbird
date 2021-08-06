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
                        <h3>Halaman </h3>
                        <h2>Galeri Iron Bird</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="custom-padding">
        <div class="container">
            <div class="portfolio-container text-center">
                <ul id="portfolio-grid" class="three-column hover-two">
                    <?php foreach ($data as $value): ?>
                        <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="<?php echo base_url('assets/images/portfolio/') . $value->ImgThum; ?>">                        
                            <div class="portfolio-info">
                                <h3 class="project-title"><?php echo $value->NamaKonten; ?></h3>
                                <a href="#" class="links"><?php echo date('l, d-m-Y', strtotime($value->CreatedAt)); ?></a>
                            </div>
                            <ul class="portfolio-details">
                                <li><a href="<?php echo base_url() ?>media/detgaleri/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idgaleri)) ?>"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </section>
    <?php $this->view('include/copyright'); ?>
    <?php $this->view('include/js'); ?>
</body>
</html>