<!DOCTYPE html>
<html>
	<head>
		<title>DAFTAR MAHASISWA</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	</head>
	<body>
		<div class="container">		
			<div class="col-md-6">
				<center><h1>ISI BIODATA</h1></center>
				<br/>
				<form action="input.php" method="post">
					<div class="form-group">
						<label>NPM :</label>
						<input type="text" class="form-control" name="npm">
					</div>
					<div class="form-group">
						<label>Username :</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label>Email :</label>
						<input type="text" class="form-control" name="email">
					</div>			
					<div class="form-group">
						<label>Password :</label>
						<input type="password" class="form-control" name="password">
					</div>								
					<div class="form-group">
						<label>Nama :</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin :</label><br/>
						<label class="radio-inline"><input type="radio" name="jk" value="L"> Laki-Laki</label>
						<label class="radio-inline"><input type="radio" name="jk" value="P"> Perempuan</label>
					</div>
					<div class="form-group">
						<label class="font-only" style="color: white">Tanggal Lahir</label><br>								
					  <input class="input-group date" type="date" name="tgl_lahir"><br><br>							
					</div>
					<div class="form-group">
						<label>Alamat :</label>
						<textarea class="form-control" rows="3" name="alamat"></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Submit" name="submit">
				</form>		
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>