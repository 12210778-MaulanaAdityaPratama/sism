<?php $this->load->view("home/_partials/head.php") ?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                <form action="<?php echo site_url('register/add') ?>" method="post" enctype="multipart/form-data" >

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" placeholder="email"  class="form-control" <?php echo form_error('email') ? 'is-invalid':'' ?> name="email" />
                      <label class="form-label" for="name">Your Email</label>
                      <div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
                    </div>
                  </div>

                   <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" placeholder="masukkan password"  class="form-control" <?php echo form_error('sandi') ? 'is-invalid':'' ?> name="sandi" />
                      <label class="form-label" for="name">Password</label>
                      <div class="invalid-feedback">
									<?php echo form_error('sandi') ?>
								</div>
                    </div>
                  </div>

                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" placeholder="warga"  class="form-control" <?php echo form_error('level') ? 'is-invalid':'' ?> name="level" />
                      <label class="form-label" for="name">Level</label>
                      <div class="invalid-feedback">
									<?php echo form_error('level') ?>
								</div>
                    </div>
                  </div> -->

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    							<input class="btn btn-success" type="submit" name="btn" value="Daftar" />
                                  

                  </div>
                  <div class="d-flex justify-content-center mx-5 mb-30 mb-lg-4">
                  <a href="<?php echo site_url('login') ?>" class="btn btn-primary">Halaman Login</a>
                                  

                  </div>
                  

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

              <img src="https://cdn.sekolah.mu/assets/sso/register.png"
              class="img-fluid" >

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view("home/_partials/js.php") ?>