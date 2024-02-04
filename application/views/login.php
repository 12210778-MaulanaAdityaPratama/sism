<?php $this->load->view("home/_partials/head.php") ?>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login SISM </h3>
                                </div>
                                <center>
                                    <?php if (isset($error_message)) : ?>
                                        <div class="alert alert-danger" role="alert"><?php echo $error_message; ?></div>
                                    <?php endif; ?>
                                </center>
                                <div class="card-body">
                                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="sandi" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <!-- Hapus input level karena kita ingin menentukan level secara otomatis -->
                                        <!-- <div class="form-floating mb-3">
                                            <input class="form-control" id="level" type="text" name="level" placeholder="level" />
                                            <label for="level">level</label>
                                        </div> -->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" class="btn btn-primary" value="login">
                                            <a href="<?php echo site_url('register') ?>" class="btn btn-success">Daftar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("home/_partials/js.php") ?>
</body>

</html>
