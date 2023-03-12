<?php 
/* 
    Template Name: Page Internship 
*/ 
?>

<?php get_header(); ?>

<!-- Internship Start -->
<div class="container-fluid bg-secondary px-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Internship Registration</h1>
            <p class="mb-4">Pada saat ini CeLOE sedang membuka lowongan Internship di bagian Pengembangan konten, syarat
                kualifikasinya mahasiswa aktif Telkom University yang mengambil mata kuliah magang/ kerja Profesi, dan
                memiliki sikap kerja yang baik, disiplin dan kreatif.</p>
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
                            <input type="email" class="form-control" id="form-floating-2"
                                placeholder="name@example.com">
                            <label for="form-floating-2">Email address</label>
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
                    src="<?php echo get_template_directory_uri().'/assets/img/quote.jpg'?>" style="object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<!-- Internship End -->

<?php get_footer(); ?>