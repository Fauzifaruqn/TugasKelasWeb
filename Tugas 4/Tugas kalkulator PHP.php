<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <meta charset="UTF-8">
 <title>Kalkulator Dengan PHP</title>
</head>
<style type="text/css">
table{
 width:60%; background:#FDD017; margin:0 auto; box-shadow:10px 10px 30px #ccc; border-bottom:20px solid #FDD017;
}
.result-box{
 width:50%; margin:0 auto; background: #FDD017; height:100px; margin-top:20px; padding:20px; color:white;box-shadow:10px 10px 30px #ccc; font-family:arial;
}
td{
font-size:20px; padding:10px; font-family:arial; color:#150517;
}
input[type=text]{
 padding:10px; width:100px; font-size:20px;
}
input[type=submit]{
 padding:10px;  font-size:16px; cursor:pointer;border:none; background:#4799eb; color:#333; width:300px; height:50px;
}
input[type=reset]{
 padding:10px;  font-size:16px;cursor:pointer; border:none;background:#4799eb; color:#333; height:50px;
}
input[type=submit]:hover{
 background:#eee; color:#444;
}
input[type=reset]:hover{
 background:#eee; color:#444;
}
h1{
 background: #150517; color:white; font-family:arial; padding:20px ; width:50;
}

</style>
<body>
 <form action="" method="post">
 <table>
 
 <center>
 <h1>Kalkulator dengan PHP</h1>
 <tr><td>Input Angka Pertama </td><td><input type="text" name="angka_pertama" id="" /></td></tr>
 <tr><td>Input Angka Kedua</td><td><input type="text" name="angka_kedua" id="" /></td></tr>
 <tr><td>Pilih Operator </td> 
 <td>
 <select name="operator" id="">
  <option value="static">Pilih Operator</option>
  <option value="+">Penjumlahan</option>
  <option value="-">Pengurangan</option>
  <option value="*">Perkalian</option>
  <option value="/">Pembagian</option>
  </select></td></tr>
 
 <tr><td><input type="reset" value="Reset " /></td><td><input type="submit" name="submit" value="Proses" /></td></tr>
 </center>
 </table>
 </form>
 
 <?php
 if(isset($_POST['submit'])){
  $angka_pertama = $_POST['angka_pertama'];
  $angka_kedua = $_POST['angka_kedua'];
  $operator = $_POST['operator'];
     
 
 ?>
 <div class="result-box">
 <h3>Hasil : <?php
switch($operator){ case "+":
   echo $angka_pertama + $angka_kedua; 
   break;
   case "-":
   echo $angka_pertama - $angka_kedua; 
   break;
   case "*":
   echo $angka_pertama * $angka_kedua; 
   break;
   case "/":
   echo $angka_pertama / $angka_kedua; 
   break;
   default:
   echo "Masukan Angka dan Pilih Operator";
   break;
      
   
  }
  
  
 }
 ?></h3>
 </div>
</body>
</html>