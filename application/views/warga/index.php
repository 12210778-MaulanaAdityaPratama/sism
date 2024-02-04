<?php $this->load->view("admin/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("admin/_partials/breadcumb.php") ?>
                <p>Selamat Datang, <?php echo $this->session->userdata("email"); ?></p>
                <h2>Dashboard</h2>            

	<div class="tab-slider--container">
		<div id="tab1" class="tab-slider--body">
      <table class="table table-bordered">
      <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Nama Surat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sktm as $sktm_item): ?>
            <tr>
                <td><?php echo $sktm_item->nama; ?></td>
                <td><?php echo $sktm_item->nik; ?></td>
                <td><?php echo $sktm_item->jenis_kelamin; ?></td>
                <td>Surat Keterangan Tidak Mampu</td>
                <td><?php echo $sktm_item->status; ?></td>
                <td><a href="<?php echo site_url('admin/sktm/edit/'.$sktm_item->id) ?>"
											 class="btn btn-primary">Check</a>
							</td>
                
            </tr>
            <?php endforeach; ?>

            <?php foreach ($sudoteti as $sudoteti_item): ?>
            <tr>
                <td><?php echo $sudoteti_item->nama; ?></td>
                <td><?php echo $sudoteti_item->nik; ?></td>
                <td><?php echo $sudoteti_item->jenis_kelamin; ?></td>
                <td>Surat Domisili</td>
                <td><?php echo $sudoteti_item->status; ?></td>
                <td><a href="<?php echo site_url('admin/sudoteti/edit/'.$sudoteti_item->id) ?>"
											 class="btn btn-primary">Check</a>

                
            </tr>
            <?php endforeach; ?>
            
            <?php foreach ($superbeme as $superbeme_item): ?>
            <tr>
                <td><?php echo $superbeme_item->nama; ?></td>
                <td><?php echo $superbeme_item->nik; ?></td>
                <td><?php echo $superbeme_item->jenis_kelamin; ?></td>
                <td>Surat Pernyataan Belum Nikah</td>
                <td><?php echo $superbeme_item->status; ?></td>
                <td><a href="<?php echo site_url('admin/superbeme/edit/'.$superbeme_item->id) ?>"
											 class="btn btn-primary">Check</a>
                
            </tr>
            <?php endforeach; ?>

            <?php foreach ($superce as $superce_item): ?>
            <tr>
                <td><?php echo $superce_item->nama; ?></td>
                <td><?php echo $superce_item->nik; ?></td>
                <td><?php echo $superce_item->jenis_kelamin; ?></td>
                <td>Surat Pernyataan Cerai</td>
                <td><?php echo $superce_item->status; ?></td>
                <td><a href="<?php echo site_url('admin/superce/edit/'.$superce_item->id) ?>"
											 class="btn btn-primary">Check</a>
                
            </tr>
            <?php endforeach; ?>

            <?php foreach ($suratnikah as $suratnikah_item): ?>
            <tr>
                <td><?php echo $suratnikah_item->nama; ?></td>
                <td><?php echo $suratnikah_item->nik; ?></td>
                <td><?php echo $suratnikah_item->jenis_kelamin; ?></td>
                <td>Surat Nikah</td>
                <td><?php echo $suratnikah_item->status; ?></td>
                <td><a href="<?php echo site_url('admin/suratnikah/edit/'.$suratnikah_item->id) ?>"
											 class="btn btn-primary">Check</a>
                
            </tr>
            <?php endforeach; ?>
            
            <?php foreach ($suratusaha as $suratusaha_item): ?>
            <tr>
                <td><?php echo $suratusaha_item->nama; ?></td>
                <td><?php echo $suratusaha_item->nik; ?></td>
                <td><?php echo $suratusaha_item->jenis_kelamin; ?></td>
                <td>Surat Usaha</td>
                <td><?php echo $suratusaha_item->status; ?></td>
                <td><a href="<?php echo site_url('admin/suratusaha/edit/'.$suratusaha_item->id) ?>"
											 class="btn btn-primary">Check</a>
                
            </tr>
            <?php endforeach; ?>

            <!-- Tambahkan bagian ini untuk model-model lainnya -->

        </tbody>
    </table>


		</div>
	</div>

                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>

            </div>
        </div>
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>

    </body>
</html>