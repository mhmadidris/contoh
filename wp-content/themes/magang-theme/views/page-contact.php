<?php 
/* 
    Template Name: Page Contact 
*/ 
?>

<?php get_header(); ?>

<?php 
if (isset($_POST['submit'])) {
    //user posted variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Some text in subject...";
    $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

    //Here put your Validation and send mail
    $sent = wp_mail($to, $subject, strip_tags($message), $headers);
        
    if($sent) {
    //message sent!       
    }
    else  {
    //message wasn't sent       
    }
}
?>

<!-- Contact Start -->
<div class="container-fluid bg-secondary px-0">
    <div class="row g-0">
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">Contact For Users</h1>
            <form method="POST" action="">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-floating">
                            <input name="name" type="text" class="form-control" id="name" placeholder="John Doe">
                            <label for="name">Full Name</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input name="email" type="email" class="form-control" id="form-floating-2"
                                placeholder="name@example.com">
                            <label for="form-floating-2">Email address</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input name="subject" type="text" class="form-control" id="form-floating-3"
                                placeholder="Subject">
                            <label for="form-floating-3">Subject</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Message" id="form-floating-4"
                                style="height: 150px"></textarea>
                            <label for="form-floating-4">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button id="submit" name="submit" class="btn btn-primary w-100 py-3"
                            type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6" style="min-height: 400px;">
            <div class="position-relative h-100">
                <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d700.0886489434656!2d107.63041448052127!3d-6.973953898442151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ae7fe4fd07%3A0x5a804adec3f366b!2sGedung%20Bangkit%20(Rektorat)!5e0!3m2!1sid!2sid!4v1667186881182!5m2!1sid!2sid"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php get_footer(); ?>