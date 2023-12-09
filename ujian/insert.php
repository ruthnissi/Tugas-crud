<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$genre = $_POST['genre_bk'];
$harga = $_POST['harga_bk'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , genre_buku , harga_buku) VALUES('$judul' , '$genre' , '$harga')";

if (mysqli_query($conn , $query)) {
	# code redirect setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>