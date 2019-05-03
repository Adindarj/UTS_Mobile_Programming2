<?php
 
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_data (nama,jenis) VALUES ('$nama','$jenis')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Data';
		}else{
		echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>