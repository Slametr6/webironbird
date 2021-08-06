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
                    <h1 class="page-header">View Galeri</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Galeri
                        </div>
                        <div style="padding: 10px 0 0 15px;">
                            <a href="<?php echo base_url() ?>admin_galeri/add" class="btn btn-primary">Add Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Konten</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $value) { ?>
                                            <tr>
                                                <td><?php echo $value->NamaKonten; ?></td>
                                                <td><img src="<?php echo base_url() ?>assets/images/portfolio/<?php echo $value->ImgThum ?>" width="30%"></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin_galeri/view/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idgaleri)) ?>" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                                    
													<a href="<?php echo base_url() ?>admin_galeri/delete/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idgaleri)) ?>" class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>
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
