<?php
global $wpdb;
$url = $_SERVER['REQUEST_URI'];
$id_news = explode("?page=update_news&id=", basename($url));

$andWhere = " AND id='".$id_news[1]."'";
$details_news = getRowNews('news', $andWhere);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h1 class="mb-3">Update News</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="hidden" name="id_detail" value="<?php echo $details_news->id; ?>">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="output"
                            src="/wp-content/uploads/<?php echo date("Y") . "/". date("m") . "/" . $details_news->gambar; ?>"
                            alt="example placeholder" style="width: 350px;" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1" for="photos">Choose file</label>
                            <input type="file" name="photos" class="form-control d-none" accept="image/*" id="photos"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" />
                        </div>
                    </div>
                </div>
                <div class="my-2">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        value="<?php echo $details_news->judul; ?>">
                </div>
                <div class="my-2">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" name="kategoriValue">
                        <option value="" selected disabled hidden>Choose here</option>
                        <option value="artikel"
                            <?php if($details_news->kategori=="artikel") echo 'selected="selected"'; ?>>Artikel</option>
                        <option value="informasi"
                            <?php if($details_news->kategori=="informasi") echo 'selected="selected"'; ?>>Informasi
                        </option>
                        <option value="luaran penelitian"
                            <?php if($details_news->kategori=="luaran penelitian") echo 'selected="selected"'; ?>>Luaran
                            Penelitian</option>
                        <option value="dokumentasi"
                            <?php if($details_news->kategori=="dokumentasi") echo 'selected="selected"'; ?>>Dokumentasi
                        </option>
                        <option value="seminar"
                            <?php if($details_news->kategori=="seminar") echo 'selected="selected"'; ?>>Seminar</option>
                        <option value="workshop"
                            <?php if($details_news->kategori=="workshop") echo 'selected="selected"'; ?>>Workshop
                        </option>
                    </select>
                </div>
                <div class="my-2">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"
                        rows="10"><?php echo $details_news->deskripsi; ?></textarea>
                </div>
                <div class="my-2 col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-dark w-100 fw-bold">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>