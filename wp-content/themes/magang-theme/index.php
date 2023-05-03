<?php

/**
 *  Template Name: Page Home 
 */

$tampil_data = recentNewsIndex('news');
?>

<?php get_header(); ?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/carousel-1.jpg'; ?>" alt="Image"
                    class="w-100" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase">CELOE CODE</h5>
                        <h1 class="display-1 text-white mb-md-4">Bagian Pengembangan Konten CELOE</h1>
                        <a href="https://wa.me/6281299923563"
                            class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/carousel-2.jpg'; ?>" alt="Image"
                    class="w-100" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase">CELOE CODE</h5>
                        <h1 class="display-1 text-white mb-md-4">Harmony, Excellence, Integrity</h1>
                        <a href="https://wa.me/6281299923563"
                            class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/carousel-3.jpg'; ?>" alt="Image"
                    class="w-100" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase">CELOE CODE</h5>
                        <h1 class="display-1 text-white mb-md-4">Manajemen Mata kuliah & Pembelajaran</h1>
                        <a href="https://wa.me/6281299923563"
                            class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5" style="margin-top: 10px;">
                <h1 class="display-5 mb-4">Welcome To <span class="text-primary">CELOE CODE</span></h1>
                <h4 class="text-primary mb-4">Bagian Pengembangan Konten CeLOE</h4>
                <p class="mb-4">CeLOE digambarkan sebagai pemanfaatan e-learning secara luas dalam bingkai Telkom
                    University sebagai kampus digital. Pemanfaatan dimaksud adalah: e-learning sebagai pendukung
                    pembelajaran regular (e-Supported Learning) e-Learning sebagai bagian dari pembelajaran reguler
                    (Blended Learning)</p>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Pengguna CeLOE</h3>
                            <p class="mb-0">CeLOE tidak hanya bisa diakses oleh pihak Telkom University saja, melainkan
                                juga disediakan untuk eksternal. Aplikasi ini bisa digunakan oleh masyarakat luas,
                                tetapi harus melakukan registrasi melalui OCW.</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cogs fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Landing Page CeLOE</h3>
                            <p class="mb-0">Aplikasi CeLOE merupakan landing page yang berkaitan dengan kegiatan digital
                                learning di Telkom University. Ada banyak informasi yang didapatkan seperti berita
                                terbaru, profile, dan kebijakan terkait digital learning. </p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-rocket fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Aktivitas di CeLOE</h3>
                            <p class="mb-0">Ada banyak hal yang bisa dilakukan melalui aplikasi ini, seperti membuat
                                program pembelajaran berbasis virtual. Berikutnya, ada LMS yang berisi laporan untuk
                                program pembelajaran berbasis blended learning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <?php if (!empty($tampil_data)) : ?>
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Berita Terbaru</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <!-- <div class="row g-5">
            <?php
            foreach ($tampil_data as $data) :
            ?>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden"></div>
                    <img src="<?= content_url() . '/uploads/images/news/' . $data->gambar; ?>" alt="Image" height="200"
                        width="100%" style="object-fit: cover;" />
                </div>
                <div class="bg-secondary d-flex">
                    <div
                        class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                        <?php
                        $tanggal = date('d', strtotime($data->date_added));
                        $bulan = date('M', strtotime($data->date_added));
                        $tahun = date('Y', strtotime($data->date_added));
                        ?>
                        <span><?php echo $tanggal; ?></span>
                        <h5 class="text-uppercase m-0"><?php echo $bulan; ?></h5>
                        <span><?php echo $tahun; ?></span>
                    </div>
                    <div class="d-flex flex-column justify-content-center py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>CeLOE</small>
                            <small class="text-uppercase me-3"><i
                                    class="bi bi-bookmarks me-2"></i><?php echo $data->kategori; ?></small>
                        </div>
                        <a class="h4 news-title"
                            href="<?= get_home_url() . '/detail/?news=' . $data->id; ?>"><?php echo $data->judul; ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div> -->
        <div class="row g-5">
            <?php
                foreach ($tampil_data as $data) :
                ?>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="<?= content_url() . '/uploads/images/news/' . $data->gambar; ?>"
                            alt="Image" style="object-fit: cover; height: 40vh; width: 100%;">
                    </div>
                    <div class="bg-secondary d-flex">
                        <div
                            class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <?php
                                    $tanggal = date('d', strtotime($data->date_added));
                                    $bulan = date('M', strtotime($data->date_added));
                                    $tahun = date('Y', strtotime($data->date_added));
                                    ?>
                            <span><?= $tanggal; ?></span>
                            <h5 class="text-uppercase m-0"><?= $bulan; ?></h5>
                            <span><?= $tahun; ?></span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4" style="height: 20vh;">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>CeLOE</small>
                                <small class="text-uppercase me-3"><i
                                        class="bi bi-bookmarks me-2"></i><?= $data->kategori; ?></small>
                            </div>
                            <a class="h4 news-title"
                                href="<?= get_home_url() . '/detail/?news=' . $data->id; ?>"><?= $data->judul; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <!-- Blog End -->

    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What Our Activity</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-newspaper fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Event</h3>
                    <p class="mb-0">kegiatan yang diadakan oleh bang CeLoe yang berupa sebuah seminar, di waktu - waktu
                        tertentu.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-folder fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Administrative</h3>
                    <p class="mb-0">ketatausahaan memerlukan sebuah perencanaan yang baik dan matang, dimana setiap
                        melakukan kegiatan organisasi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-camera fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Videography</h3>
                    <p class="mb-0"> Merekam kejadian bentuk video, mendalam mengenai teknik pengambilan gambar, hingga
                        proses editing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Documentation</h3>
                    <p class="mb-0">Dokumentasi kegiatan event di telkom university.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-laptop fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Content Video</h3>
                    <p class="mb-0">Konten - konten video yang berisi sebuah materi pelajaran.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-map fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Renewal</h3>
                    <p class="mb-0">Perbaikan pada sistem LMS agar siswa dapat mengaksesnya dengan mudah.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;margin-top: 10px;">
            <h1 class="display-5 mb-0">Features</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-bullhorn fs-4 text-white"></i>
                        </div>
                        <h3>Workshop</h3>
                        <p class="mb-0">CeLoe seringkali mengadakan kegiatan penyampaian materi, dengan tujuan untuk
                            membagikan pengalaman.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-bullseye fs-4 text-white"></i>
                        </div>
                        <h3>Pelatihan</h3>
                        <p class="mb-0">CeLoe juga mengadakan pelatihan secara berkala dengam tujuan untuk menambah
                            skill peserta.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Sertifikat</h3>
                        <p class="mb-0">Sertifikat akan didapatkan jika peserta berhasil menyelesaikan kegiatan Celoe.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/feature.png'; ?>" alt="img"
                        class="img-fluid" />
                    <div class="p-4">
                        <p class="text-white mb-4">CeLoe merupakan lembaga pengembangan konten yang bertujuan untuk
                            memfasilitasi mahasiswa dalam kegiatan daring. Untuk melihat kegiatan workshop yang
                            dilakukan CeLoe kalian bisa melihatnya disini, anda juga bisa mendaftarkan diri anda sebagai
                            peserta dari kegiatan CeLoe.</p>
                        <a href="<?php echo get_home_url() . '/news/'; ?>"
                            class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-id-badge fs-4 text-white"></i>
                        </div>
                        <h3>Internship</h3>
                        <p class="mb-0">Kami membuka tempat magang untuk para mahasiswa telkom university, yang ingin
                            mencoba pengalaman magang di CeLoe </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>Video Editor Management</h3>
                        <p class="mb-0">Bagian pengelolaan video di lms, bagian pengembangan sebuah video materi
                            pembelajaran</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-history fs-4 text-white"></i>
                        </div>
                        <h3>Dokumentasi</h3>
                        <p class="mb-0">Mendokumentasi sebuah kegiatan yang terdapat di TelkomUniversity, sebagai
                            pengumpulan data terhadap kegiatan tersebut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Internship Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5" style="margin-top: 10px;">
                <h1 class="display-5 mb-4">Internship Registration</h1>
                <p class="mb-4">Pada saat ini CeLOE sedang membuka lowongan Internship di bagian Pengembangan konten,
                    syarat kualifikasinya mahasiswa aktif Telkom University yang mengambil mata kuliah magang/ kerja
                    Profesi, dan memiliki sikap kerja yang baik, disiplin dan kreatif.</p>
                <form>
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                    <option selected>Design Graphic</option>
                                    <option value="1">Video Editor</option>
                                    <option value="2">UI/UX</option>
                                    <option value="3">3D Modeller</option>
                                    <option value="4">Motion Graphic</option>
                                </select>
                                <label for="floatingSelect">Select An Internship</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">Sign in now</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100"
                        src="<?php echo get_template_directory_uri() . '/assets/img/quote.jpg'; ?>" alt=""
                        class="img-fluid radius-image" style="object-fit: cover;" />
                </div>
            </div>
        </div>
    </div>
    <!-- Internship End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100"
                        src="<?= get_template_directory_uri() . '/assets/img/testimonial.jpg'; ?>"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">What Our Staff say!!!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna
                            ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center" style="padding: 10px;">
                            <img class="img-fluid rounded-circle"
                                src="<?= get_template_directory_uri() . '/assets/img/testimonial-1.jpg'; ?>"
                                alt="Img Avatar"
                                style="object-fit: cover; object-position: center; width: 60px; height: 60px;">

                            <div class="ps-4">
                                <h3>Fegi Syawaldi</h3>
                                <span class="text-uppercase">Staff</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna
                            ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center" style="padding: 10px;">
                            <img class="img-fluid rounded-circle"
                                src="<?= get_template_directory_uri() . '/assets/img/testimonial-2.jpg'; ?>"
                                alt="Img Avatar"
                                style="object-fit: cover; object-position: center; width: 60px; height: 60px;">

                            <div class="ps-4">
                                <h3>Fegi Syawaldi</h3>
                                <span class="text-uppercase">Staff</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna
                            ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center" style="padding: 10px;">
                            <img class="img-fluid rounded-circle"
                                src="<?= get_template_directory_uri() . '/assets/img/testimonial-3.jpg'; ?>"
                                alt="Img Avatar"
                                style="object-fit: cover; object-position: center; width: 60px; height: 60px;">

                            <div class="ps-4">
                                <h3>Fegi Syawaldi</h3>
                                <span class="text-uppercase">Staff</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna
                            ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle" style="padding: 10px; overflow: hidden;">
                                <img class="" src="<?= get_template_directory_uri() . '/assets/img/4.png'; ?>" alt=""
                                    style="object-fit: contain; object-position: center; width: 50px; height: 50px;">
                            </div>
                            <div class="ps-4">
                                <h3>SPADA</h3>
                                <span class="text-uppercase">Head</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo
                            clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna
                            ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle" style="padding: 10px; overflow: hidden;">
                                <img class="" src="<?= get_template_directory_uri() . '/assets/img/2.png'; ?>" alt=""
                                    style="object-fit: contain; object-position: center; width: 50px; height: 50px;">
                            </div>
                            <div class="ps-4">
                                <h3>Kampus Merdeka</h3>
                                <span class="text-uppercase">Head</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <script>
    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });
    </script>

    <?php get_footer(); ?>