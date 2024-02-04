<?php $this->load->view("home/_partials/head.php") ?>
<?php $this->load->view("home/_partials/navbar.php") ?>

<section class="py-5"  <?php foreach ($artikel as $artikel): ?>>
                <div class="container px-5">
                    <h1 class="fw-bolder fs-5 mb-4">Artikel Terkini</h1>
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                        
                                        <div class="h2 fw-bolder"><?php echo $artikel->nama ?></div>
                                        
                                        <a class="stretched-link text-decoration-none"><?php echo $artikel->isi ?>
                                        
                                          
                                            
                                        </a>
                                       
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('https://dummyimage.com/700x350/343a40/6c757d')"></div></div>
                                
                            </div>
                           
                        </div>
                        
                    </div>
                   
                </div>
                <?php endforeach; ?>
            </section>
            
            <?php $this->load->view("home/_partials/artikel.php") ?>


            <?php $this->load->view("home/_partials/footer.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>