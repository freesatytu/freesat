<?php
	
	session_start();
	ob_start("ob_gzhandler");
	
	## Hataları Göster ## Sonradan gizlenecek.
	// error_reporting(0);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
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
	
	## Karakter Sorunu ##
	$db->query("SET CHARACTER SET 'utf8'");
	$db->query("SET NAMES 'utf8'");
	
	## Saat Sorunu ##
	$db->query("SET time_zone = '+3:00'");
	
	## Genel Ayarlar ##
	$query = $db->query("SELECT * FROM ayarlar");
	$ayar = $query->fetchAll(PDO::FETCH_ASSOC);
	$ayar = $ayar[0];

	## Sabitler ##
	define('PATH', realpath("."));
	define('URL', $ayar['site_url']);
	define('TEMA_URL', URL.'/tema/'.$ayar['site_tema']);
	define("TEMA", PATH."/tema/".$ayar["site_tema"]);
	define("TEMA_DIR", $ayar["site_tema"]);
	define("SITE_TITLE", $ayar["site_baslik"]);
	define("SITE_DESC", $ayar["site_desc"]);
	define("SITE_KEYW", $ayar["site_keyw"]);

	## Sabit String Uzunlukları ##
	define('L_ADSOYAD', 30);
	define('L_TELEFON_NO', 14);
	define('L_KART_NO', 16);
	define('L_SMS', 400);
	define('L_ISTEK_SIKAYET', 400);
	
	## Fonksiyonlar ve Sınıflar ##
	require_once "fonksiyon.php";

	## Fonksiyonları Otomatik Yükletme ##
	function loadClasses($className) {
		require __DIR__ . '/classes/' . $className . '.php';
	}
	spl_autoload_register('loadClasses');

	## Sınıf İlklendirmeleri ##
	require "init.php";

?>