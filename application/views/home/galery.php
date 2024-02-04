<?php $this->load->view("home/_partials/head.php") ?>
<?php $this->load->view("home/_partials/navbar.php") ?>
<section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Galeri</h1>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-3 mb-3" src="<?php echo base_url(); ?>galeri/2(1).jpeg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="#!">Foto Kegiatan</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-5">
                            <img class="img-fluid rounded-3 mb-3" src="<?php echo base_url(); ?>galeri/3(1).jpeg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="#!">Foto Kegiatan</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-5 mb-lg-0">
                            <img class="img-fluid rounded-3 mb-3" src="<?php echo base_url(); ?>galeri/1(1).jpeg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="#!">Foto Kegiatan</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative">
                            <img class="img-fluid rounded-3 mb-3" src="<?php echo base_url(); ?>galeri/6(1).jpeg" alt="..." />
                                <a class="h3 fw-bolder text-decoration-none link-dark stretched-link" href="#!">Foto Kegiatan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php $this->load->view("home/_partials/footer.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>