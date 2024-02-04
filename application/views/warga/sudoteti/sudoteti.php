<?php $this->load->view("warga/_partials/head.php") ?>

<body class="sb-nav-fixed">
    <?php $this->load->view("warga/_partials/navbar.php") ?>

    <div id="layoutSidenav">
        <?php $this->load->view("warga/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?php $this->load->view("warga/_partials/breadcumb.php") ?>
                    <div class="input-group mb-2">
                        <form action="<?php echo site_url('warga/sudoteti/search') ?>" method="post">
                            <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit" value="Search">
                                <a class="btn btn-secondary" href="<?php echo site_url('warga/sudoteti') ?>">Reset</a>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('warga/sudoteti/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">
                        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
                            <p>SURAT keterangan domisili adalah dokumen resmi yang dikeluarkan pihak berwenang, seperti pemerintah daerah atau kelurahan, yang digunakan untuk membuktikan seseorang atau sebuah entitas memiliki alamat atau tempat tinggal di suatu wilayah tertentu. Secara garis besar, Surat Keterangan Domisili hanya selembar kertas yang di dalamnya terdapat keterangan dan data diri lengkap seorang pendatang di suatu daerah. Tentunya surat ini disahkan oleh pejabat berwenang yang dapat digunakan untuk mengurus berbagai keperluan. Dokumen ini banyak digunakan tidak hanya untuk mengurus pembukaan rekening bank, tetapi juga pada saat mengurus berkas pernikahan, melamar pekerjaan, hingga mendaftarkan anak ke sekolah.</p>

                            <p>Nah, bagi Anda yang ingin membuat Surat Keterangan Domisili, ada beberapa syarat dan ketentuan yang harus dipenuhi. Berikut ini ulasan terkait membuat dan mengajukan Surat Keterangan Domisili.</p>

                            <p>Fungsi surat keterangan domisili:</p>
                            <ul>
                                <li>Untuk keperluan kerja atau dinas luar kota</li>
                                <li>Sebagai syarat pengajuan beasiswa pendidikan</li>
                                <li>Untuk mengurus akta kelahiran anak</li>
                                <li>Sebagai syarat mengurus dokumen legal</li>
                                <li>Untuk mengurus dokumen pernikahan</li>
                                <li>Sebagai syarat pendaftaran sekolah</li>
                                <li>Sebagai persyaratan izin pendirian usaha</li>
                                <li>Dokumen sementara pengganti KTP</li>
                            </ul>

                            <p>Perlu diingat, SKD yang ada memiliki format yang berbeda-beda tergantung dari kebutuhannya. Oleh karena itu, jika Anda ingin membuat SKD untuk dua kebutuhan yang berbeda, ada baiknya Anda menyiapkan dokumen pengajuan SKD rangkap.</p>

                            <p>Syarat dan prosedur membuat surat keterangan domisili:</p>
                            <ul>
                                <li>Surat permohonan yang ditandatangani di atas materai Rp6.000 (surat ini nantinya akan diberikan ke RT/RW untuk ditukarkan ke surat pengantar)</li>
                                <li>Pas foto 3X4 (untuk warna latar dan jumlah yang dibutuhkan tergantung dari kebijakan masing-masing daerah)</li>
                                <li>Surat pengantar dari ketua RT dan RW asal domisili Anda</li>
                                <li>KTP Asli dan Kartu Keluarga (KK) beserta fotokopiannya</li>
                                <li>Surat Kuasa jika dikuasakan (Jika Diwakilkan oleh Pihak Ketiga dan Sudah dibubuhi tanda tangan lengkap dengan materai Rp6.000)</li>
                                <li>Fotokopi NPWP (khusus badan usaha)</li>
                            </ul>

                            <p>Untuk membuat surat keterangan domisili cukuplah mudah. Anda bisa mengikuti tahapan di bawah ini.</p>
                            <ol>
                                <li>Buat surat permohonan lalu pergi ke rumah RT dan RW untuk mendapatkan surat pengantar.</li>
                                <li>Setelah surat pengantar diperoleh, Anda bisa langsung mengajukan surat domisili ke petugas kelurahan setempat.</li>
                                <li>Petugas akan mengecek kelengkapan data dan jika sudah lengkap semua, selanjutnya petugas akan memproses surat keterangan domisili dan akan ditandatangani oleh lurah atau kepala desa.</li>
                                <li>Surat domisili siap untuk Anda gunakan.</li>
                            </ol>

                            <p>Sebagai tambahan informasi, jika Anda membutuhkan surat domisili lebih dari satu maka Anda perlu melampirkan persyaratan yang ada secara rangkap. Selain itu, surat domisili memiliki batasan waktu yang berlaku. Jadi, bila Anda membutuhkannya lagi Anda dapat kembali memperbaharuinya.</p>
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
