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
                    <h1 class="page-header">Edit Service</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Service
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_service/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->id)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Service</label>
                                            <input class="form-control" value="<?php echo $data->NamaService ?>" name="NamaService" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Thumbnail</label>
                                            <input class="form-control" placeholder="Thumbnail" name="Img" type="file">
                                             <img id="blah" src="<?php echo base_url('/assets/images/services/') . $data->Img; ?>" style="width:200px;height:100px">
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
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Detail</label>
                                            <input class="form-control" placeholder="Thumbnail" name="ImgDetail" type="file">
                                            <img id="blah" src="<?php echo base_url('/assets/images/services/') . $data->ImgDetail; ?>" style="width:200px;height:100px">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 800 x 400 px</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <textarea class="ckeditor" id="ckedtor" name="Konten"><?php echo $data->Konten; ?></textarea>
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