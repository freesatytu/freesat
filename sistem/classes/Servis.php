<?php
	class Servis {
	protected $id; // servisin kullanıcıdaki halini belirten id
	protected $servisID; // servisin türünü belirten id
	private $durum; // boolean

	function __construct($id,$servisID,$durum) {
		$this->id = $id;
		$this->servisID = $servisID;
		$this->durum = $durum;
	}

	public function isDurum() {
		return $this->durum;
	}

	public function setDurum($durum) {
		$this->durum = $durum;
	}

	public function getId() {
		return $this->id;
	}
	
	public function getServisID() {
		return $this->servisID;
	}

}
?>