<?php
	$uname= $_POST["uname"];
	$pwd = $_POST["pwd"];
?>

<html>
<head>

</head>
<body>
	<?php date_default_timezone_set('Asia/Jakarta')?>
	<div id="rcorners2" align="center" style="border: 1px solid black; box-sizing: border-box; margin: auto; text-align: center; width: 300px; margin-bottom: 10px;">
		
		<?php
		$t = date("H");
		
if ($t <= "12") {
    echo "Selamat Pagi!";
} elseif ($t < "20") {
    echo "Selmat Sore!";
} else {
    echo "Selamat Malam!";
}
?>
 
		<?php echo "$uname <br>"?>
		<p>Anda berhasil masuk</p>
		<?php echo date("d/m/Y")."<br>"?>
		<?php echo date("h:i:sa")."<br><br>"?>
	</div>
</body>
</html>