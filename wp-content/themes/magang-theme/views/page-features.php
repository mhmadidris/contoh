<?php 
/* 
    Template Name: Page Features 
*/ 
?>

<?php get_header(); ?>

<!-- Features Start -->
<div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Features</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-bullhorn fs-4 text-white"></i>
                        </div>
                        <h3>Workshop activities</h3>
                        <p class="mb-0">CeLoe seringkali mengadakan kegiatan penyampaian materi, dengan tujuan untuk membagikan pengalaman.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-bullseye fs-4 text-white"></i>
                        </div>
                        <h3>Training</h3>
                        <p class="mb-0">CeLoe juga mengadakan pelatihan secara berkala dengam tujuan untuk menambah skill peserta.</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>Certification</h3>
                        <p class="mb-0">Sertifikat akan didapatkan jika peserta berhasil menyelesaikan kegiatan Celoe.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/feature.png'?>" alt="img">
                    <div class="p-4">
                        <p class="text-white mb-4">CeLoe merupakan lembaga pengembangan konten yang bertujuan untuk memfasilitasi mahasiswa dalam kegiatan daring. Untuk melihat kegiatan workshop yang dilakukan CeLoe kalian bisa melihatnya disini, anda juga bisa mendaftarkan diri anda sebagai peserta dari kegiatan CeLoe.</p>
                        <a href="<?php echo get_home_url() . '/news/'; ?>" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-id-badge fs-4 text-white"></i>
                        </div>
                        <h3>Apprenticeship Vacancies</h3>
                        <p class="mb-0">Kami membuka tempat magang untuk para mahasiswa telkom university, yang ingin mencoba pengalaman magang di CeLoe </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
                        <h3>Video Editor Management</h3>
                        <p class="mb-0">Bagian pengelolaan video di lms, bagian pengembangan sebuah video materi pembelajaran</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-history fs-4 text-white"></i>
                        </div>
                        <h3>Documentation</h3>
                        <p class="mb-0">Mendokumentasi sebuah kegiatan yang terdapat di TelkomUniversity, sebagai pengumpulan data terhadap kegiatan tersebut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <?php get_footer(); ?>