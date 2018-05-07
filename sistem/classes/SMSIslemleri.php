<?php
	class SMSIslemleri {
	protected $kullanici;

	function __construct ($kullanici) {
		$this->kullanici = $kullanici;
	}
	
	public function mesajGonder($mesaj, $telefonNo) {
		
	}
	
	public function mesajGecmisiniAl() { // SMS[]
		return null;
	}
}
?>