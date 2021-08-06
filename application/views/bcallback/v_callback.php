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
                    <h1 class="page-header">View Call Back</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Call Back
                        </div>
                        <div style="padding: 10px 0 0 15px;">
                            <a href="<?php echo base_url() ?>admin_service/add" class="btn btn-primary">Add Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Subject</th>
                                            <th>Email</th>
                                            <th>Pesan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $value) { ?>
                                            <tr>
                                                <td><?php echo $value->NamaLengkap; ?></td>
                                                <td><?php echo $value->Subject; ?></td>
                                                <td><?php echo $value->Email; ?></td>
                                                <td><?php echo substr($value->Pesan, 0, 100) .  '...'; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin_service/edit/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->id)) ?>" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
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
