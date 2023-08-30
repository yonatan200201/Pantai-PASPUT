<?php
include "koneksi.php";
include 'template/header.php';
include 'template/topbar.php';
include 'koneksi.php';
?>

<style>
    .container {
        margin-top: 70px;
    }

    .card .card-header .tombol-atas {
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
    }

    .card .card-header h3 {
        display: inline;
        flex: 30%;
    }

    form {
        margin: 10px;
    }

    #edit-data {
        width: 135px;
    }

    .tombol-reset {
        width: 140px;
    }

    .tombol-close {
        width: 140px;
    }

    .tombol-modal-tambah {
        display: flex;
        justify-content: space-around;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="text-primary float-left"><i class="fas fa-newspaper text-success"></i> Data Berita</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="tombol-atas">
                            <a type="button" data-target='#tambah-berita' data-toggle="modal" class="btn btn-outline-warning"><i class="fas fa-plus"></i> Tambah Berita</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped" id="tabel-data" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Author</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Tag</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <?php
                            $no = 1;
                            $query = mysqli_query($db, "SELECT * FROM berita");
                            while ($data = mysqli_fetch_array($query)) :
                                $id_kat = $data['kategori'] ;
							    $id_tag = $data['tag'];
                        ?>

                            <tbody>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $data['judul'] ?></td>
                                    <td class="text-center"><?php echo $data['tanggal'] ?></td>
                                    <td class="text-center"><?php echo $data['author'] ?></td>
                                    <td class="text-center"><?php echo $data['kategori'] ?></td>
                                    <td class="text-center"><?php echo $data['tag'] ?></td>
                                    <td class="text-center"><img width="100" src="img/berita/<?php echo $data['gambar'] ?>" alt=""></td>
                                    <td class="text-center">
                                        <button class="btn btn-success btn-sm" id="tombolEditBerita" 

                                            data-id="<?php echo $data['id_berita'] ?>" 
                                            data-judul="<?php echo $data['judul'] ?>" 
                                            data-tanggal="<?php echo $data['tanggal'] ?>" 
                                            data-author="<?php echo $data['author'] ?>" 
                                            data-kategori="<?php echo $data['kategori'] ?>" 
                                            data-tag="<?php echo $data['tag'] ?>" 
                                            data-foto="<?php echo $data['gambar'] ?>" 
                                            data-isi="<?php echo htmlspecialchars($data['isi']) ?>">

                                        <i class="fa fa-edit"></i></a></button>

                                        <button class="btn btn-danger btn-sm" id="tombolHapusBerita" data-id="<?php echo $data['id_berita'] ?>" data-foto="<?php echo $data['gambar'] ?>"><i class="fa fa-trash"></i></a></button>
                                        <button class="btn btn-info btn-sm" id="tombolDetailBerita" data-id="<?php echo $data['id_berita'] ?>"><i class="fas fa-info"></i></a></button>
                                    </td>
                                </tr>

                            </tbody>
                        <?php endwhile ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php'; ?>
</body>

<script>
    $(document).ready(function() {
        //ckeditor
        let ck1 = CKEDITOR.replace('isi');

        //seelct2
        $('#tag').select2({
            width: '100%',
            theme: 'bootstrap4',
        });
        $('#kategori').select2({
            width: '100%',
            theme: 'bootstrap4',
        });

        //ajax untuk insert berita
        $('#tambah-berita').on('submit', function(e) {
            e.preventDefault();
            // ck1.updateElement();
            // var isi = CKEDITOR.instances['isi'].getData();

            let data = new FormData(document.forms['tambah-berita']);
            data.append(['isi'], CKEDITOR.instances['isi'].getData());
            $.ajax({
                url: 'aksi_berita.php?aksi=insert_berita',
                data: data,
                type: 'post',
                dataType: 'json',
                processData: false,
                cache: false,
                contentType: false,
                async: true,
                success: function(hasil) {
                    if (hasil.insert == true) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Anda telah membuat sebuah berita!',
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Berita gagal dibuat!',
                        })
                    }
                    setTimeout(function() {
                        location.reload();
                    }, 800);
                }
            })
        })
        // end

        //ajax untuk delete data berita
        $('#tabel-data').on('click', '#tombolHapusBerita', function() {
            const id = $(this).data('id');
            const foto = $(this).data('foto');

            Swal.fire({
                title: 'Apakah Anda yakin menghapus berita ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2e86de',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText : 'Tidak'
            }).then((result) => {
                if (result.value) {

                    $.ajax({
                        url: 'aksi_berita.php?aksi=delete_berita',
                        data: {
                            'id': id,
                            'foto': foto
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function(hasil) {
                            if (hasil.delete == true) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    text: 'Berita berhasil dihapus!',
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Maaf',
                                    text: 'Berita gagal dihapus!',
                                })
                            }
                            setTimeout(function() {
                                location.reload();
                            }, 800);
                        }
                    })

                }
            })

        })
        //end

        //ajax untuk tampil detail berita
        $('#tabel-data').on('click', '#tombolDetailBerita', function() {
            const id = $(this).data('id');

            $.ajax({
                url: 'aksi_berita.php?aksi=tampil_dataBerita',
                data: {
                    'id': id
                },
                type: 'post',
                dataType: 'json',
                success: function(hasil) {
                    $('.penampungDetailBerita').html(`
						<form>
						<div class="row">
						<div class="col-sm-6">
						<div class="form-group">
						<label>Judul</label>
						<input readonly=""  type="text"  class="form-control" value="${hasil.judul}">
						</div>
						<div class="form-group">
						<label >Tanggal</label>
						<input readonly=""  type="date"  class="form-control" value="${hasil.tanggal}">
						</div>
						<div class="form-group">
						<label >Author</label>
						<input readonly=""  type="text"   class="form-control" value="${hasil.author}">
						</div>
						<div class="form-group">
						<img src="img/berita/${hasil.gambar}" alt="gambar_berita" width="100%">
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<label >Kategori</label>
						<input readonly="" type="text" class="form-control" value="${hasil.kategori}">
						</div>
						<div class="form-group">
						<label >Tag</label>
						<input readonly="" type="text" class="form-control" value="${hasil.tag}">
						</div>
						<div class="form-group">
						<label for="keterangan">Isi</label>
						<textarea readonly="" rows="12" class="form-control" name="keterangan">${hasil.isi}</textarea>
						</div>
						</div>
						</div>
						</form>
						`)

                    $('#modalDetailBerita').modal('show');
                }
            })
        })
        // end

        //ajax untuk tampil data edit berita
        $('#tabel-data').on('click', '#tombolEditBerita', function() {
            const id = $(this).data('id');
            const judul = $(this).data('judul');
            const author = $(this).data('author');
            const tag = $(this).data('tag');
            const kategori = $(this).data('kategori');
            // const kategori_name = $(this).data('kategori_name');
            const isi = $(this).data('isi');
            const foto = $(this).data('foto');
            const tanggal = $(this).data('tanggal');



            $('.penampungEditBerita').html(`
				<form id="editBerita" name="editBerita" method="post">
				<div class="form-group">
				<label for="judul_edit">Judul</label>
				<input required="" type="text" id="judul_edit" name="judul_edit" class="form-control" value="${judul}" >
				<input required="" type="text" hidden name="id" value="${id}" >
				</div>
				<div class="form-group">
				<label for="tanggal_edit">Tanggal</label>
				<input required="" type="date" id="tanggal_edit" name="tanggal_edit" class="form-control" value="${tanggal}" >
				</div>
				<div class="form-group">
				<label for="author_edit">Author</label>
				<input required="" type="text" id="author_edit" name="author_edit" class="form-control" value="${author}">
				</div>
				<div class="form-group">
				<label for="kategori">Kategori</label>
				<select required="" class="form-control" id="kategori" name="kategori_edit" >
				<option value="${kategori}">${kategori}</option>
				<?php
                $query_kategori = mysqli_query($db, "SELECT * FROM kategori");
                while ($kat = mysqli_fetch_array($query_kategori)) {
                ?>
					<option value="<?php echo $kat['nama'] ?>"><?php echo $kat['nama'] ?></option>
				<?php } ?>
				</select>
				</div>
				<div class="form-group">
				<input required="" type="text" name="tag_lama" hidden value="${tag}" >
				<label for="tag">Tag</label>
				<select class="form-control" id="tag_edit" name="tag_edit[]" multiple="multiple" >
				<?php
                $query_tag = mysqli_query($db, "SELECT * FROM tag");
                while ($tag = mysqli_fetch_array($query_tag)) {
                ?>
					<option value="<?php echo $tag['nama'] ?>"><?php echo $tag['nama'] ?></option>
				<?php } ?>
				</select>
				</div>
				<div class="form-group">
				<label for="isi_edit">Isi</label>
				<input required=""  type="text" id="isi_edit" name="isi_edit" class="ckeditor" value="${isi}">
				</div>
				<img src="img/berita/${foto}" alt="gambar" width="200" class="img-thumnail">
				<hr>
				<div class="form-group">
				<label>Ganti Foto</label>
				<input  type="file" id="foto_edit" name="foto" class="form-control">
				<input  type="text" id="foto_lama" name="foto_lama" hidden value="${foto}">
				</div>
				<div class="modal-footer tombol-modal-tambah">
				<button type="submit" class="btn btn-primary" id="edit-data">Edit</button>
				<button type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
				<button type="button" class="btn btn-warning tombol-close" data-dismiss="modal">Close</button>
				</div>
				</form>
				`);


            CKEDITOR.replace('isi_edit');
            CKEDITOR.instances['isi_edit'].setData(isi);
            $('#tag_edit').select2({
                width: '100%',
                theme: 'bootstrap4',
            });
            $('#modalEditBerita').modal('show');


        })
        // end

        //ajax untuk edit berita
        $('.penampungEditBerita').on('submit', '#editBerita', function(e) {
            e.preventDefault();
            const data = new FormData(document.forms['editBerita']);
            data.append(['isi_edit'], CKEDITOR.instances['isi_edit'].getData());

            $.ajax({
                url: 'aksi_berita.php?aksi=edit_berita',
                data: data,
                type: 'post',
                dataType: 'json',
                processData: false,
                cache: false,
                contentType: false,
                async: true,
                success: function(hasil) {
                    if (hasil.edit == true) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: 'Berita berhasil diedit!',
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Berita gagal diedit!',
                        })
                    }
                    setTimeout(function() {
                        location.reload();
                    }, 800);
                }
            })
        })
        //end
    });
</script>

</html>

<!-- Modal tambah-->
<div class="modal fade bd-example-modal-lg" id="tambah-berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="tambah-berita" name="tambah-berita" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input required="" type="text" id="judul" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input required="" type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input required="" type="text" id="author" name="author" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select required="" class="form-control" id="kategori" name="kategori">
                            <option selected disabled="">Silakan Pilih Kategori</option>
                            <?php
                            $query_kategori = mysqli_query($db, "SELECT * FROM kategori");
                            while ($kat = mysqli_fetch_array($query_kategori)) {
                            ?>
                                <option value="<?php echo $kat['nama'] ?>"><?php echo $kat['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <select required="" class="form-control" id="tag" name="tag[]" multiple="multiple">
                            <?php
                            $query_tag = mysqli_query($db, "SELECT * FROM tag");
                            while ($tag = mysqli_fetch_array($query_tag)) {
                            ?>
                                <option value="<?php echo $tag['nama'] ?>"><?php echo $tag['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input required="" type="text" id="isi" name="isi" class="ckeditor">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input required="" type="file" id="foto" name="foto" class="form-control">
                    </div>
                    <div class="modal-footer tombol-modal-tambah">
                        <button type="submit" class="btn btn-primary" id="edit-data">Simpan</button>
                        <button type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
                        <button type="button" class="btn btn-warning tombol-close" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah data -->

<!-- modal detail berita -->
<div class="modal fade bd-example-modal-lg" id="modalDetailBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="penampungDetailBerita" style="margin: 30px">

            </div>
        </div>
    </div>
</div>
<!-- end modal berita -->


<!-- Modal edit-->
<div class="modal fade bd-example-modal-lg" id="modalEditBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body penampungEditBerita">

            </div>
        </div>
    </div>
</div>
<!-- end modal tambah data -->