<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss.css">
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM buku WHERE id_buku='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Buku</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_bk" value="<?php echo $row['id_buku']; ?>">

		<div class="form-group">
			<label>Judul Buku</label>
			<input type="text" name="judul_bk" class="form-control" value="<?php echo $row['judul_buku']; ?>">			
		</div>

		<div class="form-group">
			<label>Genre Buku</label>
			<input type="text" name="genre_bk" class="form-control" value="<?php echo $row['genre_buku']; ?>">			
		</div>

		<div class="form-group">
			<label>Harga Buku</label>
			<input type="text" name="harga_bk" class="form-control" value="<?php echo $row['harga_buku']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Buku</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 