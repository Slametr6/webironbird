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
							<h2>Tentang Perusahaan</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="padding-top-30" id="about">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-6 col-sm-6 col-xs-6 ">
						<div class="about-title" style="text-align: justify;">
							<h2>Visi</h2>
							<p style="font-size: 18px"><?php echo $visimisi->Visi; ?></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 ">
						<div class="about-title" style="text-align: justify;">
							<h2>Misi</h2>
							<p style="font-size: 18px"><?php echo $visimisi->Misi; ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="custom-padding services">
			<div class="container">
				<div class="main-heading text-center">
					<h2>Nilai - Nilai Perusahaan</h2>
				</div>
			<div class="row">
				<div id="services">
					<div class="item">
						<div class="services-grid">
								<div class=""><img src="<?php echo base_url() ?>assets/images/values/integrity.png"> </div>
								<h4>Integrity</h4>
									<p><?php echo $value->Integrity ?></p>
							</div>
						</div>
						<div class="item">
							<div class="services-grid">
								<div class=""><img src="<?php echo base_url() ?>assets/images/values/execution.png"> </div>
								<h4>Execution</h4>
									<p><?php echo $value->Execution ?></p>
							</div>
						</div>
						<div class="item">
							<div class="services-grid">
								<div class=""><img src="<?php echo base_url() ?>assets/images/values/innovation.png"> </div>
								<h4>Innovation</h4>
									<p><?php echo $value->Innovation ?></p>
								</div>
							</div>
						<div class="item">
							<div class="services-grid">
								<div class=""><img src="<?php echo base_url() ?>assets/images/values/customer-focus.png"> </div>
								<h4>Customer Focus</h4>
									<p><?php echo $value->CustomerFocus ?></p>
							</div>
						</div>
						<div class="item">
							<div class="services-grid">
								<div class=""><img src="<?php echo base_url() ?>assets/images/values/commitment.png"> </div>
								<h4>Commitment</h4>
									<p> <?php echo $value->Commitment ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="padding-top-70" id="about">
            <div class="container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="about-title">
                            <h2>Perjalanan Perusahaan</h2>
                            <img src="<?php echo base_url() ?>assets/images/pp.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="" class="parallex custom-paddinggs our-app section-padding-60 ad">
            <div class="container">
                <h2 style="padding: 20px 0 20px 20px; color: black;">Alamat Perusahaan</h2>
                <div class="row align-content-between">
				<?php foreach ($kantor as $value): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
						<div class="team-grid">
                            <div class="news-box">
                                <div class="news-detail">
                                    <h2><a title="" href="<?php echo $value->Lokasi; ?>" target="_blank"><?php echo $value->JenisKantor; ?></a></h2>
                                    <p><span class="fa fa-building" style="font-size: 20px;"></span> <?php echo $value->Alamat; ?> </p>
                                    <p><span class="fa fa-phone" style="font-size: 20px;"></span> <?php echo $value->NoTelp; ?> </p>
                                    <p><span class="fa fa-envelope-o" style="font-size: 20px;"></span> <?php echo $value->Email; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endforeach ?>
                </div>
            </div>
        </section>
        <section id="team" class="custom-padding white">
            <div class="container">
                <div class="main-heading text-center">
                    <h2>Jajaran Manajemen</h2>
                </div>
                <div class="row">
				<?php foreach ($manajemen as $value): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="team-grid">
                            <div class="team-image">
                                <img alt="" class="img-responsive" width="100%" src="<?php echo base_url() ?>assets/images/team/<?php echo $value->Img ?>">
                            </div>
                            <div class="team-content">
                                <h2><?php echo $value->Nama; ?></h2>
                                <p><?php echo $value->Jabatan; ?></p>
                            </div>
                        </div>
                    </div>
				<?php endforeach ?>
                </div>
            </div>
        </section>
        <?php $this->view('include/copyright'); ?>
        <?php $this->view('include/js'); ?>
</body>

</html>
