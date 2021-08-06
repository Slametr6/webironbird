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
                        <h2>Berita</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-8">
                    <div class="row">
                        <?php foreach ($data as $value): ?>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="news-box">
                                    <div class="news-thumb">
                                        <a href="<?php echo base_url() ?>media/detail/<?php echo $value->Slug; ?>"><img class="img-responsive" alt="<?php echo $value->Judul; ?>" src="<?php echo base_url() ?>assets/images/blog/<?php echo $value->Imgberita; ?>"></a>
                                        <div class="date"> <strong><?php echo date('d', strtotime($value->CreatedAt)); ?></strong>
                                            <span><?php echo date('M', strtotime($value->CreatedAt)); ?></span> </div>
                                        </div>
                                        <div class="news-detail">
                                            <h2><a title="" href="<?php echo base_url() ?>media/detail/<?php echo $value->Slug; ?>"><?php echo $value->Judul; ?></a></h2>
                                            <p><?php echo substr($value->Konten, 0, 150) . '...'; ?>.</p>
                                            <div class="entry-footer">
                                                <div class="post-meta">
                                                    <div class="post-admin"> <i class="icon-profile-male"></i>Posted by<a href="#">Admin</a> </div>
                                                    <div class="post-like"> <i class="icon-calendar"></i><?php echo date('d-M-Y', strtotime($value->CreatedAt)); ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <?php echo $pagination; ?>
                        </div>
                    </div>
                    <?php $this->view('media/right-sidebar-berita'); ?>
                </div>
            </div>
        </section>
        <?php $this->view('include/copyright'); ?>
        <?php $this->view('include/js'); ?>
    </body>

    </html>