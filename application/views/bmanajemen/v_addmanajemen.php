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
                    <h1 class="page-header">Add Manajemen</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Add Manajemen
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_manajemen/action_add/" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name="Nama" type="text" required="">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input class="form-control" placeholder="Jabatan" name="Jabatan" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div id="imagereal" style="display:none">
                                                <img id="blah" class="foto" src="" style="width:294px;height:370px">
                                            </div>
                                            <input class="form-control" onchange="imgInp(this);" placeholder="Thumbnail" name="Img" type="file" required="">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 294 x 370 px</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->view('admin/js'); ?>
    <script type="text/javascript">
        function imgInp(el) {
            readURL(el);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById("blah").style.display = "inline";
                    $('#imagereal').attr('style', 'display:block');
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
