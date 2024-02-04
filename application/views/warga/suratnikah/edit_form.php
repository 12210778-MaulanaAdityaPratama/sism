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
				<?php if (isset($suratnikah) && !empty($suratnikah)): ?>

				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('warga/suratnikah/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/home/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $suratnikah->id?>" />

                            <div class="form-group">
								<label for="name">Nama Lengkap*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $suratnikah->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir1') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir1" placeholder="Tempat Lahir" value="<?php echo $suratnikah->tempat_lahir1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir1') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir1" placeholder="Tanggal Lahir" value="<?php echo $suratnikah->tgl_lahir1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Jenis Kelamin*</label>
								<select name="jenis_kelamin"  class="form-control" >
								
							<option <?php if ($suratnikah->jenis_kelamin == 'Laki-Laki') { echo 'selected'; }?> value="Laki-Laki">Laki-Laki</option>
							<option <?php if ($suratnikah->jenis_kelamin == 'Perempuan') { echo 'selected'; }?> value="Perempuan">Perempuan</option>
                       
                    </select>
									<?php echo form_error('jenis_kelamin') ?>
								</div>

								<div class="form-group">
								<label for="name">Warga Negara*</label>
								<select name="warga_negara"class="form-control">
							<option <?php if ($suratnikah->warga_negara == 'WNI') { echo 'selected'; }?> value="WNI">WNI</option>
							<option <?php if ($suratnikah->warga_negara == 'WNA') { echo 'selected'; }?> value="WNA">WNA</option>
								</select>
									<?php echo form_error('warga_negara') ?>
								</div>
								
                            <div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama1"  class="form-control" >
								
							<option <?php if ($suratnikah->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($suratnikah->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($suratnikah->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($suratnikah->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($suratnikah->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($suratnikah->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama1') ?>
								</div>
                            <div class="form-group">
								<label for="name">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan1') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan1" placeholder="Pekerjaan" value="<?php echo $suratnikah->pekerjaan1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan1') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Status Perkawinan*</label>
								<select name="status_perkawinan"  class="form-control" >
								
							<option <?php if ($suratnikah->status_perkawinan == 'Belum Kawin') { echo 'selected'; }?> value="Belum Kawin">Belum Kawin</option>
							<option <?php if ($suratnikah->status_perkawinan == 'Cerai Mati') { echo 'selected'; }?> value="Cerai Mati">Cerai Mati</option>
							<option <?php if ($suratnikah->status_perkawinan == 'Cerai Hidup') { echo 'selected'; }?> value="Cerai Hidup">Cerai Hidup</option>
                       
                    </select>
									<?php echo form_error('status_perkawinan') ?>
								</div>
							<div>
							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat1') ? 'is-invalid':'' ?>"
								 type="text" name="alamat1" placeholder="Alamat" value="<?php echo $suratnikah->alamat1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat1') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Nama Lengkap Ayah*</label>
								<input class="form-control <?php echo form_error('nama_2') ? 'is-invalid':'' ?>"
								 type="text" name="nama_2" placeholder="Nama Lengkap Ayah" value="<?php echo $suratnikah->nama_2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir2') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir2" placeholder="Tempat Lahir" value="<?php echo $suratnikah->tempat_lahir2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir2') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir2" placeholder="Tanggal Lahir" value="<?php echo $suratnikah->tgl_lahir2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama2"  class="form-control" >
								
							<option <?php if ($suratnikah->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($suratnikah->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($suratnikah->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($suratnikah->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($suratnikah->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($suratnikah->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama2') ?>
								</div>
								
							<div class="form-group">
								<label for="name">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan2') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan2" placeholder="Pekerjaan" value="<?php echo $suratnikah->pekerjaan2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan2') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat2') ? 'is-invalid':'' ?>"
								 type="text" name="alamat2" placeholder="Alamat" value="<?php echo $suratnikah->alamat2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Lengkap Ibu*</label>
								<input class="form-control <?php echo form_error('nama_3') ? 'is-invalid':'' ?>"
								 type="text" name="nama_3" placeholder="Nama Lengkap Ibu" value="<?php echo $suratnikah->nama_3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tempat Lahir*</label>
								<input class="form-control <?php echo form_error('tempat_lahir3') ? 'is-invalid':'' ?>"
								 type="text" name="tempat_lahir3" placeholder="Tempat Lahir" value="<?php echo $suratnikah->tempat_lahir3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat_lahir3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir3') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir3" placeholder="Tanggal Lahir" value="<?php echo $suratnikah->tgl_lahir3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Agama*</label>
								<select name="agama3"  class="form-control" >
								
							<option <?php if ($suratnikah->agama == 'Islam') { echo 'selected'; }?> value="Islam">Islam</option>
							<option <?php if ($suratnikah->agama == 'Khatolik') { echo 'selected'; }?> value="Khatolik">Khatolik</option>
							<option <?php if ($suratnikah->agama == 'Protestan') { echo 'selected'; }?> value="Protestan">Protestan</option>
							<option <?php if ($suratnikah->agama == 'Hindu') { echo 'selected'; }?> value="Hindu">Hindu</option>
							<option <?php if ($suratnikah->agama == 'Buddha') { echo 'selected'; }?> value="Buddha">Buddha</option>
							<option <?php if ($suratnikah->agama == 'Konghucu') { echo 'selected'; }?> value="Konghucu">Konghucu</option>
                       
                    </select>
									<?php echo form_error('agama3') ?>
								</div>

							<div class="form-group">
								<label for="name">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan3') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan3" placeholder="Pekerjaan" value="<?php echo $suratnikah->pekerjaan3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat3') ? 'is-invalid':'' ?>"
								 type="text" name="alamat3" placeholder="Alamat" value="<?php echo $suratnikah->alamat3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat3') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Nomer Telepon*</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="text" name="telp" placeholder="Nomer Telepon yang bisa dihubungi" value="<?php echo $suratnikah->telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>

   	<label for="status">Status</label>
	   <select name="status" id="status">
    <option value="menunggu" <?php echo ($suratnikah->status == 'menunggu') ? 'selected' : ''; ?>>Menunggu</option>
    <option value="surat selesai" <?php echo ($suratnikah->status == 'surat selesai') ? 'selected' : ''; ?>>Surat Selesai</option>
    <option value="surat belum selesai" <?php echo ($suratnikah->status == 'surat belum selesai') ? 'selected' : ''; ?>>Surat Belum Selesai</option>
</select>
  </div>
						
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						<?php else: ?>
							<?php redirect('warga/suratnikah'); ?>
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
