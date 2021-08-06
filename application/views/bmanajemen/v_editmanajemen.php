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
                    <h1 class="page-header">Edit Manajemen</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Manajemen
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_manajemen/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idmanajemen)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" value="<?php echo $data->Nama ?>" name="Nama" type="text">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input class="form-control" value="<?php echo $data->Jabatan ?>" name="Jabatan" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" name="Img" type="file">
                                             <img id="blah" src="<?php echo base_url('/assets/images/team/') . $data->Img; ?>" style="width:294px;height:370px">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 294 x 370 px</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
