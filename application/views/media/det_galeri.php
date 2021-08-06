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
                        <h3>Galeri </h3>
                        <h2><?php echo $data->NamaKonten ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="custom-padding">
        <div class="container">
            <div class="portfolio-container text-center">
                <ul id="portfolio-grid" class="three-column hover-two">
                    <?php foreach ($detgaleri as $value): ?>
                        <li class="portfolio-item gutter">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img src="<?php echo base_url('assets/images/portfolio/') . $value->Img; ?>">                        
                            <!-- <div class="portfolio-info">
                                <h3 class="project-title"><?php echo $value->NamaKonten; ?></h3>
                            </div> -->
                            <ul class="portfolio-details">
                                <li><a class="tt-lightbox" href="<?php echo base_url('assets/images/portfolio/') . $value->Img; ?>"><i class="fa fa-search"></i></a></li>
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