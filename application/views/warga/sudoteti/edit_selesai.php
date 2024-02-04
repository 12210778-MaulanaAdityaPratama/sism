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
                <?php if (isset($sudoteti) && !empty($sudoteti)): ?>
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('warga/sudoteti/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/home/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $sudoteti->id?>" />

                            <div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $sudoteti->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">NIK*</label>
								<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
								 type="text" name="nik" placeholder="NIK" value="<?php echo $sudoteti->nik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $sudoteti->tempat_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $sudoteti->tgl_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Jenis Kelamin*</label>
								<select name="jenis_kelamin"  class="form-control" >
								
							<option <?php if ($sudoteti->jenis_kelamin == 'Laki-Laki') { echo 'selected'; }?> value="Laki-Laki">Laki-Laki</option>
							<option <?php if ($sudoteti->jenis_kelamin == 'Perempuan') { echo 'selected'; }?> value="Perempuan">Perempuan</option>
                       
                    </select>
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							<div class="form-group">
								<label for="name">Status Perkawinan*</label>
								<select name="status_perkawinan"  class="form-control" >
								
							<option <?php if ($sudoteti->status_perkawinan == 'Kawin') { echo 'selected'; }?> value="Kawin">Kawin</option>
							<option <?php if ($sudoteti->status_perkawinan == 'Belum Kawin') { echo 'selected'; }?> value="Belum Kawin">Belum Kawin</option>
                       
                    </select>
									<?php echo form_error('status_perkawinan') ?>
								</div>
                                <div class="form-group">
								<label for="name">Warga Negara*</label>
								<select name="warga_negara"class="form-control">
							<option <?php if ($sudoteti->warga_negara == 'WNI') { echo 'selected'; }?> value="WNI">WNI</option>
							<option <?php if ($sudoteti->warga_negara == 'WNA') { echo 'selected'; }?> value="WNA">WNA</option>
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
								<label for="name">Alamat Asal*</label>
								<input class="form-control <?php echo form_error('alamat_asal') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_asal" placeholder="Alamat Asal" value="<?php echo $sudoteti->alamat_asal ?>" />
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
							
                            <label for="status">Status</label>
   <select name="status" id="status">
    <option value="menunggu" <?php echo ($sudoteti->status == 'menunggu') ? 'selected' : ''; ?>>Menunggu</option>
    <option value="surat selesai" <?php echo ($sudoteti->status == 'surat selesai') ? 'selected' : ''; ?>>Surat Selesai</option>
    <option value="surat belum selesai" <?php echo ($sudoteti->status == 'surat belum selesai') ? 'selected' : ''; ?>>Surat Belum Selesai</option>
</select>
  </div>
						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
                            <?php if ($sudoteti->status == 'surat selesai'): ?>
    <div class="form-group mt-3">
    <a href="https://wa.me/<?php echo $sudoteti->telp; ?>" target="_blank" class="btn btn-success">Hubungi via WhatsApp</a>
    </div>
<?php endif; ?>
						</form>
                        <?php else: ?>
							<?php redirect('warga/sudoteti'); ?>
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
