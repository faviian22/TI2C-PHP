<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $TTL = $_POST['TTL'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $usia = $_POST['usia'];

    // buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, TTL, jenis_kelamin, agama, usia)
VALUE ('$nama', '$alamat', '$TTL', '$jk', '$agama', '$usia')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>