<?php
$hostname = "localhost";
$database = "dbbarang_toko";
$username = "root";
$password = "";
$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_error()) {
    echo "koneksi gagal : " , mysqli_connect_error();
}

$tgl = $_POST['tgl'];
$no = $_POST['no'];
$nama = $_POST['nama_brg'];
$jual = $_POST['harga_jual'];
$modal = $_POST['modal'];
$untung = $_POST['untung'];

if ($jual > $modal){
    $untung = $jual-$modal;
}

$query = "INSERT INTO barang_toko values ('$tgl', '$no', '$nama', '$jual', '$modal', '$untung')";

mysqli_query($koneksi, $query) or die ("perintah sql gagal " . mysqli_error($koneksi));

header('location: index.php');
?>