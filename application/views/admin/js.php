<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/dist/js/sb-admin-2.js"></script>
<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});

    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
</script>
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
    
	$(document).ready(function() {
        <?php
        $message = $this->session->flashdata('success');
        if (!empty($message)) { ?>
            swal({
                title: 'Success',
                text: '<?= $message ?>',
                icon: "success",
                button: false,
                timer: 1500,
            })
        <?php }
    $message = $this->session->flashdata('error');
    if (!empty($message)) { ?>
            swal({
                title: 'Failed',
                text: '<?= $message; ?>',
                icon: "error",
                button: false,
                timer: 2000,
            })
        <?php } ?>
    });
</script>
