<?php
$dsn = "mysql:host=boo2stbrvfiqvq2u9lxi-mysql.services.clever-cloud.com;dbname=boo2stbrvfiqvq2u9lxi" ;
$user = "ulkxbdoiqzkhw4xq" ;
$pass = "qFmX3PWJXHPtTjlYROhF" ;
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
try {
 	$con = new PDO($dsn , $user , $pass , $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


 }catch(PDOException $e) {
  echo $e->getMessage() ;
 }



?>
