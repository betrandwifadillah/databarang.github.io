<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<>
    <?php
    $hostname = "localhost";
    $database = "dbbarang_toko";
    $username = "root";
    $password = "";
    $koneksi = mysqli_connect($hostname, $username, $password, $database);

    if (!$koneksi) {
        die ("koneksi tidak berhasil: " . mysqli_connect_error());
    }
    ?>
    <br><br>
    <table width="80%" border="1" align="center" cellpadding="10">
        <tr>
            <td colspan="6" align="center" bgcolor="#81d8d0">Data Barang</td>
        </tr>
        <tr>
            <td bgcolor="#b6d7a8">Tanggal</td>
            <td bgcolor="#b6d7a8">No</td>
            <td bgcolor="#b6d7a8">Nama Helm</td>
            <td bgcolor="#b6d7a8">Harga Jual Helm</td>
            <td bgcolor="#b6d7a8">Modal Helm</td>
            <td bgcolor="#b6d7a8">Keuntungan</td>
        </tr>
    <?php
    $no=1;
    $query = mysqli_query($koneksi, 'SELECT * FROM barang_toko');
    while ($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td>&nbsp; <?php echo $data [0] ?></td>
        <td>&nbsp; <?php echo $data [1] ?></td>
        <td>&nbsp; <?php echo $data [2] ?></td>
        <td>&nbsp; <?php echo $data [3] ?></td>
        <td>&nbsp; <?php echo $data [4] ?></td>
        <td>&nbsp; <?php echo $data [5] ?></td>
    </tr>
    <?php } ?>
    </table>

    <link rel="stylesheet" href="style.css">
    <br><br>
    <center><button><a href="input.html">Tambah Barang</a></button></center>

</body>
</html>