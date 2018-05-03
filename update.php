<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj -> ambilkoneksi();

if($koneksi->connect_error){
    die("Koneksi GAGAL : " . $koneksi->connect_error);

}else{
    echo "";
}

$query = "update harga_barang " .
        "set nama_barang = '" . $_POST["namabarang"] . "'," .
        " harga = " . $_POST["harga"] . " " .
        "where kode = " . $_POST["kode"];

if($koneksi -> query($query) == true){
    echo "<br>Data " . $_POST["namabarang"] . 
    " sudah berubah . Data bisa dilihat " .
    '<a href = "main.php">disini</a>';

}else{
    echo "error : " . $query . " -> " . $koneksi->error;
}
$koneksi -> close();


?>