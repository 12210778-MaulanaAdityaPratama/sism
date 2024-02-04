<?php $this->load->view("home/_partials/head.php") ?>
<?php $this->load->view("home/_partials/navbar.php") ?>

<section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Tentang Desa Lintah Betung</h1>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl-8">
                            <!-- FAQ Accordion 1-->
                            <h2 class="fw-bolder mb-3">Pertanyaan</h2>
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pertanyaan 1</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Apa Pekerjaan penduduk desa Lintah Betung?</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Pertanyaan 2</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Di Desa Lintah Betung ada berapa bahasa dan apa bahasa sehari-hari mereka?</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Pertanyaan 3</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Apa suku Masyarakat Desa Lintah Betung?</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Accordion 2-->
                            <h2 class="fw-bolder mb-3">Jawaban</h2>
                            <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Jawaban 1</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <strong>Pekerjaan penduduk desa Lintah Betung kebanyakan adalah sebagai petani dan banyak juga bekerja di perusahaan sawit hampir 30% masyarakat desa Lintah Betungbekerja di perusahaan sawit dan hampir 50% adalah petani dan sisanya pekerjaan lain-lain</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Jawaban 2</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <strong>Bahasa di desa Lintah Betung ada beberapa yaitu bahasa "BANYADU" "BANANEK" dan "BANANAK" <br>
                                        -Bahasa banyadu yaitu bahasa yang digunakan dusun Jampa dan dusun Padang Mayun <br>
                                    -Bahasa Bananek yaitu bahasa yang digunakan dusun Tekam tetapi di dunun Tekam ini juga ada sebagian yang menggunakan bahasa banyadu <br>
                                -Bahas Bananak yaitu bahasa yang digunakan dusun Lintah Betung <br>
                            ada juga dusun Sahang yaitu menggunakan bahasa banyadu dan bahasa bananek di dusun ini mereka mengabungkan bahasa tersebut untuk bahasa sehari-hari mereka </strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Jawaban 3</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <strong>Desa Lintah Betung hampir seuruh masyarakatnya adalah suku Dayak</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
        
            </section>
        </main>
        <?php $this->load->view("home/_partials/footer.php") ?>
        <?php $this->load->view("home/_partials/js.php") ?>