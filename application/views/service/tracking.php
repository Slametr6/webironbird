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
                        <h2>Order Tracking</h2>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="custom-padding white" id="about-section-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Lacak Pengiriman Anda</h2>
					<p class="lead">Butuh status pengiriman Anda atau bukti pengiriman? Masukkan Nomor Order atau Nomor Referensi Anda di bawah ini.</p>
					<div class="form col-md-7">
						<form action="#">
						<input type="text" class="form-control"  placeholder="Nomor Order (Sz-1170)">
						<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#trackingOrder">Lacak</button>
						</form>
						<span class="declaration">Kami membenci spam. Anda dapat mempercayai kami, kami tidak akan menggunakan email Anda.</span>
					</div>
					
				</div>
			</div>
		</div>

		<!-- modal trackingOrder -->
		<div class="modal fade" id="trackingOrder" tabindex="-1" role="dialog" aria-labelledby="trackingOrder" aria-hidden="true">
			<div class="modal-dialog modal-dialog-srollable modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="trackingOrder">Status Pengiriman Anda</h4>
					</div>
					<div class="modal-content">
						<div class="table-responsive">
							<table class="table table-clean-paddings margin-bottom-1">
								<thead>
									<tr>
										<th>Customer</th>
										<th>Shipped From</th>
										<th>Shipping Id</th>
										<th>Destination</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
										<div class="contact-container"><a href="#">Muhammad Umair</a> <span>on Aug 19, 2016</span></div>
										</td>
										<td>London</td>
										<td>SW-95-21</td>
											<td>New York</td>
											<td><span class="label label-success label-transparent">Delivered</span></td>
									</tr>
									<tr>
										<td>
										<div class="contact-container"><a href="#">Muhammad Umair</a> <span>on Aug 19, 2016</span></div>
										</td>
										<td>London</td>
										<td>SW-95-21</td>
											<td>New York</td>
											<td><span class="label label-warning label-transparent">Shipped</span></td>
									</tr>
									<tr>
										<td>
										<div class="contact-container"><a href="#">Muhammad Umair</a> <span>on Aug 19, 2016</span></div>
										</td>
										<td>London</td>
										<td>SW-95-21</td>
											<td>New York</td>
											<td><span class="label label-danger  label-transparent">Canceled</span></td>
									</tr>
									<tr>
										<td>
										<div class="contact-container"><a href="#">Muhammad Umair</a> <span>on Aug 19, 2016</span></div>
										</td>
										<td>London</td>
										<td>SW-95-21</td>
											<td>New York</td>
											<td><span class="label label-primary label-transparent">Pending</span></td>
									</tr>
									<tr>
										<td>
										<div class="contact-container"><a href="#">Muhammad Umair</a> <span>on Aug 19, 2016</span></div>
										</td>
										<td>London</td>
										<td>SW-95-21</td>
											<td>New York</td>
											<td><span class="label label-success label-transparent">Delivered</span></td>
									</tr>
								</tbody>
							</table>
							<div class="modal-footer">
								<button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
								<!-- <button type="submit" class="btn-sm btn-primary">Confirm</button> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal trackingOrder -->
    </section>
    <?php $this->view('include/copyright'); ?>
    <?php $this->view('include/js'); ?>
</body>

</html>

<script type="text/javascript">
	function showResults() {
		$('#results').show();
		$('#noted').hide();

		var order_no = $('#lticket').val();

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url() ?>welcome/search_order',
			data: 'order_no=' + order_no + '',
			dataType: 'json',
			success: function(data) {
				if (data.length > 0) {
					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {
						html += '<tr>' +
							'<td style="font-weight:bold"><div style="font-weight:bold"><span class="truncate" style="max-width:300px"><a style="display:inline">' + data[i].logged_name + '</a></span></div></td>' +
							'<td>' + data[i].logged_date + '</td>' +
							'<td style="background-color:#FFFFF0"><div style="background-color:#FFFFF0">' + data[i].logged_terminal + '</div></td>' +
							'</tr>';
					}
				} else {
					html = '<tr>' +
						'<td colspan="3" align="center">No data available</td>' +
						'</tr>';
				}

				$('#show_data').html(html);
			},
		});

	}
</script>
