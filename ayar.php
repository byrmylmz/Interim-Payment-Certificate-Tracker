
<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "proje_2";



// bu ilk sorgu eski yöntemle benim için
$connection=mysqli_connect("127.0.0.1","root","","proje_1");


//buda yeni pdo ile bağlantı oda çalışıyor dursun
$db = new PDO('mysql:host=127.0.0.1;dbname=proje_2','root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (! $db){echo'bağlanamadı';}

?>