<?php 

//girilen kullanıcı adı ve şifreye göre giriş (login) işlemini yaptırır.
error_reporting(0);
ob_start();
session_start();
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
 if($_POST["gonder"])  {
	if($kadi=="" or $sifre=="") {
        echo "Lutfen kullanici adi veya sifreyi bos birakmayiniz..! ";
    } else {
		
    	if( $kadi=="ibrahim" and $sifre=="12345"){
		$_SESSION["login"] = "true";
		$_SESSION['user'] = $kadi;
		$_SESSION["pass"] = $sifre;
	
    header("location:admin.php");
       } else { 
	   echo "Kullanıcı adı veya şifrede hata var."; 
	          }
	}
 }
?>

<!-- giriş formu --> 
<form action="" method="post">
<center>
Kullanici Adi:<input type="text" name="kadi">  <br><br>
Sifre:<input type="password" name="sifre">  <br><br>
<input type="submit" value="Giriş Yap" name="gonder">
</center> 
</form>
<!-- giriş formu sonu--> 
<?php ob_end_flush(); ?>








