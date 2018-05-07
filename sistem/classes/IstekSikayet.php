<?php
	class IstekSikayet {
	protected $id; //int
	protected $message; //String
	protected $gonderilmeZamani; //Date
	function __construct($id,$message,$gonderilmeZamani) {
		$this->id = $id;
		$this->message = $message;
		$this->gonderilmeZamani = $gonderilmeZamani;
	}

	public function getId() {
		return $this->id;
	}

	public function getMessage() {
		return $this->message;
	}

	public function getGonderilmeZamani() {
		return $this->gonderilmeZamani;
	}

}
?>