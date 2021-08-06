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
                    <h1 class="page-header">Edit Karir</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Karir
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_karir/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idKarir)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis Karir</label>
                                            <input class="form-control" value="<?php echo $data->JenisKarir ?>" name="JenisKarir" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="Status" required="">
                                                <?php if ($data->Status == 0) { ?>
                                                    <option value="0">Non Actived</option>
                                                    <option value="1">Actived</option>
                                                <?php }else{ ?>
                                                    <option value="1">Actived</option>
                                                    <option value="0">Non Actived</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <input class="form-control" value="<?php echo $data->TglMulai ?>" name="TglMulai" type="date">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal Berakhir</label>
                                            <input class="form-control" value="<?php echo $data->TglBerakhir ?>" name="TglBerakhir" type="date">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Kualifikasi</label>
                                            <textarea class="ckeditor" id="ckedtor" name="Kualifikasi"><?php echo $data->Kualifikasi ?></textarea>
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