<?php 

include 'data.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa - My Website</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md">
					
				<h3>Siswa yang sudah mendaftar</h3>	
				<br>
				<a href="form-daftar.php" class="btn btn-primary">[+] New Add</a>

			</div>	
		</div>
	</div>
	
	<br>

	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<table class="table">
				  <thead>
				    <tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Agama</th>
						<th scope="col">Sekolah Asal</th>
				    </tr>
				  </thead>
				  <tbody>
				  			<?php
					$query = get_data($conn, 'calon_siswa');
					$no = 0;
					while($siswa = mysqli_fetch_array($query)){
						$no++
					?>
					    <tr>
					      <th scope="row"><?= $no ?></th>
					      <td><?= $siswa['nama'] ?></td>
					      <td><?= $siswa['alamat'] ?></td>
					      <td><?= $siswa['jenis_kelamin'] ?></td>
					      <td><?= $siswa['agama'] ?></td>
					      <td><?= $siswa['sekolah_asal'] ?></td>
					    </tr>
					<?php
					}		
					?>

				  </tbody>
				</table>
				
				<p>Total: <?php echo mysqli_num_rows($query) ?></p>
				
			</div>
		</div>
	</div>
</body>
</html>