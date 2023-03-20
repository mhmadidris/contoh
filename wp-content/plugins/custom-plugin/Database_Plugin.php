<?php
/*
Plugin Name: Database Plugin
Author: Maria
Version: 1.0.0
Description: Custom Database
 */
// Tabel News
function create_custom_table()
{
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    global $wpdb;

    $table_name_kategori = $wpdb->prefix . 'kategori';
    $table_name_news = $wpdb->prefix . 'news';
    $table_name_komen = $wpdb->prefix . 'komen';

    $wpdb->query(
        "CREATE TABLE " . $table_name_kategori . " (
            id int(10) NOT NULL AUTO_INCREMENT,
            nama_kategori varchar(255) NOT NULL,
            date_added timestamp,
            date_modified timestamp,
            primary key (id)
        )"
    );
    dbDelta();

    $wpdb->query(
        "CREATE TABLE " . $table_name_news . " (
            id int(10) NOT NULL AUTO_INCREMENT,
            gambar varchar(255) NOT NULL,
            judul varchar(255) NOT NULL,
            deskripsi longtext NOT NULL,
            kategori varchar(255) NOT NULL,
            date_added timestamp ,
            date_modified timestamp,
            primary key (id)
        )"
    );
    dbDelta();

    $wpdb->query(
        "CREATE TABLE " . $table_name_komen . " (
            id int(10) NOT NULL AUTO_INCREMENT,
            news_id varchar(255) NOT NULL,
            nama varchar(255) NOT NULL,
            komen_body text NOT NULL,
            date_added timestamp,
            date_modified timestamp,
            primary key (id)
        )"
    );
    dbDelta();
}
register_activation_hook(__FILE__, 'create_custom_table');