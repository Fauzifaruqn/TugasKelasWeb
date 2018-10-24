<!DOCTYPE html>
<html>
<head>
	<title>Kasus Pom Bensin</title>
	<meta charset="utf-8">
	<style>
	body {
    background-image: url("pic1.jpg");
	color : red;
	}


	</style>
</head>
<body>

<center>
<h1>PT Ini Minyak Kita</h1>
	<form method="POST"	id="Form1">
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Jenis Bahan Bakar</th>
				<th>Harga</th>
			</tr>

			<tr>
				<td>1</td>
				<td>Premium</td>
				<td>6.500/lt</td>
			</tr>

			<tr>
				<td>2</td>
				<td>Pertalite</td>
				<td>7.500/lt</td>
			</tr>

			<tr>
				<td>3</td>
				<td>Pertamax</td>
				<td>8.500/lt</td>
			</tr>

			<tr>
				<td>4</td>
				<td>Solar</td>
				<td>5.000/lt</td>
			</tr>

			<tr>
				<td>5</td>
				<td>Pertamax Plus</td>
				<td>9.500/lt</td>
			</tr>
		</thead>
	</table>

	<label for="pilih">Masukan Jenis Bahan Bakar</label>

	  <select name="bahanbakar" >
	  <option value="premium" name="jenisBahanBakar">Premium</option>
	  <option value="pertalite" name="jenisBahanBakar">Pertalite</option>
	  <option value="pertamax" name="jenisBahanBakar">Pertamax</option>
	  <option value="solar" name="jenisBahanBakar">Solar</option>
	  <option value="pertamaxPlus" name="jenisBahanBakar">Pertamax Plus</option>
	  </select>
	  <table>
	  <tr>
		<td>
			<label for="milih">Melakukan Pembelian Berdasarkan : </label>
						<select name="pembayaran">
						  <option value="uang">Jumlah Uang</option>
						  <option value="liter">Jumlah Liter</option>
						</select>
		</td>
		<td>
		<input type="Number" name="jumlah" value="0">
		</td>
	</tr>
	  </table>
	  <input id="Tombol" type="submit" name="submit" value="Beli">

</form>
<?php
			if(isset($_POST['submit'])){
				$bahanbakar = $_POST['bahanbakar'];
				$pembayaran = $_POST['pembayaran'];
				$jumlah = $_POST['jumlah'];
				$Harga = 0;
				if($bahanbakar == "premium"){
					$Harga = 6500;
				}elseif ($bahanbakar == "pertalite") {
					$Harga = 7500;
				}elseif ($bahanbakar == "pertamax") {
					$Harga = 8500;
				}elseif ($bahanbakar == "solar") {
					$Harga = 5000;					
				
				}elseif ($bahanbakar == "pertamaxPlus") {
					$Harga = 9500;					
				}

				if($pembayaran=="liter"){
					$Total = $Harga * $jumlah;
					$text = "Anda membeli $bahanbakar sebanyak $jumlah Liter dengan harga Rp $Total";
				}else{
					$Total = $jumlah/$Harga;					
					$text = "Terimakasih, Anda telah membeli $bahanbakar sebanyak Rp. $jumlah dengan jumlah $Total Liter";
				}
				?>
					<div id="hasil">
						<?php echo "$text";?>			
					</div>
				<?php
			}
		?>
</center>



</body>
</html>