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
                        <h3>Our feeds </h3>
                        <h3><?php echo $brt->Judul; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-8">
                    <div class="news-box no-space">
                        <div class="news-thumb">
                            <div id="post-slider" class="owl-carousel owl-theme">
                                <div class="item"><img class="img-responsive" src="<?php echo base_url() ?>assets/images/blog/<?php echo $brt->Imgberita; ?>" alt=""></div>
                            </div>
                            <div class="date"> <strong><?php echo date('d', strtotime($brt->CreatedAt)); ?></strong>
                                <span><?php echo date('M', strtotime($brt->CreatedAt)); ?></span> </div>
                            </div>
                            <div class="news-detail single">
                                <h2><a title="" href="blog-detail.html"><?php echo $brt->Judul; ?></a></h2>
                                <p><?php echo $brt->Konten; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $this->view('media/right-sidebar-berita'); ?>
                </div>
                <!-- Row End -->
            </div>
            <!-- end container -->
        </section>
        <?php $this->view('include/copyright'); ?>
        <?php $this->view('include/js'); ?>
    </body>

    </html>