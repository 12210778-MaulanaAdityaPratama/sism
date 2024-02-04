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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('warga/sudoteti/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card mb-3">
				
					<div class="card-body">

						<form action="<?php echo site_url('warga/sudoteti/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">NIK*</label>
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" name="nik" placeholder="NIK" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Jenis Kelamin*</label>
								<select name="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Status Perkawinan*</label>
								<select name="status_perkawinan" class="form-control">
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                    </select>
								<div class="invalid-feedback">
									<?php echo form_error('status_perkawinan') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Warga Negara*</label>
								<select name="warga_negara" class="form-control">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
								<div class="invalid-feedback">
									<?php echo form_error('warga_negara') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
								<div class="invalid-feedback">
									<?php echo form_error('agama') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Alamat Asal*</label>
								<input class="form-control <?php echo form_error('alamat_asal') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_asal" placeholder="Alamat Asal" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_asal') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Keperluan*</label>
								<input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 type="text" name="keterangan" placeholder="Keperluan" value="<?php echo $sudoteti->keterangan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							<div>
							<div class="form-group">
								<label for="name">Nomer Telepon*</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="text" name="telp" placeholder="Nomer Telepon" value="<?php echo $sudoteti->telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>

						
  </div>
						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
                <?php $this->load->view("warga/_partials/footer.php") ?>

            </div>
        </div>
        <?php $this->load->view("warga/_partials/scrolltop.php") ?>
        <?php $this->load->view("warga/_partials/modal.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>

    </body>
</html>
