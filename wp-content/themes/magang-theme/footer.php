<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Magang_Theme
 * @since Magang Magang_Theme 1.0
 */

?>
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Other Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="https://igracias.telkomuniversity.ac.id/" target="_blank">iGracias</a>
                    <a class="text-secondary mb-2" href="https://openlibrary.telkomuniversity.ac.id/" target="_blank">Open Library</a>
                    <a class="text-secondary mb-2" href="https://cdc.telkomuniversity.ac.id/" target="_blank">Career, Alumni, Endowment (CAE)</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">CELOE Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="https://celoe.telkomuniversity.ac.id/auth" target="_blank">CeLOE Dashboard</a>
                    <a class="text-secondary mb-2" href="https://cds.telkomuniversity.ac.id/" target="_blank">CeLOE CDS</a>
                    <a class="text-secondary mb-2" href="https://lms.telkomuniversity.ac.id/" target="_blank">CeLOE LMS</a>
                    <a class="text-secondary mb-2" href="https://onlinelearning.telkomuniversity.ac.id/" target="_blank">CeLOE MOOC</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Contact</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Gedung Bangkit Telkom University Jl. Telekomunikasi Terusan Buah Batu Indonesia 40257 , Bandung , Indonesia</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>celoecode@telkomuniversity.ac.id</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+62 821-1666-3563</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://twitter.com/TelUniversity" target="_blank"><i class="fab fa-twitter fw-normal/"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://web.facebook.com/celoecodetelkomuniversity/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.linkedin.com/company/center-for-teaching-and-learning-excellence-telkom-university/" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://www.instagram.com/celoecode.telkomuniversity/" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>

	<div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="#">CELOE CODE</a>. All Rights Reserved. Designed by <a class="text-secondary border-bottom" href="https://CeLoeCODE.com">Content development</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

	<?php wp_footer(); ?>
</body>

</html>