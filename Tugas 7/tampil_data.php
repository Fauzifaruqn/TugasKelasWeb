<html>
<head>
	<title>TAMPIL BIODATA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>   
	<div class="container">  
		<h1>BIODATA</h1>       
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>NAMA</th>
					<th>JENIS KELAMIN</th>
					<th>ALAMAT</th>
					<th>TEMPAT LAHIR</th>
					<th>TANGGAL LAHIR</th>
					<th>EMAIL</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$nama=$_POST['nama'];
			$jk=$_POST['jk'];
			$alamat=$_POST['alamat'];
			$tempat_lhr=$_POST['tempat_lahir'];
			$tgl_lhr=$_POST['tgl_lahir'];
			$email=$_POST['email'];
			?>
				<tr>
					<td><?php echo $nama;?></td>
					<td><?php echo $jk;?></td>
					<td><?php echo $alamat;?></td> 
					<td><?php echo $tempat_lhr;?></td>
					<td><?php echo $tgl_lhr;?></td>
					<td><?php echo $email;?></td>
				</tr>
			</tbody>
		</table>
		<form action="form_input.php">
			<input type="submit" class="btn btn-primary" value="Back">
		</form>
		
    </div>    
</body>
</html>