<?php
class FaturaliKullanici extends Kullanici {
	protected $faturalar; //Fatura
	function __construct ($id,$adSoyad,$telefonNo,$hatAktifligi)
	{
		parent::__construct($id,$adSoyad,$telefonNo,$hatAktifligi);

		//faturaGecmisiniAl();
	}
	public function getFaturalar()
	{
		return $this->faturalari;
	}
	//abstract function faturaGecmisiniAl()
}
?>