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
                    <h1 class="page-header">Sosial Media</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Sosial Media
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_sosmed/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idsosmed)) ?>" method="POST" enctype="multipart/form-data">
                                <label>Whatsapp</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">+</span>
                                    <input type="text" name="whatsapp" class="form-control" value="<?php echo $data->whatsapp; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="link" class="form-control" value="<?php echo $data->link; ?>">
                                </div>
                                <label>Instagram</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" name="instagram" class="form-control" value="<?php echo $data->instagram; ?>">
                                </div>
                                <button type="submit" class="btn btn-warning">Publish</button>
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