<?php
	class SMS {
	private $id;
	private $gonderenKullaniciID;
	private $gonderilenKullaniciID;
	private $mesaj;
	private $gonderilmeZamani; //Date

	function __construct($id, $gonderenKullaniciID, $gonderilenKullaniciID, $mesaj,$gonderilmeZamani) {
		$this->id = $id;
		$this->gonderenKullaniciID = $gonderenKullaniciID;
		$this->gonderilenKullaniciID = $gonderilenKullaniciID;
		$this->mesaj = $mesaj;
		$this->gonderilmeZamani = $gonderilmeZamani;
	}

	public function getId() {
		return $this->id;
	}

	public function getGonderenKullaniciID() {
		return $this->gonderenKullaniciID;
	}

	public function getGonderilenKullaniciID() {
		return $this->gonderilenKullaniciID;
	}

	public function getMesaj() {
		return $this->mesaj;
	}

	public function getGonderilmeZamani() {
		return $this->gonderilmeZamani;
	}

}
?>