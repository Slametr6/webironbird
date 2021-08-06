<div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12" id="side-bar">
    <div class="theiaStickySidebar">
        <div class="side-bar-services">
            <ul class="side-bar-list">
                <li><a href="<?= base_url() ?>service">All Services</a></li>
                <?php foreach ($data as $value): ?>
                    <li><a href="<?= base_url() ?>service/<?= $value->Slug; ?>"><?= $value->NamaService ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
