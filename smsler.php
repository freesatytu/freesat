<?php
    ## Bağlantı Değişkenleri ##
	$host = "localhost";
	$user = "root";
	$pass = "q123";
	$database = "freesat";
	
	## MySQL Bağlantısı ##
	try {
	    $db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass);
	} catch (PDOException $e){
	    die($e->getMessage());
    }
    
    $sorgu = $db->query("SELECT * FROM sms ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($sorgu as $s) {
        echo $s["id"]."-> ".$s["mesaj"]."<br>";
    }
?>