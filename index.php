<!DOCTYPE html>
<html>
<head>
	<title>Upload gambar</title>
</head>
<body>	
	<form action="index.php" method="POST" enctype="multipart/form-data">  
	Gambar :  <input type="file" name="picture" accept="image/*" /><br>
	<input type="submit" name="upload" value="upload" />  
	</form>  
</body>
</html>

<?php
$file = $_FILES['picture'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "gambar/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "Gambar berhasil diunggah."
?>
<img src="<?php echo $upload_dir .$nama_file; ?>">
