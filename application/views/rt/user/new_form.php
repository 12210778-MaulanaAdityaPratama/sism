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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('rt/user/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('rt/user/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="email" name="email" placeholder="Email" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Sandi*</label>
								<input class="form-control <?php echo form_error('sandi') ? 'is-invalid':'' ?>"
								 type="password" name="sandi" placeholder="sandi" />
								<div class="invalid-feedback">
									<?php echo form_error('sandi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Level*</label>
								 <select name="level" id="level" name="level" aria-placeholder="level">
  <option value="warga">Warga</option>
  <option value="rt">rt</option>
</select> 

								<div class="invalid-feedback">
									<?php echo form_error('level') ?>
								</div>
							</div>


						
							


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
                <?php $this->load->view("rt/_partials/footer.php") ?>

            </div>
        </div>
        <?php $this->load->view("rt/_partials/scrolltop.php") ?>
        <?php $this->load->view("rt/_partials/modal.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>

    </body>
</html>
