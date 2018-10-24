<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">		
		<div class="col-md-6">
			<center><h1>ISI BIODATA</h1></center>
			<br/>
			<form action="<?php echo base_url('login/input_data');?>" method="post" onSubmit="return validate();">
				<div class="form-group">
					<label>NPM :</label>
					<input type="text" class="form-control" name="npm">
				</div>
				<div class="form-group">
					<label>NAMA :</label>
					<input type="text" class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Alamat :</label>
					<textarea class="form-control" rows="3" name="alamat"></textarea>
				</div>
				<div class="form-group">
					<label>Jenis Kelamin :</label><br/>
					<label class="radio-inline"><input type="radio" name="jk" value="L"> Laki-Laki</label>
					<label class="radio-inline"><input type="radio" name="jk" value="P"> Perempuan</label>
				</div>
				<div class="form-group">
					<label>Tanggal Lahir :</label>
					<input type="date" class="form-control" name="tgl_lahir" required>
				</div>
				<div class="form-group">
					<label>Email :</label>
					<input type="email" class="form-control" name="email" maxlength="100" required>
				</div>
				<div class="form-group">
					<label>Username :</label>
					<input type="text" class="form-control" name="username" required>
				</div>
				<div class="form-group">
					<label>Password :</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
				<div class="form-group">
					<label>Confirm Password :</label>
					<input type="password" class="form-control" id="confirmp" name="confirmp" required>
				</div>
				
				<input type="submit" class="btn btn-primary" value="Submit" name="submit">
			</form>		
		</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		function validate(){
            var a = document.getElementById("password").value;
            var b = document.getElementById("confirmp").value;
            if (a!=b) {
               alert("Passwords tidak sama!");
               return false;
            }
        }
    </script>
  <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
</body>
</html>