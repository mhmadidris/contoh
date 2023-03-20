<?php
/*
Template Name: Page Detail
*/
?>

<?php get_header(); ?>

<!-- Blog Start -->
<?php
$url = $_SERVER['REQUEST_URI'];
$id_news = explode("?news=", basename($url));

$andWhere = " AND id='" . $id_news[1] . "'";
$get_row_news = getRowNews('news', $andWhere);

?>
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="mb-5">
                <img class="img-fluid w-100 mb-5"
                    src="<?= content_url() . '/uploads/images/news/' . $get_row_news->gambar; ?>" alt="Foto">
                <h2 class="mb-4">
                    <?php echo $get_row_news->judul; ?>
                </h2>
                <p>
                    <?php echo $get_row_news->deskripsi; ?>
                </p>
            </div>
            <!-- Blog Detail End -->

            <!-- Comment List Start -->
            <div class="mb-5">
                <h3 class="mb-4">
                    <?php
                    $where = $id_news[1];
                    $tambil_data = getRowKomen('komen', $where);
                    echo count($tambil_data);
                    ?> Comments
                </h3>
                <?php
                foreach ($tambil_data as $data) :
                ?>
                <div class="d-flex mb-4">
                    <!-- <img src="<?php echo get_template_directory_uri() . '/assets/img/user.jpg' ?>"
                        class="img-fluid rounded-circle" style="width: 45px; height: 45px;"> -->
                    <div class="ps-3">
                        <h6><a href="">
                                <?php echo $data->nama ?>
                            </a> <small><i>
                                    <?php
                                        $date = date_create($data->date_added);
                                        echo date_format($date, "D, d-m-Y");
                                        ?>
                                </i></small></h6>
                        <p>
                            <?php echo $data->komen_body; ?>
                        </p>
                        <button class="btn btn-sm btn-light">Reply</button>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="d-flex ms-5 mb-4">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/user.jpg' ?>"
                        class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6><a href="">Fuad Akhsan</a> <small><i>01 Jan 2023</i></small></h6>
                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                            accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                        <button class="btn btn-sm btn-light">Reply</button>
                    </div>
                </div> -->
            </div>
            <!-- Comment List End -->

            <!-- Comment Form Start -->
            <div class="bg-secondary p-5">
                <h2 class="mb-4">Leave a comment</h2>
                <form method="POST" action="">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="nama_komen" class="form-control bg-white border-0"
                                placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea name="body_komen" class="form-control bg-white border-0" rows="5"
                                placeholder="Comment"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Leave Your
                                Comment</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                global $wpdb;
                $current_datetime = current_datetime()->format('Y-m-d H:i:s');

                $data = array(
                    'news_id' => $id_news[1],
                    'nama' => isset($_POST['nama_komen']) ? $_POST['nama_komen'] : '',
                    'komen_body' => isset($_POST['body_komen']) ? $_POST['body_komen'] : '',
                    'date_added' => $current_datetime,
                    'date_modified' => $current_datetime,
                );

                addKomen('komen', $data);
                echo "<script type='text/javascript'>window.location=document.location.href;</script>";
            }
            ?>
            <!-- Comment Form End -->
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->
            <!-- <div class="mb-5">
                <div class="input-group">
                    <input type="text" class="form-control p-3" placeholder="Keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div> -->
            <!-- Search Form End -->

            <!-- Category Start -->
            <div class="mb-5">
                <h2 class="mb-4">Categories</h2>
                <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                    <?php
                    $tampilKategori = allKategori('kategori');
                    foreach ($tampilKategori as $data) :
                    ?>
                    <a class="h5 mb-3" href="news/?kategori=<?= $data->nama_kategori; ?>">
                        <i class="bi bi-arrow-right text-primary me-2"></i><?= $data->nama_kategori; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Category End -->

            <!-- Recent Post Start -->
            <?php
            $tambil_data = recentNews('news');
            ?>
            <div class="mb-5">
                <h2 class="mb-4">Recent Post</h2>
                <?php
                foreach ($tambil_data as $data) :
                ?>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="<?= content_url() . '/uploads/images/news/' . $data->gambar; ?>"
                        style="width: 100px; height: 100px; object-fit: cover;" alt="<?php echo $data->gambar; ?>">
                    <a href="<?= get_home_url() . '/detail/?news=' . $data->id; ?>"
                        class="col-8 h5 d-flex flex-column justify-content-center align-items-start bg-secondary px-3 mb-0">
                        <p class="news-title" style="font-size: 1.5vw;">
                            <?php echo $data->judul; ?>
                        </p>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/blog-1.jpg' ?>" alt=""
                    class="img-fluid">
            </div>
            <!-- Image End -->

            <!-- Tags Start -->
            <div class="mb-5">
                <h2 class="mb-4">Tag Cloud</h2>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-secondary m-1">Leadership</a>
                    <a href="" class="btn btn-secondary m-1">Development</a>
                    <a href="" class="btn btn-secondary m-1">Marketing</a>
                    <a href="" class="btn btn-secondary m-1">Biomedical</a>
                    <a href="" class="btn btn-secondary m-1">Writing</a>
                    <a href="" class="btn btn-secondary m-1">Technician</a>
                    <a href="" class="btn btn-secondary m-1">Design</a>
                    <a href="" class="btn btn-secondary m-1">Multimedia</a>
                    <a href="" class="btn btn-secondary m-1">Experience</a>
                </div>
            </div>
            <!-- Tags End -->

            <!-- Plain Text Start -->
            <div>
                <h2 class="mb-4">Plain Text</h2>
                <div class="bg-secondary text-center" style="padding: 30px;">
                    <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd
                        justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                </div>
            </div>
            <!-- Plain Text End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog End -->


<?php get_footer(); ?>