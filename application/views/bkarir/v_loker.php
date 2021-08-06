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
                    <h1 class="page-header">View Karir</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Karir
                        </div>
                        <div style="padding: 10px 0 0 15px;">
                            <a href="<?php echo base_url() ?>admin_karir/add" class="btn btn-primary">Add Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Jenis Karir</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Berakhir</th>
                                            <th>Kualifikasi</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $value) { ?>
                                            <tr>
                                                <td><?php echo $value->JenisKarir; ?></td>
                                                <td><?php echo $value->TglMulai; ?></td>
                                                <td><?php echo $value->TglBerakhir; ?></td>
                                                <td><?php echo substr($value->Kualifikasi, 0, 100) . '...'; ?></td>
                                                    <?php if ($value->Status == 0) { ?>
                                                        <td class="danger">Not Active</td>
                                                    <?php }else{ ?>
                                                        <td>Actived</td>
                                                    <?php } ?>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin_karir/edit/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idKarir)) ?>" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="deleteConfirm('<?php echo base_url() ?>admin_karir/delete/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->idKarir)) ?>')" href="#!" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
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
