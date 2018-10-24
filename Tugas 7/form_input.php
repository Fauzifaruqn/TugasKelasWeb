<!DOCTYPE html>
<html>
<head>
	<title>FORM BIODATA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">		
	<div class="col-md-6">
	<center><h1>Form Biodata</h1></center>
	<br/>
    <form action="tampil_data.php" method="post"> 
		<div class="form-group">
			<label>Nama Lengkap:</label>
			<input type="text" class="form-control" name="nama" maxlength="50" required>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin :</label><br/>
			<label class="radio-inline"><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki</label>
            <label class="radio-inline"><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
		</div>
        <div class="form-group">
			<label>Alamat :</label>
            <textarea class="form-control" rows="3" name="alamat" maxlength="100" required></textarea>
		</div>
		<div class="form-group">
			<label>Tempat Lahir :</label>
			<input type="text" class="form-control" name="tempat_lahir" maxlength="100" required>
		</div>
		<div class="form-group">
			<label>Tanggal Lahir :</label>
			<input type="date" class="form-control" name="tgl_lahir" required>
		</div>
		<div class="form-group">
			<label>Email :</label>
			<input type="email" class="form-control" name="email" maxlength="100" required>
		</div>
		<input type="submit" class="btn btn-primary" value="Submit" name="submit">
	</form>		
    </div>
    </div>
</body>
</html>