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
                    <h1 class="page-header">View Service</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Service
                        </div>
                        <div style="padding: 10px 0 0 15px;">
                            <a href="<?= base_url() ?>admin_service/add" class="btn btn-primary">Add Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Service</th>
                                            <th>Img Thumbnail</th>
                                            <th>Img Detail</th>
                                            <th>Konten</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $value) { ?>
                                            <tr>
                                                <td><?= $value->NamaService; ?></td>
                                                <td><img src="<?= base_url() ?>assets/images/services/<?= $value->Img; ?>" width="150" height="150"></td>
                                                <td><img src="<?= base_url() ?>assets/images/services/<?= $value->ImgDetail; ?>" width="150" height="150"></td>
                                                <td><?= substr($value->Konten, 0, 100) . '...'; ?></td>
                                                <?php if ($value->Status == 0) { ?>
                                                    <td class="danger">Not Active</td>
                                                <?php }else{ ?>
                                                    <td>Actived</td>
                                                <?php } ?>
                                                <td>
													<a href="<?= base_url() ?>admin_service/edit/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->id)) ?>" class="btn btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
													
													<a onclick="deleteConfirm('<?= base_url() ?>admin_service/delete/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($value->id)) ?>')" href="#!" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
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
