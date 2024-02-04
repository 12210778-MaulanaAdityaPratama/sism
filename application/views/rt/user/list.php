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
					<form action="<?php echo site_url('rt/user/search') ?>" method="post">
						<input type="text" class="form-control" placeholder="Cari Berdasarkan Email" name="keyword">
						<div class="input-group-append">
							<input class="btn btn-primary" type="submit" name="submit" value="Search">
							<a class="btn btn-secondary" href="<?php echo site_url('rt/user') ?>">Reset</a>
						</div>
					</form>
					
				</div>

					<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('rt/user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Email</th>
										<th>Sandi</th>
										<th>Level</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($user as $user): ?>
									<tr>
										<td width="150">
											<?php echo $user->email ?>
										</td>
										<td>
											<?php echo $user->sandi ?>
										</td>
										<td>
											<?php echo $user->level ?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('rt/user/edit/'.$user->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('rt/user/delete/'.$user->id) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
						<?php $this->load->view('rt/_partials/pagination'); ?>
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
