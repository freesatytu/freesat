<?php class BankaKarti {
protected $kartNo; // String 
protected $adSoyad; // String 
protected $ay; // int 
protected $yil; //int
protected $guvenlikNo; //int
function __construct ($kartNo, $adSoyad, $ay, $yil, $guvenlikNo) // [String kartNo, String adSoyad, int ay, int yil, int guvenlikNo]
{
	
	$this->kartNo = $kartNo; 
	$this->adSoyad = $adSoyad; 
	$this->ay = $ay; 
	$this->yil = $yil; 
	$this->guvenlikNo = $guvenlikNo; 
}
public function getKartNo ()
{
	return $this->kartNo;
}
public function getAdSoyad ()
{
	return $this->adSoyad;
}
public function getAy ()
{
	return $this->ay;
}
public function getYil ()
{
	return $yil;
}
public function getGuvenlikNo ()
{
	return $guvenlikNo;
}
}
?>