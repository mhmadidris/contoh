<?php 
/* 
    Template Name: Page Service 
*/ 
?>

<?php get_header(); ?>

<!-- Services Start -->
<div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Partnership</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/PartnerIMG/2-removebg-preview.png'?>" alt="Icon" style="width:140px;height:100px;">
                    <a href="https://kampusmerdeka.kemdikbud.go.id/" target="_blank"><h3>Kampus Merdeka</h3></a>
                    <p class="mb-0">Kebijakan Merdeka Belajar Kemendikbud yang mendekatkan perguruan tinggi dengan dunia usaha dan industri.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/PartnerIMG/1-removebg-preview.png'?>" alt="Icon" style="width:120px;height:120px;">
                    <a href="https://pddikti.kemdikbud.go.id/" target="_blank"><h3>Dikti</h3></a>
                    <p class="mb-0">Direktorat Jenderal Pendidikan Tinggi merupakan pangkalan data secara nasional keberadaan perguruan tinggi yang ada</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/PartnerIMG/3-removebg-preview.png'?>" alt="Icon" style="width:130px;height:100px;">
                    <a href="https://pijarmahir.id/" target="_blank"><h3>Pijar</h3></a>
                    <p class="mb-0">Pijar adalah platform LMS berbasis aplikasi website yang digunakan untuk Pelatihan Dasar CPNS.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/PartnerIMG/4-removebg-preview.png'?>" alt="Icon" style="width:130px;height:130px;">
                    <a href="https://spada.kemdikbud.go.id/" target="_blank"><h3>Spada</h3></a>
                    <p class="mb-0">Spada sendiri merupakan kependekan dari Sistem Pembelajaran Daring Indonesia.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/PartnerIMG/5-removebg-preview.png'?>" alt="Icon" style="width:200px;height:90px;">
                    <a href="https://www.udemy.com/id/" target="_blank"><h3>Udemy</h3></a>
                    <p class="mb-0">Udemy, Inc. adalah tujuan global untuk pengajaran dan pembelajaran online.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/PartnerIMG/6-removebg-preview.png'?> "alt="Icon" style="width:130px;height:100px;">
                    <a href="https://icei.ac.id/" target="_blank"><h3>ICEI Institute</h3></a>
                    <p class="mb-0">Indonesia Cyber Education Institute merupakan lokapasar digital untuk matakuliah daring berkualitas di Indonesia.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Event Submission</h1>
                <p class="mb-4">Jika ingin menjadi partnership/kerjasama dengan celoe,silahkan isi form yang ada dibawah ini</p>
                <form>
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="Event" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Event</label>
                            </div>
                        </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="partnership" class="form-control" id="form-floating-2" placeholder="name@example.com">
                            <label for="form-floating-2">Partnership</label>
                        </div>
                    </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">Request Now</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?php echo get_template_directory_uri().'/assets/img/event.jpg'?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <?php get_footer(); ?>