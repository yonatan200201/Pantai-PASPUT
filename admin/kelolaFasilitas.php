<?php
include "koneksi.php";
include 'template/header.php';
include 'template/topbar.php';
?>

<style>
    table .aksi {
        display: flex;
        justify-content: center;
    }

    form {
        margin: 10px;
    }

    #tombol-tambah-pelatih {
        width: 140px;
    }

    .modal-footer {
        justify-content: space-around;
    }

    .tombol-reset {
        width: 140px;
    }

    .tombol-close {
        width: 140px;
    }
</style>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary float-left"><i class="far fa-images text-danger"></i> Data Fasilitas</h3>
            <a type="button" class="btn btn-outline-warning mb-4 float-right" data-toggle="modal" data-target="#modal-tambah-fasilitas"><i class="fas fa-plus"></i></i> Tambah Fasilitas</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="tabel-data" style="width:100%">
                <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Kode Fasilitas</th>
                            <th class="text-center">Nama Fasilitas</th>
                            <th class="text-center">Nama Pantai</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = mysqli_query($db, "SELECT * FROM fasilitas");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data['id_fasilitas'] ?></td>
                                <td class="text-center"><?php echo $data['nama_fasilitas'] ?></td>
                                <td class="text-center"><?php echo $data['nama_pantai'] ?></td>
                                <td class="text-center"><?php echo $data['deskripsi'] ?></td>
                                <td class="text-center"><img width="100" src="img/FasilitasPantai/<?php echo $data['gambar'] ?>" alt=""></td>
                                <td class="text-center">
                                    <button data-id="<?php echo $data['id_fasilitas'] ?>" id="tombol-edit-fasilitas" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                    <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin hapus datanya?')" href="aksi_hapus.php?id=<?php echo $data['id_fasilitas'] ?>&hapus=data_fasilitas&foto=<?php echo $data['gambar'] ?>"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php' ?>

<script>
    $(document).ready(function() {
        $('#tabel-data').on('click', '#tombol-edit-fasilitas', function() {
            let id = $(this).data('id');

            $.ajax({
                url: 'get_edit_data.php?dapat=data_fasilitas',
                data: {'id': id},
                type: 'post',
                dataType: 'json',
                success: function(hasil) {
                    $('#modal-edit-fasilitas').modal('show');
                    $('.penampung-edit-fasilitas').html(`
           <form action="aksi_edit.php?edit=data_fasilitas" method="post" enctype="multipart/form-data">
           <div class="form-group">
           <label for="kode">Kode fasilitas</label>
           <input readonly="" required="" type="text" id="kode" name="kode" class="form-control" value="${hasil.id_fasilitas}">
           </div>
           <div class="form-group">
           <label for="nama_fasilitas">Nama Fasilitas</label>
           <textarea required="" name="nama_fasilitas" class="form-control">${hasil.nama_fasilitas}</textarea>
           </div>
           <div class="form-group">
           <label for="nama_pantai">Nama Pantai</label>
           <textarea required="" name="nama_pantai" class="form-control">${hasil.nama_pantai}</textarea>
           </div>
           <div class="form-group">
           <label for="deskripsi">Deskripsi</label>
           <textarea required="" name="deskripsi" class="form-control">${hasil.deskripsi}</textarea> 
           </div>
           <div class="form-group">
           <label for="gambar_baru">Foto</label>
           <input  type="file" id="gambar_baru" name="gambar_baru" class="form-control">
           <input  required="" type="text"  name="gambar_lama" hidden value="${hasil.gambar}">
           </div>
           <img width="100" src="img/FasilitasPantai/${hasil.gambar}">
           <div class="modal-footer">
           <button style="width:140px" type="submit" class="btn btn-primary" name="edit_fasilitas">Edit</button>
           <button style="width:140px" type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
           <button style="width:140px" type="button" class="btn btn-secondary tombol-close" data-dismiss="modal">Close</button>
           </div>
           </form>
           `);
                }

            })
        })

    })
</script>

<!-- Modal tambah-->
<div class="modal fade" id="modal-tambah-fasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data fasilitas</h5>
            </div>
            <div class="modal-body">
                <form action="aksi_insert.php?tambah=data_fasilitas" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="kode">Kode fasilitas</label>
                        <input required="" type="text" id="kode" name="id_fasilitas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_fasilitas">Nama Fasilitas</label>
                        <input required="" type="text" id="nama_fasilitas" name="nama_fasilitas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_pantai">Nama Pantai</label>
                        <input required="" type="text" id="nama_pantai" name="nama_pantai" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea input required="" type="text" id="nama" name="deskripsi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input required="" type="file" id="gambar" name="gambar" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="tambah_fasilitas" id="tombol-tambah-fasilitas">Tambahkan</button>
                        <button type="reset" class="btn btn-danger tombol-reset ml-2">Reset</button>
                        <button type="button" class="btn btn-secondary tombol-close" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal tambah-->
<div class="modal fade" id="modal-edit-fasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data fasilitas</h5>
            </div>
            <div class="penampung-edit-fasilitas">

            </div>
        </div>
    </div>
</div>