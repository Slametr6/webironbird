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
                    <h1 class="page-header">Alasan Memilih Kami</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Alasan Memilih Kami
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_alasan/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idalasan)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Layanan Pengiriman Cepat</label>
                                    <textarea name="LayananPengirimanCepat" class="form-control"><?php echo $data->LayananPengirimanCepat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keselamatan Dan Kenyamanan</label>
                                    <textarea name="KeselamatanDanKenyamanan" class="form-control"><?php echo $data->KeselamatanDanKenyamanan; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pelayanan Terbaik</label>
                                    <textarea name="PelayananTerbaik" class="form-control"><?php echo $data->PelayananTerbaik; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Customer Focus</label>
                                    <textarea name="CustomerFocus" class="form-control"><?php echo $data->CustomerFocus; ?></textarea>
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
