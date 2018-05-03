<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj -> ambilkoneksi();

if($koneksi->connect_error){
    die("Koneksi GAGAL : " . $koneksi->connect_error);

}else{
    echo "Koneksi ke database telah sukses";
}

//echo "kode : " . $_POST["kode"];
//echo "nama barang : " . $_POST["namaBarang"];
//echo "harga : " . $_POST["harga"];

$query = "insert into harga_barang (kode, nama_barang, harga)" . 
    "values(" . $_POST["kode"] . ", '" . $_POST["namabarang"] ."',
    " . $_POST["harga"] . ") ";
//echo "<br><br>".$query;

if($koneksi -> query($query) == true){
    echo "<br>Data " . $_POST["namabarang"] . 
    " sudah tersimpan . Data bisa dilihat " .
    '<a href = "main.php">disini</a>';

}else{
    echo "error : " . $query . " -> " . $koneksi->error;
}
$koneksi -> close();


?>

