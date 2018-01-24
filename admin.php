<?php 
//bu dosya giriş yapan kullanıcıyı index.php ye yönlendiriyor.
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center>Admin sayfasina hosgeldiniz..! ";
    echo "<a href=cikis.php>Guvenli cikis</a></center>";
}

?>