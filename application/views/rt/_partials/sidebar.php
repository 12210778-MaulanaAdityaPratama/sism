<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo site_url('rt')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo site_url('rt/user')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="<?php echo site_url('rt/sktm')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                SKTM
                            </a>
                            <a class="nav-link" href="<?php echo site_url('rt/suratusaha')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Usaha
                            </a>
                            <a class="nav-link" href="<?php echo site_url('rt/sudoteti')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Domisili
                            </a>    
                            <a class="nav-link" href="<?php echo site_url('rt/suratnikah')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Pengantar Nikah
                            </a>     
                            <a class="nav-link" href="<?php echo site_url('rt/superbeme')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Pernyataan Belum Menikah
                            </a>   
                            <a class="nav-link" href="<?php echo site_url('rt/superce')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Surat Pernyataan Cerai
                            </a>                     

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata("email"); ?>
                    </div>
                </nav>
            </div>