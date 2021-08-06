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
                    <h1 class="page-header">Add Slide</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Add Slide
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_slide/action_add/" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Slide</label>
                                            <input class="form-control" placeholder="Nama Slide" name="Konten" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div id="imagereal" style="display:none">
                                                <img id="blah" class="foto" src="" style="width:200px;height:150px">
                                            </div>
                                            <input class="form-control" onchange="imgInp(this);" placeholder="Thumbnail" name="Img" type="file" required="">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1200 x 537 px</label>
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
