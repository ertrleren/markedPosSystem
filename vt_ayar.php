<?php
try{
    $host='localhost';
	$vtadi='urunlerdb';
	$kullanıcı='root';
	$sifre='';
	$vt=new
	PDO("mysql:host=$host;dbname=$vtadi;charset=utf8","$kullanıcı","$sifre");
	}
	
	catch(PDOException $e) {
	    print $e->getMessage();
		}
		

?>