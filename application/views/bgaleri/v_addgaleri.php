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
                    <h1 class="page-header">Add Galeri</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Add Galeri
                        </div>
                        <div class="panel-body">
                            <button id="btn-tambah-form">+ Image</button>
                            <form role="form" action="<?php echo base_url() ?>admin_galeri/action_add/" method="POST" enctype="multipart/form-data">
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Konten</label>
                                            <input class="form-control" placeholder="Nama Konten" name="NamaKonten" type="text" required="">
                                        </div>
                                    </div>
                                    <div id="tambahkonten">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input class="form-control" placeholder="Nama Konten" name="Img[]" type="file" required="">
                                            </div>
                                        </div>
                                        <div id="insert-form"></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                            <input type="hidden" id="jumlah-form" value="1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->view('admin/js'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn-tambah-form").click(function(){

      var jumlah = parseInt($("#jumlah-form").val()); 

      var nextform = jumlah + 1; 
      var tambahkonten = document.getElementById("tambahkonten").innerHTML;

      $("#insert-form").append('<div class="col-lg-6">'+
        '<div class="form-group">'+
        '<label>Image</label>'+
        '<input class="form-control" placeholder="Nama Konten" name="Img[]" type="file">'+
        '</div>'+
        '</div>');
      $("#jumlah-form").val(nextform); 
  });
});
</script>
</body>

</html>
