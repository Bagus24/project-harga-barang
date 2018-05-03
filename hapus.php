<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj -> ambilkoneksi();

if($koneksi->connect_error){
    die("Koneksi GAGAL : " . $koneksi->connect_error);

}else{
    echo "";
}

//$query = "update harga_barang " .
        //"set nama_barang = '" . $_POST["namabarang"] . "'," .
        //" harga = " . $_POST["harga"] . " " .
        //"where kode = " . $_POST["kode"];

$query = "delete from harga_barang where kode = " .
        $_GET["kode"];

if($koneksi -> query($query) == true){
    echo "<br>Data dengan kode" . $_GET["kode"] . 
    " sudah dihapus . Data bisa dilihat " .
    '<a href = "main.php">disini</a>';

}else{
    echo "error : " . $query . " -> " . $koneksi->error;
}
$koneksi -> close();


?>