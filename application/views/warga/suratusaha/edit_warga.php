<?php $this->load->view("warga/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("warga/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("warga/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("warga/_partials/breadcumb.php") ?>
					<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<?php if (isset($suratusaha) && !empty($suratusaha)): ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('warga/suratusaha/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card mb-3">
				
					<div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">
					<!-- <form action="" method="post" enctype="multipart/form-data"> -->
					<input type="hidden" name="id" value="<?php echo $suratusaha->id?>" />

                            <div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $suratusaha->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $suratusaha->tempat_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $suratusaha->tgl_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">No KTP*</label>
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" name="nik" placeholder="No KTP" value="<?php echo $suratusaha->nik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>
                                <div class="form-group">
								<label for="name">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $suratusaha->pekerjaan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama"  class="form-control" >
								
							<option <?php if ($suratusaha->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($suratusaha->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($suratusaha->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($suratusaha->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($suratusaha->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($suratusaha->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama') ?>
								</div>
                            <div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat" value="<?php echo $suratusaha->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Nomer Telepon*</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="text" name="telp" placeholder="Nomer Telepon" value="<?php echo $suratusaha->telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>
							<label for="status">Status</label>
     <select name="status" id="status">
    
	<option value="surat ditolak" <?php echo ($suratusaha->status == 'menunggu') ? 'selected' : ''; ?>>Menunggu</option>
</select>
  </div>
			
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						<?php else: ?>
							<?php redirect('warga/suratusaha'); ?>
<?php endif; ?>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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
