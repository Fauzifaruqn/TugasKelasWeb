<?php        
	include "koneksi.php"; 
	//input data
	if(isset($_POST['submit']))
		{
			$npm=$_POST['npm'];
			$username=$_POST['username'];
			$email=$_POST['email'];
			$password=sha1($_POST['password']);
			$nama=$_POST['nama'];
			$jk=$_POST['jk'];
			$alamat=$_POST['alamat'];
			$rawdate = htmlentities($_POST['tgl_lahir']);
			$tgl_lahir = date('Y-m-d', strtotime($rawdate));
			$sql = "INSERT INTO identitas (npm, nama, alamat, jk, tgl_lhr, email) VALUES ('$npm', '$nama', '$alamat','$jk','$tgl_lahir','$email') ";
			$sql2 = "INSERT INTO users (username, password, level, npm) VALUES ('$username', '$password', 1,'$npm')"; 
			if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) 
				{
					// redirect ke halaman tampil data
					header("Location: tampil_data.php");
				} 
			else 
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}
	$conn->close();
?>

