<?php 
/*
    Plugin Name: Database Plugin
    Author: Maria
    Version: 1.0.0
    Description: Custom Database
*/
// Tabel News
function create_news_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
	
    $table_name = $wpdb->prefix . 'news';

    $sql = "CREATE TABLE " . $table_name . " (
        id int(10) NOT NULL AUTO_INCREMENT,
        gambar varchar(255) NOT NULL,
        judul varchar(255) NOT NULL,
        deskripsi text NOT NULL,
        kategori varchar(255) NOT NULL,
        date_added timestamp ,
        date_modified timestamp,
        primary key (id)
    )";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_news_table');

// Tabel  Kategori
function create_kategori_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
	
    $table_name = $wpdb->prefix . 'kategori';

    $sql = "CREATE TABLE " . $table_name . " (
        id int(10) NOT NULL AUTO_INCREMENT,
        nama_kategori varchar(255) NOT NULL,
        date_added timestamp,
        date_modified timestamp,
        primary key (id)
    )";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_kategori_table');

// Tabel  Komen
function create_komen_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
	
    $table_name = $wpdb->prefix . 'komen';

    $sql = "CREATE TABLE " . $table_name . " (
        id int(10) NOT NULL AUTO_INCREMENT,
        news_id varchar(255) NOT NULL,
        nama varchar(255) NOT NULL,
        komen_body text NOT NULL,
        date_added timestamp,
        date_modified timestamp,
        primary key (id)
    )";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_komen_table');

?>