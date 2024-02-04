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

                    <table class="table table-bordered">
  <thead>
    <tr>
      
      
      <th>Nama</th>
      <th>NIK</th>
      <th>Tempat Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Status Perkawinan</th>
      <th>Pekerjaan</th>
      <th>Agama</th>
      <th>Alamat</th>
      <th>Telepon</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($sktm as $sktm): ?>
    <tr>
										
										<td>
											<?php echo $sktm->nama ?>
										</td>
                    <td>
											<?php echo $sktm->nik ?>
										</td>
                                        <td>
                                        <?php echo $sktm->tempat_lahir; ?>,  <?php echo $sktm->tgl_lahir; ?>
										</td>
                    <td>
											<?php echo $sktm->jenis_kelamin ?>
										</td>
                    <td>
											<?php echo $sktm->status_perkawinan ?>
										</td>
                                        <td>
											<?php echo $sktm->pekerjaan ?>
										</td>
                                        <td>
											<?php echo $sktm->agama ?>
										</td>
                                        <td>
											<?php echo $sktm->alamat ?>
										</td>
                    <td>
											<?php echo $sktm->telp ?>
										</td>
                    <td><?php echo $sktm->status; ?></td>
                    <td width="250">
											<a href="<?php echo site_url('warga/sktm/edit/'.$sktm->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('warga/sktm/delete/'.$sktm->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                       <a href="<?php echo site_url('warga/sktm/pdf/'.$sktm->id) ?>"
											 class="btn btn-success btn-lg"><span class="fas fa-download"></span> download</a>
										</td>
                    <?php endforeach; ?>
  </tbody>
</table>
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
