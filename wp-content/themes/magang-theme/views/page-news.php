<?php
/* 
Template Name: Page News 
*/
?>

<?php get_header(); ?>

<!-- Blog Start -->
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <!-- Blog list Start -->
        <div class="col-lg-8">
            <div class="row g-5">
                <?php
                $tambil_data = allNews('news');
                foreach ($tambil_data as $data) :
                ?>
                    <?php if (isset($_GET['cari'])) : ?>
                        <h6>Hasil Pencarian <b>"
                                <?php echo $_GET['cari']; ?>"
                            </b></h6>
                    <?php endif; ?>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img src="<?= content_url() . '/uploads/images/news/' . $data->gambar; ?>" alt="<?php echo $data->gambar; ?>" height="250" width="100%" style="object-fit: cover;">
                            </div>
                            <div class="bg-secondary d-flex" style="height: 25vh;">
                                <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <?php
                                    $tanggal = date('d', strtotime($data->date_added));
                                    $bulan = date('M', strtotime($data->date_added));
                                    $tahun = date('Y', strtotime($data->date_added));
                                    ?>
                                    <span>
                                        <?php echo $tanggal; ?>
                                    </span>
                                    <h5 class="text-uppercase m-0">
                                        <?php echo $bulan; ?>
                                    </h5>
                                    <span>
                                        <?php echo $tahun; ?>
                                    </span>
                                </div>
                                <div class="d-flex flex-column justify-content-center  py-3 px-4">
                                    <div class="d-flex mb-2" style="font-size: 1.25vw;">
                                        <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>CeLOE</small>
                                        <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>
                                            <?php echo $data->kategori ?>
                                        </small>
                                    </div>
                                    <a class="h4 news-title" style="font-size: 1.75vw;" href="<?= get_home_url() . '/detail/?news=' . $data->id; ?>"><?php echo $data->judul; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Start Pagination -->
                <?php
                $jumlahHalaman = get_query_var('jumlahHalaman');
                $halamanAktif = get_query_var('halamanAktif');
                $jumlahData = get_query_var('jumlahData');
                $jumlahDataPerhalaman = get_query_var('jumlahDataPerhalaman');
                ?>
                <?php if (!isset($_GET['cari'])) : ?>
                    <?php if ($jumlahData > $jumlahDataPerhalaman) : ?>
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg m-0">
                                    <li class="page-item <?= $halamanAktif > 1 ? '' : 'disabled' ?>">
                                        <a class="page-link rounded-0" href="?pages=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                        <?php if ($i == $halamanAktif) : ?>
                                            <li class="page-item active"><a class="page-link" href="?pages=<?= $i ?>"><?= $i; ?></a>
                                            <?php else : ?>
                                            <li class="page-item"><a class="page-link" href="?pages=<?= $i ?>"><?= $i; ?></a></li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <li class="page-item <?= $halamanAktif < $jumlahHalaman ? '' : 'disabled' ?>">
                                        <a class="page-link rounded-0" href="?pages=<?= $halamanAktif + 1; ?>" aria-label="Next">
                                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <!-- End Pagination -->
            </div>
        </div>
        <!-- Blog list End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->
            <form class="mb-5" method="GET" action="">
                <div class="input-group">
                    <input type="text" name="cari" class="form-control p-3" placeholder="Keyword">
                    <button type="submit" value="cari" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <!-- Search Form End -->

            <!-- Category Start -->
            <div class="mb-5">
                <h2 class="mb-4">Categories</h2>
                <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                    <?php
                    $tampilKategori = allKategori('kategori');
                    foreach ($tampilKategori as $data) :
                    ?>
                        <a class="h5 mb-3" href="?kategori=<?= $data->nama_kategori; ?>">
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
                <?php foreach ($tambil_data as $data) :
                ?>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="<?= content_url() . '/uploads/images/news/' . $data->gambar; ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="<?php echo $data->gambar; ?>">
                        <a href="<?= get_home_url() . '/detail/?news=' . $data->id; ?>" class="col-8 h5 d-flex flex-column justify-content-center align-items-start bg-secondary px-3 mb-0">
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
                <img src="<?php echo get_template_directory_uri() . '/assets/img/blog-1.jpg' ?>" alt="" class="img-fluid">
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
                <h2 class="mb-3">Calender</h2>
                <div cellspacing is used to specify the space between the cell and its contents -->
                    <h2 align="center" style="color: rgba(255, 22, 22, 0.863);">
                        January 2023
                    </h2>
                    <br />

                    <table bgcolor="white" align="center" cellspacing="12" cellpadding="12">

                        <caption align="top">
                        </caption>
                        <thead>
                            <tr>
                                <!-- Here we have applied inline style 
                                    to make it more attractive-->
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>sat</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    </body>
                </div>
            </div>
            <!-- Plain Text End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog End -->

<?php get_footer(); ?>