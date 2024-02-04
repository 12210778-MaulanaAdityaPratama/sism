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
                        <form action="<?php echo site_url('warga/superbeme/search') ?>" method="post">
                            <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit" value="Search">
                                <a class="btn btn-secondary" href="<?php echo site_url('warga/superbeme') ?>">Reset</a>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('warga/superbeme/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <p>Surat Keterangan Belum Menikah adalah surat yang menerangkan belum pernah menikah alias berstatus lajang. Pada umumnya, surat ini dibuat sebagai persyaratan melamar pekerjaan, mengurus pernikahan, pengajuan beasiswa, urusan kampus, maupun keperluan atau perjanjian tertentu.</p>

                            <p>Berikut persyaratan yang diperlukan untuk melakukan proses layanan:</p>
                            <ul>
                                <li>Surat Pengantar RT/RW *</li>
                                <li>Kartu Tanda Penduduk (KTP) *</li>
                                <li>Kartu Keluarga (KK) *</li>
                                <li>Akta Cerai (Bagi Yang Menikah Lagi)</li>
                                <li>Surat Pernyataan Pribadi Belum Menikah *</li>
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
