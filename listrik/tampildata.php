<?php 
	
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_data" ;
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	while($row = mysqli_fetch_array($r)) {
	array_push($result,array(
		"id"=>$row['id'],
		"nama"=>$row['nama'],
		"jenis"=>$row['jenis']
		));
}
 
	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>