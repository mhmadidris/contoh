<?php 
/* 
    Template Name: Page About 
*/ 
?>

<?php get_header(); ?>

<!-- About Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Welcome To <span class="text-primary">CELOE CODE</span></h1>
            <h4 class="text-primary mb-4">Bagian Pengembangan Konten CeLOE</h4>
            <p class="mb-4">CeLOE digambarkan sebagai pemanfaatan e-learning secara luas dalam bingkai Telkom University sebagai kampus digital. Pemanfaatan dimaksud adalah: e-learning sebagai pendukung pembelajaran regular (e-Supported Learning) e-Learning sebagai bagian dari pembelajaran reguler (Blended Learning)</p>
            <a href="<?php echo get_home_url() . '/form/'; ?>" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Join Now</a>
        </div>
        <div class="col-lg-6">
            <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4"></i> 
                    </div>
                    <div class="ps-4">
                        <h3>Pengguna CeLOE</h3>
                        <p class="mb-0">CeLOE tidak hanya bisa diakses oleh pihak Telkom University saja, melainkan juga disediakan untuk eksternal. Aplikasi ini bisa digunakan oleh masyarakat luas, tetapi harus melakukan registrasi melalui OCW.</p>
                    </div>
                </div>
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                        <i class="fa fa-cogs fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Landing Page CeLOE</h3>
                        <p class="mb-0">Aplikasi CeLOE merupakan landing page yang berkaitan dengan kegiatan digital learning di Telkom University. Ada banyak informasi yang didapatkan seperti berita terbaru, profile, dan kebijakan terkait digital learning. </p>
                    </div>
                </div>
                <div class="d-flex text-white">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                        <i class="fa fa-rocket fs-4"></i>
                    </div>
                    <div class="ps-4">
                        <h3>Aktivitas di CeLOE</h3>
                        <p class="mb-0">Ada banyak hal yang bisa dilakukan melai aplikasi ini, seperti membuat program pembelajaran berbasis virtual. Berikutnya, ada LMS yang berisi laporan untuk program pembelajaran berbasis blended learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php get_footer(); ?>