<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("home/_partials/head.php") ?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php $this->load->view("home/_partials/navbar.php") ?>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2"><?php echo SITE_NAME2 ?></h1>
                                <p class="lead fw-normal text-white-50 mb-4">Selamat Datang Di Web Desa Lintah Betung Web Ini Berfungsi Untuk Membuat Surat Menyurat Anda Dengan Mudah</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="login">Selengkapnya ...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo base_url(); ?>galeri/landak.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <!-- <img src="https://cdn.sekolah.mu/assets/sso/register.png"
              class="img-fluid" >
              https://jdih.landakkab.go.id/images/foto_info/logo%20kabupaten%20landak.png -->
            <!-- Testimonial section-->
            <!-- Blog preview section-->
            <?php $this->load->view("home/_partials/artikel.php") ?>

        </main>
        <!-- Footer-->
       
        <?php $this->load->view("home/_partials/footer.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>

    </body>
</html>
