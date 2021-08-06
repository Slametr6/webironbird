<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand">Admin Panel Iron Bird Logistics</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <span style="font-size: 15px;">Welcome, <?= $this->session->userdata('NickName'); ?></span>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?= base_url() ?>admin/logout/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?= base_url() ?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog fa-fw"></i> Other Setting<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url() ?>admin_user">Manage Users</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Admin_sosmed">Manage Sosmed</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Admin_alasan">Manage Why Choose Us</a>
                        </li>
						<li>
                            <a href="<?= base_url() ?>Admin_value">Manage Core Values</a>
                        </li>
						<li>
							<a href="<?= base_url() ?>Admin_visimisi">Manage Visi & Misi</a>
						</li>
						<li>
							<a href="<?= base_url() ?>Admin_slide">Manage Slide</a>
						</li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file fa-fw"></i> Pages<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url() ?>admin_service">Services</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>admin_berita">Berita</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>admin_galeri">Galeri</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>admin_pencapaian">Pencapaian</a>
                        </li>
						<li>
                            <a href="<?= base_url() ?>admin_manajemen">Manajemen</a>
                        </li>
						<li>
                            <a href="<?= base_url() ?>admin_kantor">Alamat Kantor</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-archive fa-fw"></i> Karir<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url() ?>admin_karir">Loker</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>admin_internship">Intenship</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>        
    </div>
</nav>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>
