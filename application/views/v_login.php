<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iron Bird Logistics | Reliable Integrated Logistics Services</title>
    <link href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <center>
                        <div>
                            <img src="<?php echo base_url() ?>assets/images/logoibl.png">
                        </div>
                    </center>
                    <div class="panel-body">
                        <form role="form" method="POST" action="<?php echo base_url() ?>admin/cek_login">
                            <div style="margin:15px 15px">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NIP" name="UserID" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password">
                                </div>
                                <button class="btn btn-lg btn-warning btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/sb-admin-2.js"></script>
</body>

</html>
