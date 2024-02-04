<?php $this->load->view("rt/_partials/head.php") ?>

    <body class="sb-nav-fixed">
    <?php $this->load->view("rt/_partials/navbar.php") ?>
    
        <div id="layoutSidenav">
        <?php $this->load->view("rt/_partials/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <?php $this->load->view("rt/_partials/breadcumb.php") ?>
					<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<?php if (isset($superbeme) && !empty($superbeme)): ?>

				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('rt/superbeme/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/home/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $superbeme->id?>" />

                            <div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $superbeme->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">NIK*</label>
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" name="nik" placeholder="NIK" value="<?php echo $superbeme->nik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $superbeme->tempat_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $superbeme->tgl_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Jenis Kelamin*</label>
								<select name="jenis_kelamin"  class="form-control" >
								
							<option <?php if ($superbeme->jenis_kelamin == 'Laki-Laki') { echo 'selected'; }?> value="Laki-Laki">Laki-Laki</option>
							<option <?php if ($superbeme->jenis_kelamin == 'Perempuan') { echo 'selected'; }?> value="Perempuan">Perempuan</option>
                       
                    </select>
									<?php echo form_error('jenis_kelamin') ?>
								</div>

                                <div class="form-group">
								<label for="name">Warga Negara*</label>
								<select name="warga_negara"class="form-control">
							<option <?php if ($superbeme->warga_negara == 'WNI') { echo 'selected'; }?> value="WNI">WNI</option>
							<option <?php if ($superbeme->warga_negara == 'WNA') { echo 'selected'; }?> value="WNA">WNA</option>
								</select>
									<?php echo form_error('warga_negara') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama"  class="form-control" >
								
							<option <?php if ($sudoteti->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($sudoteti->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($sudoteti->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($sudoteti->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($sudoteti->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($sudoteti->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama') ?>
								</div>
								<div class="form-group">
								<label for="name">Pekerjaan</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan" placeholder="pekerjaan" value="<?php echo $superbeme->pekerjaan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Alamat</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat" value="<?php echo $superbeme->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Keperluan*</label>
								<input class="form-control <?php echo form_error('keperluan') ? 'is-invalid':'' ?>"
								 type="text" name="keperluan" placeholder="Keperluan" value="<?php echo $superbeme->keperluan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('keperluan') ?>
								</div>
							<div>
							<div class="form-group">
								<label for="name">Nomer Telepon*</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="text" name="telp" placeholder="Nomer Telepon" value="<?php echo $superbeme->telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>
								
    <label for="status">Status</label>
    <select name="status" id="status">
    <option value="surat selesai" <?php echo ($superbeme->status == 'surat selesai') ? 'selected' : ''; ?>>Surat Selesai</option>
</select>
  </div>
						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						<?php else: ?>
							<?php redirect('rt/superbeme'); ?>
<?php endif; ?>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


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
