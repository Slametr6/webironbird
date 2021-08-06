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
                        <h2>Pencapaian</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="custom-padding services">
			<div class="container">
				<div class="row">
						<div id="services">
							<div class="item-large">
							<?php foreach ($data as $value): ?>
								<div class="services-grid">
									<div class="">
										<img width="100%" src="<?php echo base_url() ?>assets/images/archive/<?php echo $value->Img ?>"> 
									</div>
								</div>
								<?php endforeach ?>
							</div>
						</div>
				</div>
			</div>
		</section>
        <?php $this->view('include/copyright'); ?>
        <?php $this->view('include/js'); ?>
</body>

</html>
