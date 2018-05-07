<?php
	class KisiselIslemler {
	private $kullanici;
	
	function __construct($kullanici) {
		$this->kullanici = $kullanici;
	}
	
	public function getRehberKayitlari() {
		return null;
	}
	
	public function rehbereKayitEkle($rehberKaydiID, $adSoyad, $telefonNo) {
		
	}
	
	public function rehberKaydiDuzenle($rehberKaydiID, $adSoyad, $telefonNo) {
		
	}
	
	public function rehberKaydiSil($rehberKaydiID) {
		
	}
	
	public function istekSikayetGonder($mesaj) {
		
	}
}
?>