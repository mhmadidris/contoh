<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Magang_Theme
 * @since Magang Magang_Theme 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CeLoe Content Development | Telkom University</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>" rel="icon">
	<link href="<?php echo get_template_directory_uri().'/assets/img/apple-touch-icon.png'; ?>" rel="apple-touch-icon" />

    <!-- Template Stylesheet -->
    <?php wp_head() ?>
</head>

<div>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="<?php echo get_home_url(); ?>" class="navbar-brand p-0">
            <img class="img-responsive2" src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>"
                alt="Icon" style="width:220px;height:72px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="<?php echo get_home_url() ?>"
                    class="nav-item nav-link <?php if (is_page('home')) echo 'active'; ?>">Home</a>
                <a href="<?php echo get_home_url() . '/about/'; ?>"
                    class="nav-item nav-link <?php if (is_page('about')) echo 'active'; ?>">About</a>
                <a href="<?php echo get_home_url() . '/service/'; ?>"
                    class="nav-item nav-link <?php if (is_page('service')) echo 'active'; ?>">Service</a>
                <a href="<?php echo get_home_url() . '/program/'; ?>"
                    class="nav-item nav-link <?php if (is_page('program')) echo 'active'; ?>">Program</a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle <?php if (is_page('news') || is_page('features') || is_page('internship') || is_page('team') || is_page('contact')) echo 'active'; ?>"
                        data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0" style="right: 0; left: auto;">
                        <a href="<?php echo get_home_url() . '/news/'; ?>"
                            class="dropdown-item <?php if (is_page('news')) echo 'active'; ?>">News</a>
                        <!-- <a href="detail.html" class="dropdown-item">News Detail</a> -->
                        <a href="<?php echo get_home_url() . '/features/'; ?>"
                            class="dropdown-item <?php if (is_page('features')) echo 'active'; ?>">Features</a>
                        <a href="<?php echo get_home_url() . '/internship/'; ?>"
                            class="dropdown-item <?php if (is_page('internship')) echo 'active'; ?>">Internship Form</a>
                        <a href="<?php echo get_home_url() . '/team/'; ?>"
                            class="dropdown-item <?php if (is_page('team')) echo 'active'; ?>">Team</a>
                        <a href="<?php echo get_home_url() . '/contact/'; ?>"
                            class="dropdown-item <?php if (is_page('contact')) echo 'active'; ?>">Contact</a>
                    </div>
                </div>
                <!-- <a href="profile.html" class="nav-item nav-link">Profile</a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->