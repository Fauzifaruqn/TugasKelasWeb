<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">		
     <div class="col-md-6">
	<center><h1>EDIT BIODATA</h1></center>
	<br/>
	<?php foreach($mhs->result() as $row) { ?>
    <form action="<?php echo base_url('login/update_data');?>" method="post">
		<div class="form-group">
			<label>NPM :</label>
			<input type="text" class="form-control" name="npm" value="<?php echo $row->npm;?>" readonly>
		</div>
		<div class="form-group">
			<label>Nama :</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $row->nama;?>" required>
		</div>
        <div class="form-group">
			<label>Alamat :</label>
            <textarea class="form-control" rows="3" name="alamat" required><?php echo $row->alamat;?></textarea>
		</div>
        <div class="form-group">
			<label>Jenis Kelamin :</label><br/>
			<label class="radio-inline"><input type="radio" name="jk" value="L"> Laki-Laki</label>
            <label class="radio-inline"><input type="radio" name="jk" value="P"> Perempuan</label>
		</div>
		<div class="form-group">
			<label>Tanggal Lahir :</label>
			<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row->tgl_lhr;?>" required>
		</div>
		<div class="form-group">
			<label>Email :</label>
			<input type="email" class="form-control" name="email" maxlength="100" value="<?php echo $row->email;?>" required>
		</div>
     <input type="submit" class="btn btn-primary" value="Submit" name="submit">
	 </form>
	<?php } ?>
    </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>