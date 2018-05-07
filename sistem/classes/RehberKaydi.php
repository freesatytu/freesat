<?php
	class RehberKaydi {
	protected $id;
	private $adSoyad;
	private $telefonNo;

	function __construct($id,$adSoyad,$telefonNo) {
		$this->id = $id;
		$this->adSoyad = $adSoyad;
		$this->telefonNo = $telefonNo;
	}

	public function getAdSoyad() {
		return $this->adSoyad;
	}

	public function setAdSoyad($adSoyad) {
		$this->adSoyad = $adSoyad;
	}

	public function getTelefonNo() {
		return $this->telefonNo;
	}

	public function setTelefonNo($telefonNo) {
		$this->telefonNo = $telefonNo;
	}

	public function getId() {
		return $this->id;
	}
}
?>