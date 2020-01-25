<?php 

include 'data.php';
if (isset($_POST['kirim'])) {

	$save = insert_data($conn, $_POST);
	if ($save) {
		$error = True;
	}else{
		$error = False;

	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMA Negeri Amblu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md">
					
				<h3>Formulir Pendaftaran Siswa Baru</h3>
				
				<a href="index.php" class="btn btn-primary">back</a>
				<?php if (isset($error)): ?>
					<?php if ($error): ?>
						<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
						  <strong>Succesfull!</strong> your data have been insert.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>	
					<?php else: ?>
						<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
						  <strong>Failed!</strong> your data haven't been insert.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>										
					<?php endif ?>
				<?php endif ?>


			</div>	
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form method="post" action="">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
				    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">alamat</label>
				    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="alamat">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">jenis kelamin</label>
				    <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
				      <option value="laki-laki">laki-laki</option>
				      <option value="perempuan">perempuan</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">agama</label>
				    <select class="form-control" name="agama" id="exampleFormControlSelect1">
				      	<option value="islam">islam</option>
				      	<option value="kristen">kristen</option>
						<option value="hindu">Hindu</option>
						<option value="budha">Budha</option>
						<option value="atheis">Atheis</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">sekolah asal</label>
				    <input type="text" name="sekolah_asal" class="form-control" id="exampleInputPassword1" placeholder="sekolah asal">
				  </div>
				  <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	</body>
</html>


