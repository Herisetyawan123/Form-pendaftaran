<?php 
include 'config.php';

function get_data($conn, $tbname)
{
	$sql = "SELECT * FROM calon_siswa";
	$query = mysqli_query($conn, $sql);
	return $query;
}

function insert_data($conn, $data)
{
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$jk = $data['jenis_kelamin'];
	$agama = $data['agama'];
	$sekolah = $data['sekolah_asal'];
	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
	$query = mysqli_query($conn, $sql);
	return $query;
}

 ?>