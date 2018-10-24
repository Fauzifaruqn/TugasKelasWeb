<?php 
  session_start();
  if($_SESSION["level"]=="")
	  {     
	  	header("Location: logout.php");
	  }
  else
	  {  
		  $npm= $_SESSION["npm"];
		  $level=$_SESSION["level"];
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MAHASISWA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php        
include "koneksi.php";
$npm=$_GET['id'];    
$sql = "SELECT npm, nama, alamat,jk, tgl_lhr, email FROM identitas where npm='$npm' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
	{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	    { 
		    $nama=$row["nama"];
		    $alamat=$row["alamat"];
		    $jk=$row["jk"];             
		    $tgl_lhr=$row["tgl_lhr"];
		    $email=$row["email"];
	    }
	}
else
	{ 
    $npm="";
    $nama="";
    $alamat="";
    $jk="";  
    $tgl_lhr="";
    $email="";
	}
?> 
	<div class="container">		
		<div class="col-md-6">
			<center><h1>EDIT BIODATA</h1></center>
			<br/>
			<form action="update.php" method="post">
				<div class="form-group">
					<label>NPM :</label>
					<input type="text" class="form-control" name="npm" value="<?php echo $npm;?>">
				</div>
				<div class="form-group">
					<label>Email :</label>
					<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
				</div>				
				<div class="form-group">
					<label>Nama :</label>
					<input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin :</label><br/>
					<label class="radio-inline"><input type="radio" name="jk" value="L" <?php if($jk=="L"):?>checked="checked" <?php endif;?>> Laki-Laki</label>
					<label class="radio-inline"><input type="radio" name="jk" value="P" <?php if($jk=="P"):?>checked="checked" <?php endif;?>> Perempuan</label>
				</div>
					<div class="form-group">
						<label class="font-only" style="color: white">Tanggal Lahir</label><br>								
					  <input class="input-group date" type="date" name="tgl_lahir" value="<?php echo $tgl_lhr;?>"><br><br>							
					</div>				
				<div class="form-group">
					<label>Alamat :</label>
					<textarea class="form-control" rows="3" name="alamat"><?php echo $alamat;?></textarea>
				</div>
				<input type="submit" class="btn btn-primary" value="Update" name="update">
			</form>		
		</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
	}
?>