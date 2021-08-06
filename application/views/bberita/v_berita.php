<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->view('admin/css'); ?>
</head>

<body>
    <div id="wrapper">
        <?php $this->view('admin/header'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Berita
                        </div>
                        <div style="padding: 10px 0 0 15px;">
                            <a href="<?php echo base_url() ?>admin_berita/add" class="btn btn-primary">Add Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
											<th>Kategori</th>
                                            <th>Image</th>
                                            <th>Konten</th>
											<th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $value) { ?>
                                            <tr>
                                                <td><?php echo $value->Judul; ?></td>
												<td><?php echo $value->Kategori ?></td>
                                                <td><img src="<?php echo base_url() ?>assets/images/blog/<?php echo $value->Imgberita; ?>" width="150" height="150"></td>
                                                <td><?php echo substr($value->Konten, 0, 250) . '...'; ?></td>
												<?php if ($value->Status == 0) { ?>
                                                    <td class="danger">Not Active</td>
                                                <?php }else{ ?>
                                                    <td>Actived</td>
                                                <?php } ?>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin_berita/edit/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idberita)) ?>" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                
													<a onclick="deleteConfirm('<?php echo base_url() ?>admin_berita/delete/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idberita)) ?>')" href="#!" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
												</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php $this->view('admin/js'); ?>
    <script>

    </script>

</body>

</html>
