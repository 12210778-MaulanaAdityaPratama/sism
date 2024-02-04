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
					<form action="<?php echo site_url('warga/sktm/search') ?>" method="post">
						<input type="text" class="form-control" placeholder="Cari..." name="keyword">
						<div class="input-group-append">
							<input class="btn btn-primary" type="submit" name="submit" value="Search">
							<a class="btn btn-secondary" href="<?php echo site_url('warga/sktm') ?>">Reset</a>
						</div>
					</form>
					
				</div>
					<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('warga/sktm/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
                    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    
                    <p>
                                Surat Keterangan Tidak Mampu (SKTM) adalah surat yang dikeluarkan oleh pihak Desa/Kelurahan bagi Keluarga Miskin (Gakin). SKTM ini berguna bagi Gakin untuk mendapatkan perawatan dan pengobatan gratis di RS yang ada di sekitar daerah Anda, yang memang melayani SKTM/Gakin. Selain itu, SKTM juga dapat digunakan untuk mendapat keringanan biaya pendidikan dan keperluan lain yang memang membutuhkan SKTM.
                            </p>
                            <p>
                                Persyaratan membuat SKTM:
                            </p>
                            <ul>
                                <li>Masuk kategori tidak mampu</li>
                                <li>Alamat KTP harus sesuai dengan domisili</li>
                            </ul>
                            <p>
                                Dokumen awal yang harus dibawa:
                            </p>
                            <ul>
                                <li>Kartu Keluarga (KK) asli & fotokopi</li>
                                <li>Kartu Tanda Penduduk (KTP) asli & fotokopi</li>
                            </ul>
                            <p>
                                Cara membuat SKTM:
                            </p>
                            <ol>
                                <li>Bawa KTP dan KK, datangi RT setempat untuk meminta surat pengantar kurang mampu.</li>
                                <li>Bawa surat pengantarnya, beserta fotokopi KTP dan KK, urus surat pengantar atau langsung surat keterangan di Desa/Kelurahan sesuai dengan lembaga/instansi yang dituju.</li>
                                <li>Bawa surat pengantar atau keterangan dari Desa/Kelurahan ke lembaga yang dituju misal Lembaga Kesehatan atau Lembaga Pendidikan.</li>
                            </ol>
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
