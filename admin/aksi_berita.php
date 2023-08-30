<?php
include 'koneksi.php';
$url = $_GET['aksi'];

if ($url == 'insert_berita') {
    $judul = $_POST['judul'];
    $author = $_POST['author'];
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];
    $tag = $_POST['tag'];
    $isi = $_POST['isi'];
    $foto = $_FILES['foto']['name'];

    $hasil = [];
    foreach ($tag as $key => $value) {
        $hasil[] = $value;
    }

    $tag   = implode(' , ', $hasil);

    $foto = upload();

    if (!$foto) {
        return false;
    }

    $insert = mysqli_query($db, "INSERT INTO berita VALUES ('','$judul','$tanggal','$author','$foto','$isi','$kategori','$tag')");
    $pesan = [];
    if ($insert) {
        $pesan['insert'] = true;
    } else {
        $pesan['insert'] = false;
    }

    echo json_encode($pesan);
} elseif ($url === 'delete_berita') {
    $id = $_POST['id'];
    $foto = $_POST['foto'];
    $pesan = array();

    $delete = mysqli_query($db, "DELETE FROM berita WHERE id_berita = $id");

    if ($delete) {
        $pesan['delete'] = true;
        unlink('upload/' . $foto);
    } else {
        $pesan['delete'] = false;
    }

    echo json_encode($pesan);
} elseif ($url === 'tampil_dataBerita') {
    $id = $_POST['id'];

    $query = mysqli_query($db, "SELECT * FROM berita WHERE id_berita=$id");
    $data  = mysqli_fetch_assoc($query);

    echo json_encode($data);
} elseif ($url === 'edit_berita') {

    $id   = $_POST['id'];
    $judul = $_POST['judul_edit'];
    $author = $_POST['author_edit'];
    $tanggal = $_POST['tanggal_edit'];
    $kategori = $_POST['kategori_edit'];
    @$tag = $_POST['tag_edit'];
    $isi = $_POST['isi_edit'];
    $foto_lama = $_POST['foto_lama'];
    $check_foto = $_FILES['foto']['name'];
    $tag_lama = $_POST['tag_lama'];

    if ($tag == '') {
        $tag = $tag_lama;
    } else {
        $hasil = [];
        foreach ($tag as $key => $value) {
            $hasil[] = $value;
        }

        $tag = implode(',', $hasil);
    }

    if ($check_foto == '') {
        $foto = $foto_lama;
    } else {
        unlink('upload/' . $foto_lama);
        $foto = upload();
        if (!$foto) {
            return false;
        }
    }



    $edit = mysqli_query($db, "UPDATE berita SET 
		judul  = '$judul',
		author = '$author',
		tanggal = '$tanggal',
		kategori = '$kategori',
		tag     =  '$tag',
		isi    = '$isi',
		gambar   = '$foto'
		where id_berita = $id
		");

    if ($edit) {
        $pesan['edit'] = true;
    } else {
        $pesan['edit'] = false;
    }

    echo json_encode($pesan);
}



function upload()
{
    $nama_file    = $_FILES['foto']['name'];
    $tempat       = $_FILES['foto']['tmp_name'];
    $error        = $_FILES['foto']['error'];

    if ($error === 4) {
        echo "<script>

		alert('Silakan pilih gambar terlebih dahulu');

		</script>";
        return false;
    }

    $ektensigambarvalid  = ['jpg', 'png', 'gift', 'jpeg'];
    $ektensigambar       = explode('.', $nama_file);
    $ektensigambar       = strtolower(end($ektensigambar));

    if (!in_array($ektensigambar, $ektensigambarvalid)) {
        echo "<script>

		alert('Ektensi gambar Anda tidak dapat digunakan!');

		</script>";
        return false;
    }

    $ektensifilebaru  =  uniqid();
    $ektensifilebaru .=  '.';
    $ektensifilebaru .=  $ektensigambar;



    move_uploaded_file($tempat, 'img/berita/' . $ektensifilebaru);

    return $ektensifilebaru;
}
