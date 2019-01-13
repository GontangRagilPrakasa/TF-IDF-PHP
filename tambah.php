<?php 
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$Judul=$_POST['Judul'];
	$Berita=$_POST['Berita'];
	$last = mysqli_query($konek,"ALTER TABLE tbberita AUTO_INCREMENT = 1");
	$input=mysqli_query($konek,"INSERT INTO tbberita  VALUES('$id','$Judul','$Berita')") or die (mysqli_error($konek));
	if($input){
		header('Location:index.php?rute=koleksi');
			
		}
	}



?>