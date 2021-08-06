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
                    <h1 class="page-header">View Galeri <strong><?php echo $data->NamaKonten; ?></strong> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Galeri <strong><?php echo $data->NamaKonten; ?></strong> 
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($detgaleri as $value) { ?>
                                            <tr>
                                                <td><img src="<?php echo base_url() ?>assets/images/portfolio/<?php echo $value->Img ?>" width="30%"></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin_galeri/edit/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idgaleri)) ?>" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-pencil"></i></a>
                                                    
													<a href="<?php echo base_url() ?>admin_galeri/deletedet/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->id)) ?>" class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="deletedet"><i class="fa fa-trash"></i></a>
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
