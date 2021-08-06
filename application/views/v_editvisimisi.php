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
                    <h1 class="page-header">Visi Misi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Visi Misi
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?= base_url() ?>admin_visimisi/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idvisimisi)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Visi</label>
                                    <textarea name="Visi" class="ckeditor"><?= $data->Visi; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Misi</label>
                                    <textarea name="Misi" class="ckeditor"><?= $data->Misi; ?></textarea>
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
