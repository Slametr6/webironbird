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
                    <h1 class="page-header">Add Service</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Add Service
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_service/action_add/" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Service</label>
                                            <input class="form-control" placeholder="Nama Service" name="NamaService" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Thumbnail</label>
                                            <div id="imagereal" style="display:none">
                                                <img id="blah" class="foto" src="" style="width:200px;height:150px">
                                            </div>
                                            <input class="form-control" placeholder="Thumbnail" name="Img" onchange="imgInp(this);" type="file" required="">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 400 x 267 px</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="Status" required="">
                                                <option value="0">Non Actived</option>
                                                <option value="1">Actived</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Detail</label>
                                            <div id="imagereal1" style="display:none">
                                                <img id="blah1" class="foto" src="" style="width:200px;height:150px">
                                            </div>
                                            <input class="form-control" onchange="imgInp1(this);" placeholder="Thumbnail" name="ImgDetail" type="file" required="">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 800 x 400 px</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <textarea class="ckeditor" id="ckedtor" name="Konten" required=""></textarea>
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

        function imgInp1(el) {
            readURL1(el);
        }

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById("blah1").style.display = "inline";
                    $('#imagereal1').attr('style', 'display:block');
                    $('#blah1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>