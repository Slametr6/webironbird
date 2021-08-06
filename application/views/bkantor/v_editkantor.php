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
                    <h1 class="page-header">Edit Kantor</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Kantor
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?= base_url() ?>admin_kantor/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idkantor)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Kantor</label>
                                            <input class="form-control" value="<?= $data->JenisKantor ?>" name="JenisKantor" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Alamat Kantor</label>
											<input class="form-control" value="<?= $data->Alamat ?>" name="Alamat" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" value="<?= $data->NoTelp ?>" name="NoTelp" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Alamat Email</label>
                                            <input class="form-control" value="<?= $data->Email ?>" name="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lokasi Kantor</label>
                                            <input class="form-control" value="<?= $data->Lokasi ?>" name="Lokasi" type="text">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->view('admin/js'); ?>
</body>

</html>
