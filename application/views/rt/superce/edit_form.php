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
				<?php if (isset($superce) && !empty($superce)): ?>
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('rt/superce/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/home/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $superce->id?>" />

                            <div class="form-group">
								<label for="name">Nama Lengkap*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $superce->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir1') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir1" placeholder="Tempat Lahir" value="<?php echo $superce->tempat_lahir1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir1') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir1" placeholder="Tanggal Lahir" value="<?php echo $superce->tgl_lahir1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Jenis Kelamin*</label>
								<select name="jenis_kelamin"  class="form-control" >
								
							<option <?php if ($superce->jenis_kelamin == 'Laki-Laki') { echo 'selected'; }?> value="Laki-Laki">Laki-Laki</option>
							<option <?php if ($superce->jenis_kelamin == 'Perempuan') { echo 'selected'; }?> value="Perempuan">Perempuan</option>
                       
                    </select>
									<?php echo form_error('jenis_kelamin') ?>
								</div>

								<div class="form-group">
								<label for="name">Warga Negara*</label>
								<select name="warga_negara1"class="form-control">
							<option <?php if ($superce->warga_negara == 'WNI') { echo 'selected'; }?> value="WNI">WNI</option>
							<option <?php if ($superce->warga_negara == 'WNA') { echo 'selected'; }?> value="WNA">WNA</option>
								</select>
									<?php echo form_error('warga_negara1') ?>
								</div>
								
                            <div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama1"  class="form-control" >
								
							<option <?php if ($superce->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($superce->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($superce->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($superce->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($superce->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($superce->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama1') ?>
								</div>
                            <div class="form-group">
								<label for="name">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan1') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan1" placeholder="Pekerjaan" value="<?php echo $superce->pekerjaan1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan1') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat1') ? 'is-invalid':'' ?>"
								 type="text" name="alamat1" placeholder="Alamat" value="<?php echo $superce->alamat1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat1') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Nama Lengkap Cerai*</label>
								<input class="form-control <?php echo form_error('nama_2') ? 'is-invalid':'' ?>"
								 type="text" name="nama_2" placeholder="Nama Cerai" value="<?php echo $superce->nama_2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir2') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir2" placeholder="Tempat Lahir" value="<?php echo $superce->tempat_lahir2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir2') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir2" placeholder="Tanggal Lahir" value="<?php echo $superce->tgl_lahir2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir2') ?>
								</div>
							</div>

								<div class="form-group">
								<label for="name">Warga Negara*</label>
								<select name="warga_negara2"class="form-control">
							<option <?php if ($superce->warga_negara == 'WNI') { echo 'selected'; }?> value="WNI">WNI</option>
							<option <?php if ($superce->warga_negara == 'WNA') { echo 'selected'; }?> value="WNA">WNA</option>
								</select>
									<?php echo form_error('warga_negara2') ?>
								</div>
								
                            <div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama2"  class="form-control" >
								
							<option <?php if ($superce->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($superce->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($superce->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($superce->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($superce->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($superce->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama2') ?>
								</div>
                            <div class="form-group">
								<label for="name">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan2') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan2" placeholder="Pekerjaan" value="<?php echo $superce->pekerjaan2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat2') ? 'is-invalid':'' ?>"
								 type="text" name="alamat2" placeholder="Alamat" value="<?php echo $superce->alamat2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Status Perkawinan Saat ini*</label>
								<select name="status1"  class="form-control" >
								
								<option <?php if ($superce->status1 == 'Cerai Mati') { echo 'selected'; }?> value="Cerai Mati">Cerai Mati</option>
								<option <?php if ($superce->status1 == 'Cerai Hidup') { echo 'selected'; }?> value="Cerai Hidup">Cerai Hidup</option>
                       
                    </select>
									<?php echo form_error('status1') ?>
								</div>
							<div>
							<div class="form-group">
								<label for="name">Nomer Telepon*</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="text" name="telp" placeholder="Nomer Telepon" value="<?php echo $superce->telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>

   	<label for="status">Status</label>
	   <select name="status" id="status">
    <option value="surat selesai" <?php echo ($superce->status == 'surat selesai') ? 'selected' : ''; ?>>Surat Selesai</option>
</select>
  </div>
						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						<?php else: ?>
							<?php redirect('rt/superce'); ?>
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
