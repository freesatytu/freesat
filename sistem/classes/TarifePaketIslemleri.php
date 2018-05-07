<?php
	class TarifePaketIslemleri {
	protected $kullanici;
	
	function __construct($kullanici) {
		$this->kullanici = $kullanici;
	}
	
	public function getKullanici() {
		return $this->kullanici;
	}
	
	public function etkinlestirilenTarifeleriSorgula() { //Tarife[]
		return null;
	}

	public function etkinlestirilmeyenTarifeleriSorgula() { //Tarife[]
		return null;
	}

	public function etkinlestirilenPaketleriSorgula() { //Paket[]
		return null;
	}

	public function etkinlestirilmeyenPaketleriSorgula() {
		return null;
	}

	public function tarifeEtkinlestir($tarifeID) {

	}

	public function tarifeDevreDisiBirak($tarifeID) {

	}

	public function paketEtkinlestir($paketID) {

	}

	public function paketDevreDisiBirak($paketID) {

	}

	public function tarifeDegeriHesapla($konusma,$sms, $internet, $gun) {
		return 0;
	}

	/**
	 * Kullanıcının verdiği parametrelere göre yeni bir tarife ve harcama kuralı
	 * tanımlar, harcama kuralını veri tabanına işler.
	 */
	public function tarifeUret($konusma,$sms,$internet, $gun) {

	}
}
?>