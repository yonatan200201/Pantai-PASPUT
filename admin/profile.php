<?php
include "koneksi.php";
include 'template/header.php';
include 'template/topbar.php';
?>

<div class="container-fluid">
    <div class="card mx-auto" style="width: 40rem;">
        <div class="card-header bg-dark">
            <h3 class="text-white text-center">Ubah Profile</h3>
        </div>
        <div class="card-body">
            <form id="form-ganti-password" method="post">
                <div class="alert alert-danger">
                    Isi form di bawah ini hanya bila Anda hendak mengubah password Anda
                </div>
                <div class="form-group">
                    <label for="password_lama" class="text-dark">Password Lama</label>
                    <input required="" type="password" class="form-control" name="password_lama" id="password_lama">
                </div>
                <div class="form-group">
                    <label for="password_baru" class="text-dark">Password Baru</label>
                    <input required="" type="password" minlength="5" class="form-control" name="password_baru" id="password_baru">
                </div>
                <div class="form-group">
                    <label for="Confirm_password" class="text-dark">Konfirmasi Password</label>
                    <input required="" type="password" minlength="5" class="form-control" name="Konfirmasi_password" id="confirm_password">
                    <div id="validate" style="color: red"></div>
                </div>
                <button type="submit" name="ganti" class="btn text-white" style="background-color: #2980b9 !important;
                border-color: #2980b9 !important;"><span><i class="fa fa-save text-white"></i> Simpan Perubahan</span></button>
            </form>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>

<script>
    $(document).ready(function() {
        $('#form-ganti-password').on('submit', function(e) {
            e.preventDefault();
            let data = $('#form-ganti-password').serialize();
            let password1 = $('#password_baru').val();
            let password2 = $('#confirm_password').val();

            if (password1 != password2) {
                $('#validate').html('Password yang Anda masukkan tidak sama!');
            } else {
                $.ajax({
                    url: 'ubah_profile.php',
                    data: data,
                    type: 'post',
                    dataType: 'json',
                    success: function(hasil) {
                        if (hasil.ganti == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Selamat, password Anda berhasil diubah!',
                            })
                        } else if (hasil.ganti == 'password_salah') {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Gagal!',
                                text: 'Password lama Anda salah!',
                            })
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: 'Anda gagal menganti password!',
                            })
                        }
                    }
                })
            }
        })
    })
</script>