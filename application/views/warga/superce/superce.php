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
                        <form action="<?php echo site_url('warga/superce/search') ?>" method="post">
                            <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit" value="Search">
                                <a class="btn btn-secondary" href="<?php echo site_url('warga/superce') ?>">Reset</a>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('warga/superce/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <p>Surat Cerai adalah dokumen resmi yang dikeluarkan oleh instansi yang berwenang, seperti Pengadilan Agama, yang menyatakan bahwa suatu pasangan suami istri resmi bercerai dan tidak lagi memiliki ikatan perkawinan.</p>

                            <p>Untuk mengurus Surat Cerai, berikut adalah beberapa syarat yang biasanya diperlukan:</p>
                            <ul>
                                <li>Salinan Akta Nikah yang sudah dilegalisir.</li>
                                <li>Salinan Kartu Keluarga (KK) yang sudah dilegalisir.</li>
                                <li>Surat Permohonan Cerai (biasanya tersedia di Pengadilan Agama).</li>
                                <li>Fotokopi KTP suami dan istri yang akan bercerai.</li>
                                <li>Bukti pembayaran biaya administrasi perceraian.</li>
                                <li>Apabila terdapat harta bersama, surat pembagian harta.</li>
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
