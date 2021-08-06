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
                    <h1 class="page-header">Add User</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Add User
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>admin_user/action_add/" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" placeholder="NIP" name="UserID" type="text" onkeyup="cek_nip(this.value)" required="">
                                            <div id="info" style="display:none">
                                                <label id="cek" style="color: #cd5730;font-size:12px"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" placeholder="User Name" name="NickName" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Name" name="Name" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" onkeyup="cek_email(this.value)" placeholder="Email" name="Email" type="email" required="">
                                            <div id="infoemail" style="display:none">
                                                <label id="cekemail" style="color: #cd5730;font-size:12px"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="password" onkeyup="validate_password()" placeholder="Password" name="Password" type="Password" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" id="ulangi_password" onkeyup="validate_ulangi_password()" placeholder="Confirm Password" name="Password" type="Password" required="">
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
        function cek_nip(value) {
            $.ajax({
                url: "<?php echo base_url(); ?>real/cek_nip",
                method: "GET",
                data: {
                    UserID: value,
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.status == 1) {
                        $('#info').attr("style", 'display:block');
                        $('#cek').html("Nik sudah terdaftar, silahkan coba nik lain!");
                        $("#simpan").attr("disabled", "true");
                    } else {
                        $('#info').attr("style", 'display:none');
                        $('#cek').html('');
                        $("#simpan").removeAttr("disabled");
                    }
                }
            });
        }

        function cek_email(value) {
            $.ajax({
                url: "<?php echo base_url(); ?>real/cek_email",
                method: "GET",
                data: {
                    email: value,
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.status == 1) {
                        $('#infoemail').attr("style", 'display:block');
                        $('#cekemail').html("Email sudah terdaftar, silahkan coba email lain!");
                        $("#simpan").attr("disabled", "true");
                    } else {
                        $('#infoemail').attr("style", 'display:none');
                        $('#cekemail').html('');
                        $("#simpan").removeAttr("disabled");
                    }
                }
            });
        }

        function validate_password() {
            var password = $("#password").val();
            if (password.length < 8) {
                $("#password")[0].setCustomValidity("Password minimal 8 karakter");
            } else {
                $("#password")[0].setCustomValidity('');
            }
        }

        function validate_ulangi_password() {
            var password = $("#password").val();
            var ulangi_password = $("#ulangi_password").val();
            if (ulangi_password != password) {
                $("#ulangi_password")[0].setCustomValidity("Password Tidak Sama");
            } else {
                $("#ulangi_password")[0].setCustomValidity('');
            }
        }
    </script>
</body>

</html>
