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
                    <h1 class="page-header">Edit Internship</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Internship
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_internship/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idInternship)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <input class="form-control" value="<?php echo $data->Konten ?>" name="Konten" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" name="Img" type="file">
                                             <img id="blah" src="<?php echo base_url('/assets/images/internship/') . $data->Img; ?>" style="width:150px;height:100px">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 400 x 267 px</label>
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