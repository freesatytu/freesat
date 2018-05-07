<?php
	class FiyatlandirmaSistemi {
	protected $id; // int
	protected $isim; // string
	protected $konusma; // int
	protected $sms; // int 
	protected $internet; // int 
	protected $gun; // int
	protected $fiyat; // int

	function __construct ($id,$isim,$konusma,$sms,$internet,$gun,$fiyat) {

		$this->id = $id;
		$this->isim = $isim;
		$this->konusma = $konusma;
		$this->sms = $sms;
		$this->internet = $internet;
		$this->gun = $gun;
		$this->fiyat = $fiyat;
	}

	public function getId() {
		return $this->id;
	}

	public function getIsim() {
		return $this->isim;
	}

	public function getKonusma() {
		return $this->konusma;
	}

	public function getSms() {
		return $this->sms;
	}

	public function getInternet() {
		return $this->internet;
	}

	public function getGun() {
		return $this->gun;
	}

	public function getFiyat() {
		return $this->fiyat;
	}

}
?>