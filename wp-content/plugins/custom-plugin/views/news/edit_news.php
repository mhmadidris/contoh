<?php
global $wpdb;
$url = $_SERVER['REQUEST_URI'];
$id_news = explode("?page=update_news&id=", basename($url));

$andWhere = " AND id='" . $id_news[1] . "'";
$details_news = getRowNews('news', $andWhere);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="<?= content_url(); ?>/themes/magang-theme/assets/js/ckeditor.js"></script>

<style>
    /* Start CKEditor Style */
    .ck-editor__editable {
        min-height: 250px !important;
    }
    /* End CKEditor Style */
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="alert alert-danger d-flex align-items-center alert-dismissible" id="alertImage" style="visibility: hidden;" role="alert">
                <strong id="alertHeader"></strong>
                <div id="alertText"></div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <h1 class="mb-3">Add News</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="hidden" name="id_detail" value="<?php echo $details_news->id; ?>">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="output" src="<?= content_url() . '/uploads/' . "images/news/" . $details_news->gambar; ?>" alt="example placeholder" style="width: 350px;" />
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" name="photos" accept="image/*" id="photos" style="padding: 5px;" value="<?php echo $details_news->gambar; ?>">
                    </div>
                </div>
                <div class="my-2">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita Anda" value="<?php echo $details_news->judul; ?>">
                </div>
                <div class="my-2">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" name="kategoriValue">
                        <?php
                        $tampilKategori = allKategori('kategori');
                        foreach ($tampilKategori as $data) :
                        ?>
                            <option value="<?= $data->nama_kategori; ?>" <?php if ($data->nama_kategori == $details_news->kategori)
                                                                                echo 'selected="selected"'; ?>>
                                <?= $data->nama_kategori; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="my-2">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="editor" rows="10"><?php echo $details_news->deskripsi; ?></textarea>
                </div>
                <div class="my-2 col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-dark w-100 fw-bold">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script>
    // Start CkEditor
    ClassicEditor
        .create(document.querySelector('#editor'), {
            placeholder: 'Deskripsi berita',
            toolbar: {
                items: [
                    'heading',
                    '|', 'bold', 'italic', 'bulletedList', 'numberedList',
                    '|', 'undo', 'redo',
                ]
            },
            language: 'en',
        })
        .catch(error => {
            console.error(error);
        });
    // End CkEditor

    // Start Validation Image
    var output = document.getElementById('output');

    var alertNotif = document.getElementById("alertImage");
    var alertHeader = document.getElementById("alertHeader");
    var alertText = document.getElementById("alertText");
    $(document).ready(function() {
        $('#photos').bind('change', function() {
            var imageSize = (this.files[0].size);

            output.src = URL.createObjectURL(this.files[0]);
            output.onload = function() {
                var width = this.naturalWidth;
                var height = this.naturalHeight;
                if (width < 1280 || height < 720) {
                    // alert("asa00");
                    alertNotif.style.visibility = "visible";
                    alertHeader.innerText = "Dimensi!" + " ";
                    alertText.innerText = "Dimensi foto tidak boleh kurang 1280 x 720";
                    $("#photos").val(null);
                } else if (width > 1920 || height > 1080) {
                    $("#photos").val(null);
                    alertNotif.style.visibility = "visible";
                    alertText.innerText = "Dimensi foto tidak boleh lebih 1920 x 1080";
                } else {
                    alertNotif.style.visibility = "hidden";
                    if (imageSize > 2097152) {
                        output.src =
                            "<?php echo get_template_directory_uri() . '/assets/img/default-image.png'; ?>";
                        $("#photos").val(null);
                        alertNotif.style.visibility = "visible";
                        alertHeader.innerText = "Ukuran!" + " ";
                        alertText.innerText = "Ukuran foto tidak boleh lebih dari 2mb";
                    } else {
                        alertNotif.style.visibility = "hidden";
                        URL.revokeObjectURL(output.src);
                    };
                }
            };
        });
    });
    // End Validation Image
</script>