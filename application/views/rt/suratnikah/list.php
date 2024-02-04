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
					<form action="<?php echo site_url('rt/suratnikah/search') ?>" method="post">
						<input type="text" class="form-control" placeholder="Cari..." name="keyword">
						<div class="input-group-append">
							<input class="btn btn-primary" type="submit" name="submit" value="Search">
							<a class="btn btn-secondary" href="<?php echo site_url('rt/suratnikah') ?>">Reset</a>
						</div>
					</form>
					
				</div>
					<div class="card mb-3">
          <a href="<?php echo site_url('rt/suratnikah/add') ?>"><i class="fas fa-plus"></i> Add New</a>

					<div class="card-body">

                    <table class="table table-bordered">
  <thead>
    <tr>
      
      
      <th>Nama Lengkap</th>
      <th>Tempat Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Warga Negara</th>
      <th>Agama</th>
      <th>Pekerjaan</th>
      <th>Alamat</th>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>Telepon</th>
      <th>Status</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($suratnikah as $suratnikah): ?>
    <tr>
										
										<td>
											<?php echo $suratnikah->nama ?>
										</td>
                    <td>
                                        <?php echo $suratnikah->tempat_lahir1; ?>,  <?php echo $suratnikah->tgl_lahir1; ?>
										</td>
                    <td>
											<?php echo $suratnikah->jenis_kelamin ?>
										</td>
                    <td>
											<?php echo $suratnikah->warga_negara ?>
										</td>
                    <td>
											<?php echo $suratnikah->agama1 ?>
										</td>
                    <td>
                    <?php echo $suratnikah->pekerjaan1 ?>
                    </td>
                    <td>
											<?php echo $suratnikah->alamat1 ?>
										</td>
                    <td>
											<?php echo $suratnikah->nama_2 ?>
										</td>
                    <td>
											<?php echo $suratnikah->nama_3 ?>
										</td>
                    <td>
											<?php echo $suratnikah->telp ?>
										</td>
                    <td><?php echo $suratnikah->status; ?></td>
                    <td width="250">
											<a href="<?php echo site_url('rt/suratnikah/edit/'.$suratnikah->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('rt/suratnikah/delete/'.$suratnikah->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                       <a href="<?php echo site_url('rt/suratnikah/pdf/'.$suratnikah->id) ?>"
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
