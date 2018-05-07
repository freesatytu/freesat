<?php
	class HarcamaKurali {
	protected $id; //int
	private $kalanKonusma; //int
	private $kalanSMS; //int
	private $kalanInternet; //int
	private $kalanGun; //int
	private $aktif; //boolean
	private $faturalandirmaSistemi; //FiyatlandirmaSistemi

	function __construct ($id,$kalanKonusma,$kalanSMS,$kalanInternet,$kalanGun,$aktif,$faturalandirmaSistemi) {
		$this->id = $id;
		$this->kalanKonusma = $kalanKonusma;
		$this->kalanSMS = $kalanSMS;
		$this->kalanInternet = $kalanInternet;
		$this->kalanGun = $kalanGun;
		$this->aktif = $aktif;
		$this->faturalandirmaSistemi = $faturalandirmaSistemi;
	}

	public function getKalanKonusma() {
		return $this->kalanKonusma;
	}

	public function setKalanKonusma($kalanKonusma) {
		$this->kalanKonusma = $kalanKonusma;
	}

	public function getKalanSMS() {
		return $this->kalanSMS;
	}

	public function setKalanSMS($kalanSMS) {
		$this->kalanSMS = $kalanSMS;
	}

	public function getKalanInternet() {
		return $this->kalanInternet;
	}

	public function setKalanInternet($kalanInternet) {
		$this->kalanInternet = $kalanInternet;
	}

	public function getKalanGun() {
		return $this->kalanGun;
	}

	public function setKalanGun($kalanGun) {
		$this->kalanGun = $kalanGun;
	}

	public function isAktif() {
		return $this->aktif;
	}

	public function setAktif($aktif) {
		$this->aktif = $aktif;
	}

	public function getFaturalandirmaSistemi() { //Fiyatlandirma Sistemi
		return $this->faturalandirmaSistemi;
	}

	public function setFaturalandirmaSistemi($faturalandirmaSistemi) {
		$this->faturalandirmaSistemi = $faturalandirmaSistemi;
	}

	public function getId() {
		return $this->id;
	}

}

?>