<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <?php $this->view('include/header'); ?>
    <section class="custom-paddinggs services">
        <div class="container">
            <div class="row" style="text-align: justify;">
                <div id="services-2">
                    <h2 style="padding: 20px 0 20px 20px;">OUR COMPANY VALUES</h2>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid a" style="height: 308px;">
                            <div class=""> 
                                <img src="<?php echo base_url() ?>assets/images/values/integrity.png"> </div>
                            <h4>Integrity</h4>
                            <p>Kita senantiasa menerapkan standar etika dan moral tertinggi dengan selalu mengedepankan azas kejujuran dan keadilan dalam setiap kegiatan.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class=""> 
                                <img src="<?php echo base_url() ?>assets/images/values/execution.png"> </div>
                            <h4>Execution</h4>
                            <p>Kita berkomitment untuk melaksanakan strategy perusahaan, menerjemahkan dan mewujudkan strategi perusahaan menjadi tindakan yang nyata, sampai mendapatkan hasil yang berpengaruh langsung pada bisnis kita.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid" style="height: 308px;">
                            <div class=""> 
                                <img src="<?php echo base_url() ?>assets/images/values/innovation.png"></div>
                            <h4>Innovation</h4>
                            <p>Kita senantiasa berupaya melahirkan ide-ide kreatif, gagasan, dan inovasi, untuk mengantisipasi kebutuhan pelanggan dan untuk mencapai tujuan dan kemajuan organisasi.</p>
                        </div>
                    </div>
                    <div class="clearfix  hidden-sm"></div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="">
                                <img src="<?php echo base_url() ?>assets/images/values/customer-focus.png"> </div>
                            <h4>Customer Focus</h4>
                            <p>Kita senantiasa memberikan usaha terbaik untuk menciptakan kepuasan pelanggan, sehingga tumbuh bersama secara berkesinambungan.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="">
                                <img src="<?php echo base_url() ?>assets/images/values/commitment.png"> </div>
                            <h4>Commitment</h4>
                            <p>Kita senantiasa memberikan upaya terbaik yang ditunjukkan dalam sikap kerja untuk selalu melaksanakan apa saja yang telah menjadi kesepakatan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->view('include/copyright'); ?>
    <?php $this->view('include/js'); ?>
</body>

</html>