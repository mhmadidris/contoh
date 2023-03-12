<?php

/**
 * STEP 1
 * Membuat Menu di Admin
 * Hook : admin_menu
 */

// Menu Kategori
function menuKategori()
{
    add_menu_page(
        'Categories',
        'Categories',
        0,
        'menu_categories',
        'callbackCategories',
        'dashicons-category',
        6
    );
}
add_action("admin_menu", "menuKategori");

function callbackCategories()
{
    include TEMP_PATH . "categories/show_categories.php";
}


// Menu News
function menuNews()
{
    add_menu_page(
        'All News',
        'All News',
        0,
        'menu_news',
        'callbackNews',
        'dashicons-text-page',
        6
    );
    add_submenu_page(
        "menu_news",
        "Add News",
        "Add News",
        0,
        "my-addnews-slug",
        "callbackAddNews"
    );
    add_submenu_page(
        null,
        "Update News",
        "Update News",
        "manage_options",
        "update_news",
        "callbackUpdateNews"
    );
    add_submenu_page(
        null,
        "Delete News",
        "Delete News",
        "manage_options",
        "delete_news",
        "callbackDeleteNews"
    );
}
add_action("admin_menu", "menuNews");

function callbackNews()
{
    include TEMP_PATH . "news/show_news.php";
}

function callbackAddNews()
{
    if (isset($_POST['submit'])) {
        $image_file = $_FILES["photos"];

        if (!isset($image_file)) {
            die('No file uploaded.');
        }

        $newfilename = date('dmY') . str_replace(" ", "", basename($image_file["name"]));

        $current_datetime = current_datetime()->format('Y-m-d H:i:s');

        $news_description = nl2br($_POST["deskripsi"]);
        $news_description = trim($news_description);

        $data = array(
            'gambar' => $newfilename,
            'judul' => isset($_POST['judul']) ? $_POST['judul'] : '',
            'deskripsi' => isset($news_description) ? $news_description : '',
            'kategori' => $_POST['kategoriValue'],
            'date_added' => $current_datetime,
            'date_modified' => $current_datetime,
        );

        $insert = addNews('news', $data);

        if ($insert) {
            $upload_dir = wp_upload_dir();
            $filePath = $upload_dir['basedir'];

            move_uploaded_file(
                $image_file["tmp_name"],

                $filePath . "/" . date("Y") . "/" . date("m") . "/" . $newfilename
            );

            echo "<script>location.replace('admin.php?page=menu_news');</script>";
        }
    }

    include TEMP_PATH . "news/add_news.php";
}

function callbackUpdateNews()
{
    if (isset($_POST['submit'])) {
        $image_file = $_FILES["photos"];

        $newfilename = date('dmY') . str_replace(" ", "", basename($image_file["name"]));

        $current_datetime = current_datetime()->format('Y-m-d H:i:s');

        $news_description = nl2br($_POST["deskripsi"]);
        $news_description = trim($news_description);

        if ($_FILES['photos']['error'] == 4 || ($_FILES['photos']['size'] == 0 && $_FILES['photos']['error'] == 0)) {
            $data = array(
                'judul' => isset($_POST['judul']) ? $_POST['judul'] : '',
                'deskripsi' => isset($news_description) ? $news_description : '',
                'kategori' => $_POST['kategoriValue'],
                'date_added' => $current_datetime,
                'date_modified' => $current_datetime,
            );
        } else {
            // Delete Image News
            $andWhere = " AND id='" . $_POST['id_detail'] . "'";
            $getImage = getRowNews('news', $andWhere);
            $uploads_dir = wp_get_upload_dir()['basedir'];
            unlink($uploads_dir . "/" . date("Y") . "/" . date("m") . "/" . $getImage->gambar);

            $data = array(
                'gambar' => $newfilename,
                'judul' => isset($_POST['judul']) ? $_POST['judul'] : '',
                'deskripsi' => isset($news_description) ? $news_description : '',
                'kategori' => $_POST['kategoriValue'],
                'date_added' => $current_datetime,
                'date_modified' => $current_datetime,
            );
        }

        $where = array('id' => $_POST['id_detail']);
        $update = updateNews('news', $data, $where);

        if ($update) {
            $upload_dir = wp_upload_dir();
            $filePath = $upload_dir['basedir'];

            move_uploaded_file(
                $image_file["tmp_name"],

                $filePath . "/" . date("Y") . "/" . date("m") . "/" . $newfilename
            );
            echo "<script>location.replace('admin.php?page=menu_news');</script>";
        }
    }

    include TEMP_PATH . "news/edit_news.php";
}

function callbackDeleteNews()
{
    $url = $_SERVER['REQUEST_URI'];
    $id_news = explode("?page=delete_news&id=", basename($url));

    // Delete Image News
    $andWhere = " AND id='" . $id_news[1] . "'";
    $getImage = getRowNews('news', $andWhere);
    $uploads_dir = wp_get_upload_dir()['basedir'];
    unlink($uploads_dir . "/" . date("Y") . "/" . date("m") . "/" . $getImage->gambar);

    // Delete Data In Database
    $where = array('id' => $id_news[1]);
    $delete = deleteNews('news', $where);

    if ($delete) {
        echo "<script>location.replace('admin.php?page=menu_news');</script>";
    }
}