<?php $this->load->view("rt/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("rt/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("rt/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("rt/_partials/breadcumb.php") ?>
                    <div class="input-group mb-2">
					<form action="<?php echo site_url('rt/superbeme/search') ?>" method="post">
						<input type="text" class="form-control" placeholder="Cari..." name="keyword">
						<div class="input-group-append">
							<input class="btn btn-primary" type="submit" name="submit" value="Search">
							<a class="btn btn-secondary" href="<?php echo site_url('rt/superbeme') ?>">Reset</a>
						</div>
					</form>
					
				</div>
					<div class="card mb-3">
          <a href="<?php echo site_url('rt/superbeme/add') ?>"><i class="fas fa-plus"></i> Add New</a>

					<div class="card-body">

                    <table class="table table-bordered">
  <thead>
    <tr>
      
      
      <th>Nama</th>
      <th>NIK</th>
      <th>Tempat Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Warga Negara</th>
      <th>Agama</th>
      <th>Pekerjaan</th>
      <th>Alamat</th>
      <th>Keperluan</th>
      <th>Telepon</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($superbeme as $superbeme): ?>
    <tr>
										
										<td>
											<?php echo $superbeme->nama ?>
										</td>
                    <td>
											<?php echo $superbeme->nik ?>
										</td>
                    <td>
                                        <?php echo $superbeme->tempat_lahir; ?>,  <?php echo $superbeme->tgl_lahir; ?>
										</td>
                    <td>
											<?php echo $superbeme->jenis_kelamin ?>
										</td>
                    <td>
											<?php echo $superbeme->warga_negara ?>
										</td>
                                        <td>
											<?php echo $superbeme->agama ?>
										</td>
                    <td>
											<?php echo $superbeme->pekerjaan ?>
										</td>
                                        <td>
											<?php echo $superbeme->alamat ?>
										</td>
                    <td>
											<?php echo $superbeme->keperluan ?>
										</td>
                    <td>
											<?php echo $superbeme->telp ?>
										</td>
                    <td><?php echo $superbeme->status; ?></td>
                    <td width="250">
											<a href="<?php echo site_url('rt/superbeme/edit/'.$superbeme->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('rt/superbeme/delete/'.$superbeme->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                       <a href="<?php echo site_url('rt/superbeme/pdf/'.$superbeme->id) ?>"
											 class="btn btn-success btn-lg"><span class="fas fa-download"></span> download</a>
										</td>
                    <?php endforeach; ?>
  </tbody>
</table>
					</div>
          <?php $this->load->view('rt/_partials/pagination'); ?>
				</div>
                    </div>
                </main>
                <?php $this->load->view("rt/_partials/footer.php") ?>

            </div>
        </div>
        <?php $this->load->view("rt/_partials/scrolltop.php") ?>
        <?php $this->load->view("rt/_partials/modal.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>
    </body>
</html>
