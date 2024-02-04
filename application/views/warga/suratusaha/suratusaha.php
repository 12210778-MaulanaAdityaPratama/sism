<?php $this->load->view("warga/_partials/head.php") ?>

<body class="sb-nav-fixed">
    <?php $this->load->view("warga/_partials/navbar.php") ?>

    <div id="layoutSidenav">
        <?php $this->load->view("warga/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?php $this->load->view("warga/_partials/breadcumb.php") ?>
                    <div class="input-group mb-2">
                        <form action="<?php echo site_url('warga/suratusaha/search') ?>" method="post">
                            <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit" value="Search">
                                <a class="btn btn-secondary" href="<?php echo site_url('warga/suratusaha') ?>">Reset</a>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('warga/suratusaha/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Informasi Surat Usaha -->
                            <h5>Surat Usaha</h5>
                            <p>Surat Usaha adalah dokumen resmi yang memberikan izin atau legalitas kepada suatu usaha atau bisnis.</p>

                            <!-- Syarat Surat Usaha -->
                            <h5>Syarat Surat Usaha</h5>
                            <ul>
                                <li>Perizinan Usaha yang sesuai dengan jenis usaha.</li>
                                <li>TDP (Tanda Daftar Perusahaan) yang telah terdaftar dan sah.</li>
                                <li>NPWP perusahaan dan pemilik usaha.</li>
                                <li>SIUP (Surat Izin Usaha Perdagangan) jika bergerak di bidang perdagangan.</li>
                                <li>Surat Keterangan Domisili Usaha.</li>
                                <li>IMB (Izin Mendirikan Bangunan) jika usaha melibatkan bangunan fisik.</li>
                                <li>Fotokopi KTP pemilik usaha.</li>
                                <li>Rencana Bisnis (jika diperlukan oleh regulasi setempat).</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view("warga/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("warga/_partials/scrolltop.php") ?>
    <?php $this->load->view("warga/_partials/modal.php") ?>
    <?php $this->load->view("home/_partials/js.php") ?>
</body>

</html>
