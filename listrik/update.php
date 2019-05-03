<?php 
 
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_data SET nama = '$nama', jenis = '$jenis' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Update Data';
		}else{
		echo 'Gagal Update Data';
		}
		
		mysqli_close($con);
	}
?>