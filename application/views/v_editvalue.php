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
                    <h1 class="page-header">Core Values</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Core Values
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_value/update/<?php echo str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->idvalue)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Integrity</label>
                                    <textarea name="Integrity" class="form-control"><?php echo $data->Integrity; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Execution</label>
                                    <textarea name="Execution" class="form-control"><?php echo $data->Execution; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Innovation</label>
                                    <textarea name="Innovation" class="form-control"><?php echo $data->Innovation; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Customer Focus</label>
                                    <textarea name="CustomerFocus" class="form-control"><?php echo $data->CustomerFocus; ?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Commitment</label>
                                    <textarea name="Commitment" class="form-control"><?php echo $data->Commitment; ?></textarea>
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
