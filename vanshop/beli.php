<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","vanshop");
?>

<?php

// mendapatkan id produk dari url
$id_produk=$_GET['id'];


// jika sudah ada produk di kerajang,maka produk itu jumlahnya di +1
if(isset($_SESSION['keranjang'][$id_produk]))
{
	$_SESSION['keranjang'][$id_produk]+=1;

}
// selain itu (belum ada di keranjang) maka produk itu dianggap dibeli 1
else
{
	$_SESSION['keranjang'][$id_produk] = 1;

}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//larikan ke halaman keranjang
echo "<script>alert('produk telah masuk ke karanjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>