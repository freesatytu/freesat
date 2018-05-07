<?php
	class FaturasizKullanici extends Kullanici {
	protected $bakiye;
	protected $kritikBakiye;

	function __construct ($id, $adSoyad, $telefonNo, $hatAktifligi,$bakiye,$kritikBakiye) {
		parent::__construct($id, $adSoyad, $telefonNo, $hatAktifligi);
		$this->bakiye = $bakiye;
		$this->kritikBakiye = $kritikBakiye;
	}

	public function getBakiye() {
		return $this->bakiye;
	}

	public function setBakiye($bakiye) {
		$this->bakiye = $bakiye;
	}

	public function getKritikBakiye() {
		return $this->kritikBakiye;
	}

	public function setKritikBakiye($kritikBakiye) {
		$this->kritikBakiye = $kritikBakiye;
	}

}

?>