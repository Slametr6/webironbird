<div class="col-sm-12 col-xs-12 col-md-4">
    <div class="side-bar">
        <!-- widget -->
        <div class="search">
            <div class="widget">
                <form action="<?php echo base_url() ?>media/berita">
                    <input type="text" name="search" placeholder="Cari Berita...">
                    <button type="submit"> <i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="widget">
            <div class="latest-news">
                <h2>Berita Terbaru</h2>
                <?php foreach ($latest as $baru) { ?>
                <div class="post">
                    <figure class="post-thumb"><img alt="" src="<?php echo base_url() ?>assets/images/blog/<?php echo $baru->Imgberita; ?>"></figure>
                    <h4><a href="<?php echo base_url() ?>media/detail/<?php echo $baru->Slug; ?>"><?php echo $baru->Judul; ?> </a></h4>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- <div class="widget">
            <div class="category">
                <h2>Category</h2>
                <ul>
                    <li><a href="#">Land Transportation </a> </li>
                    <li><a href="#">Sea Forwarding</a></li>
                    <li><a href="#">Air Forwarding</a></li>
                    <li><a href="#">Warehouseing</a></li>
                    <li><a href="#">Kerja Sama</a></li>
                    <li><a href="#">Logistics Project</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</div>