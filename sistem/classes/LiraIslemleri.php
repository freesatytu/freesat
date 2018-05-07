<?php
	class LiraIslemleri {
	protected $kullanici;

	function __construct($kullanici) {
		$this->kullanici = $kullanici;
	}

	/**
	 * @return Kullanıcı faturasız ise kalan bakiyeyi, değilse -1 döndürür.
	 */
	public function getKalanBakiye() {
		return 0;
	}

	public function liraGonder($tutar, $telefonNo) {
		return 0;
	}

	public function liraYukle($tutar) {

	}
	
	public function getSonUcFatura() {
		return null;
	}
	
	/**
	 * otomatik ödeme true ise banka kartının bilgileri veri tabanına kaydedilir.
	 * @param bankaKarti
	 * @param otomatikOdeme
	 */
	public function faturaOde($bankaKarti, $otomatikOdeme) {
		
	}
	
	public function bankaKartiBilgisiniTemizle() {
		
	}
	
	

}
?>