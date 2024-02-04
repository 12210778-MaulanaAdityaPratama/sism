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
					<form action="<?php echo site_url('warga/sudoteti/search') ?>" method="post">
						<input type="text" class="form-control" placeholder="Cari..." name="keyword">
						<div class="input-group-append">
							<input class="btn btn-primary" type="submit" name="submit" value="Search">
							<a class="btn btn-secondary" href="<?php echo site_url('warga/sudoteti') ?>">Reset</a>
						</div>
					</form>
					
				</div>
					<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('warga/sudoteti/add') ?>"><i class="fas fa-plus"></i> Add New</a>
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
      <th>Warga Negara</th>
      <th>Agama</th>
      <th>Alamat Asal</th>
      <th>Telepon</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($sudoteti as $sudoteti): ?>
    <tr>
										
										<td>
											<?php echo $sudoteti->nama ?>
										</td>
                    <td>
											<?php echo $sudoteti->nik ?>
										</td>
                    <td>
                                        <?php echo $sudoteti->tempat_lahir; ?>,  <?php echo $sudoteti->tgl_lahir; ?>
										</td>
                    <td>
											<?php echo $sudoteti->jenis_kelamin ?>
										</td>
                    <td>
											<?php echo $sudoteti->status_perkawinan ?>
										</td>
                    <td>
											<?php echo $sudoteti->warga_negara ?>
										</td>
                                        <td>
											<?php echo $sudoteti->agama ?>
										</td>
                                        <td>
											<?php echo $sudoteti->alamat_asal ?>
										</td>
                    <td>
											<?php echo $sudoteti->telp ?>
										</td>
                    <td><?php echo $sudoteti->status; ?></td>
                    <td width="250">
											<a href="<?php echo site_url('warga/sudoteti/edit/'.$sudoteti->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('warga/sudoteti/delete/'.$sudoteti->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                       <a href="<?php echo site_url('warga/sudoteti/pdf/'.$sudoteti->id) ?>"
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
