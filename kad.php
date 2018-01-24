<form action="kad.php" method="POST">
Kullanici adi: <br><input type="text" name="kull_adi"> <br>
Sifre:<br> <input type="password" name="k_sifre">
<br>
<input type="submit" value="Gönder">

</form>


<?php
error_reporting(0);

if($_POST['kull_adi'] and $_POST['k_sifre']){
	
	$kull_adi=$_POST['kull_adi'];
	$k_sifre=$_POST['k_sifre'];
	echo "Kullanıcı Adı: ".$kull_adi."<br>";
	echo "Şifre: ".$k_sifre."<br>";
	}

?>
