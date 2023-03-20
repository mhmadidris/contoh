<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}

.table-responsive {
    margin: 30px 0;
}

.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.table-title {
    padding-bottom: 15px;
    background: #f3525a;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}

.table-title .btn:hover,
.table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}

.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}

.table-title .btn span {
    float: left;
    margin-top: 2px;
}

table.table tr th,
table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}

table.table tr th:first-child {
    width: 60px;
}

table.table tr th:last-child {
    width: 100px;
}

table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}

table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}

table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}

table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}

table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}

table.table td a:hover {
    color: #2196F3;
}

table.table td a.settings {
    color: #2196F3;
}

table.table td a.delete {
    color: #F44336;
}

table.table td i {
    font-size: 19px;
}

table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}

.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}

.text-success {
    color: #10c469;
}

.text-info {
    color: #62c9e8;
}

.text-warning {
    color: #FFC107;
}

.text-danger {
    color: #ff5b5b;
}

.pagination {
    float: right;
    margin: 0 0 5px;
}

.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}

.pagination li a:hover {
    color: #666;
}

.pagination li.active a,
.pagination li.active a.page-link {
    background: #03A9F4;
}

.pagination li.active a:hover {
    background: #0397d6;
}

.pagination li.disabled i {
    color: #ccc;
}

.pagination li i {
    font-size: 16px;
    padding-top: 6px
}

.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}

#add_data_Modal {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Categories</h2>
                    </div>
                    <div class="col-sm-7">
                        <a class="btn btn-secondary" data-toggle="modal" data-target="#add_data_Modal"><i
                                class="material-icons">&#xE147;</i> <span>Add
                                Categories</span></a>
                    </div>
                </div>
            </div>
            <div id="kategori_tabel">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Kategori</th>
                            <th>Date Created</th>
                            <th>Date Modified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $tambil_data = allKategori('kategori');
                        foreach ($tambil_data as $data) :
                        ?>
                        <tr>
                            <td style="text-align: center;">
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo strtoupper($data->nama_kategori); ?>
                            </td>
                            <td>
                                <?php
                                    $date = date_create($data->date_added);
                                    echo date_format($date, "D, d-m-Y");
                                    ?>
                            </td>
                            <td>
                                <?php
                                    $date = date_create($data->date_modified);
                                    echo date_format($date, "D, d-m-Y");
                                    ?>
                            </td>
                            <td>
                                <a href="" data-id="<?php echo $data->id; ?>"
                                    data-kategori="<?php echo $data->nama_kategori; ?>" class="edit" title="Edit"
                                    data-toggle="modal" data-target="#edit_data_Modal"><i
                                        class="material-icons">&#xf040;</i>
                                </a>
                                <a href="" data-id="<?php echo $data->id; ?>" class="delete" title="Delete"
                                    data-toggle="modal"><i class="material-icons">&#xE5C9;</i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php
            $jumlahDataPerhalaman = get_query_var('jumlahDataPerhalaman');
            $jumlahHalaman = get_query_var('jumlahHalaman');
            $halamanAktif = get_query_var('halamanAktif');
            $jumlahData = get_query_var('jumlahData');
            ?>
            <div class="clearfix">
                <div class="hint-text">Showing <b>
                        <?= $jumlahDataPerhalaman; ?>
                    </b> out of
                    <b>
                        <?= $jumlahData; ?>
                    </b> entries
                </div>
                <ul class="pagination">
                    <?php if ($halamanAktif > 1) : ?>
                    <li class="page-item"><a
                            href="admin.php?page=menu_categories&kategori=<?= $halamanAktif - 1; ?>">Previous</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                    <li class="page-item active"><a href="admin.php?page=menu_categories&kategori=<?= $i; ?>"
                            class="page-link"><?= $i; ?></a></li>
                    <?php else : ?>
                    <li class="page-item"><a href="admin.php?page=menu_categories&kategori=<?= $i; ?>"
                            class="page-link"><?= $i; ?></a></li>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <li class="page-item"><a href="admin.php?page=menu_categories&kategori=<?= $halamanAktif + 1; ?>"
                            class="page-link" disabled>Next</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Categories</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <label>Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control" />
                    </br>
                    <input type="submit" name="insert" id="insert" value="Save" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
</div>

<div id="edit_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Categories</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body edit-body">
                <form method="post" id="edit_form">
                    <label>Kategori</label>
                    <input type="text" name="catId" id="catId" value="" class="form-control" hidden />
                    <input type="text" name="kategoriNama" id="kategoriNama" value="" class="form-control" />
                    </br>
                    <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var link = "<?php echo admin_url('admin-ajax.php') ?>";
    // Start Insert Data
    $('#insert_form').on("submit", function(event) {
        event.preventDefault();
        if ($('#kategori').val() == "") {
            alert("Mohon Isi Nama Kategori ");
        } else {
            var form = $('#insert_form').serialize();
            var formData = new FormData();
            formData.append('action', 'kategori_insert');
            formData.append('kategori_insert', form);
            $.ajax({
                method: "POST",
                processData: false,
                contentType: false,
                data: formData,
                url: link,
                beforeSend: function() {
                    $('#insert').val("Inserting");
                },
                success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#add_data_Modal').modal('hide');
                    window.top.location = window.top.location
                }
            });
        }
    });
    // End Insert Data

    // Start Edit Data
    $('.edit').on("click", function(event) {
        var dataId = $(this).data("id");
        var dataKategori = $(this).data("kategori");
        $(".edit-body #catId").val(dataId);
        $(".edit-body #kategoriNama").val(dataKategori);

        $('#edit_form').on("submit", function(event) {
            event.preventDefault();

            var form = $('#edit_form').serialize();
            var formData = new FormData();
            formData.append('action', 'kategori_edit');
            formData.append('kategori_edit', form);

            $.ajax({
                method: "POST",
                processData: false,
                contentType: false,
                data: formData,
                url: link,
                beforeSend: function() {
                    $('#update').val("Updating");
                },
                success: function(response) {
                    $('#edit_form')[0].reset();
                    $('#edit_data_Modal').modal('hide');
                    window.top.location = window.top.location
                }
            });
        });
    });
    // End Edit Data

    // Start Delete Data
    $('.delete').on("click", function(event) {
        var dataId = $(this).data("id");

        $.ajax({
            method: "POST",
            data: {
                action: 'delete_kategori',
                dataId: dataId,
            },
            url: link,
            success: function(response) {
                window.top.location = window.top.location
            }
        });
    });
    // End Delete Data
});
</script>