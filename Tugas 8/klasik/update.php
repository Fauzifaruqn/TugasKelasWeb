<?php        
	session_start();
	if($_SESSION["level"]=="")
		{     
			header("Location: logout.php");
		}
	else
		{  
			$level=$_SESSION["level"];
			include "koneksi.php"; 
			//update data
			if(isset($_POST['update']))
				{
					$npm=$_POST['npm'];   
					$email=$_POST['email'];   
					$nama=$_POST['nama'];
					$jk=$_POST['jk'];    
					$alamat=$_POST['alamat'];
					$rawdate = htmlentities($_POST['tgl_lahir']);
					$tgl_lahir = date('Y-m-d', strtotime($rawdate));
					$sql = "UPDATE identitas set nama='$nama', alamat='$alamat', jk='$jk', tgl_lhr='$tgl_lahir', email='$email' where npm='$npm' ";  
					if ($conn->query($sql) === TRUE) 
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
		}
?>
