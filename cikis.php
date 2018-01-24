<?php 
//"çıkış" linkine tıklandığında session'u sonlandırıyor ve güvenli çıkış sağlıyor.
session_start();
ob_start();
session_destroy();
echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";
header("Refresh: 2; url=index.php"); //2 saniye sonra index.php'ye git diyor.
ob_end_flush();

?>