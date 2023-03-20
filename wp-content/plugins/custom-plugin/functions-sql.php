<?php

function allNews($nama_tabel)
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'news';

    // Pagination
    $jumlahDataPerhalaman = 6;
    $result = $wpdb->get_results("SELECT * FROM " . $table_name);
    $jumlahData = count($result);
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
    $halamanAktif = (isset($_GET["pages"])) ? $_GET["pages"] : 1;
    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

    // Pass variable to template
    set_query_var('jumlahDataPerhalaman', $jumlahDataPerhalaman);
    set_query_var('jumlahHalaman', $jumlahHalaman);
    set_query_var('halamanAktif', $halamanAktif);
    set_query_var('jumlahData', $jumlahData);
    get_template_part('/wp-content/themes/magang-theme/views/page-news.php');
    get_template_part('/wp-content/plugins/custom-plugin/views/show_news.php');

    if (isset($_GET['cari'])) {
        $sql = "SELECT * FROM wp_news WHERE judul LIKE '%" . $_GET['cari'] . "%'";
    } else if (isset($_GET['kategori'])) {
        $sql = "SELECT * FROM wp_news WHERE kategori LIKE '%" . $_GET['kategori'] . "%'";
    } else {
        $sql = "SELECT * FROM " . $table_name . " LIMIT " . $awalData . ", " . $jumlahDataPerhalaman;
    }

    $query = $wpdb->get_results($sql);

    return $query;
}

function addNews($nama_tabel, $data = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $wpdb->insert($table_name, $data);
    $id_insert = $wpdb->insert_id;

    return $id_insert;
}

function updateNews($nama_tabel, $data = array(), $where = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $update = $wpdb->update($table_name, $data, $where);

    return $update;
}

function getRowNews($nama_tabel, $andWhere)
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $sql = "SELECT * FROM " . $table_name . " WHERE id " . $andWhere;
    $row = $wpdb->get_row($sql);

    return $row;
}

function deleteNews($nama_tabel, $where = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $delete = $wpdb->delete($table_name, $where);

    return $delete;
}

function recentNews($nama_tabel)
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $sql = "SELECT * FROM wp_news ORDER BY date_modified DESC LIMIT 5";
    $query = $wpdb->get_results($sql);

    return $query;
}

function recentNewsIndex($nama_tabel)
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $sql = "SELECT * FROM wp_news ORDER BY date_modified ASC LIMIT 3";
    $query = $wpdb->get_results($sql);

    return $query;
}

function addKomen($nama_tabel, $data = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $wpdb->insert($table_name, $data);
    $id_insert = $wpdb->insert_id;

    return $id_insert;
}

function getRowKomen($nama_tabel, $where)
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $sql = "SELECT * FROM wp_komen WHERE news_id =" . $where;
    $query = $wpdb->get_results($sql);

    return $query;
}

// Add Categories
function addCategories($nama_tabel, $data = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'kategori';
    $wpdb->insert($table_name, $data);
    $id_insert = $wpdb->insert_id;

    return $id_insert;
}

function allKategori($nama_tabel)
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'kategori';

    // Pagination
    $jumlahDataPerhalaman = 6;
    $result = $wpdb->get_results("SELECT * FROM " . $table_name);
    $jumlahData = count($result);
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
    $halamanAktif = (isset($_GET["cariKategori"])) ? $_GET["cariKategori"] : 1;
    $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

    // Pass variable to template
    set_query_var('jumlahDataPerhalaman', $jumlahDataPerhalaman);
    set_query_var('jumlahHalaman', $jumlahHalaman);
    set_query_var('halamanAktif', $halamanAktif);
    set_query_var('jumlahData', $jumlahData);
    get_template_part('/wp-content/themes/magang-theme/views/page-news.php');
    get_template_part('/wp-content/plugins/custom-plugin/views/show_news.php');

    if (isset($_GET['cari'])) {
        $sql = "SELECT * FROM wp_kategori WHERE judul LIKE '%" . $_GET['cari'] . "%'";
    } elseif (isset($_GET['kategori'])) {
        $sql = "SELECT * FROM " . $table_name . " ORDER BY nama_kategori ASC";
    } else {
        $sql = "SELECT * FROM " . $table_name . " LIMIT " . $awalData . ", " . $jumlahDataPerhalaman;
    }

    $query = $wpdb->get_results($sql);

    return $query;
}

function getRowCategories($nama_tabel, $andWhere)
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'kategori';
    $sql = "SELECT * FROM " . $table_name . " WHERE id = 33";
    $row = $wpdb->get_row($sql);

    return $row;
}

function updateKategori($nama_tabel, $data = array(), $where = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $update = $wpdb->update($table_name, $data, $where);

    return $update;
}

function deleteKategori($nama_tabel, $where = array())
{
    global $wpdb;

    $table_name = $wpdb->prefix . $nama_tabel;
    $delete = $wpdb->delete($table_name, $where);

    return $delete;
}