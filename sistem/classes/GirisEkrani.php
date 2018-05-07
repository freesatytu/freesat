<?php
class GirisEkrani
{
    protected $sifre;
    protected $kullanici;

    public function getKullanici()
    {
        return $this->kullanici;
    }

    /**
     * telefonNo'ya sahip bir kullanıcıyı veri tabanında arar. Bulursa atamayı yapar ve true döndürür. Bulamazsa false döndürür.
     * Kullanıcıyı bulursa yaptığı atama kullanıcı türüne göre nesne oluşturularak yapılır.
     */
    public function setKullanici($telefonNo)
    {
        global $db;
        $sorgu = $db->query("SELECT * FROM kullanici WHERE telefonNo='".$telefonNo."'")->fetch(PDO::FETCH_ASSOC);
		if (is_array($sorgu)) {
			if ($sorgu["faturali"] == 0) {
				$sorgu_faturasiz = $db->query("SELECT * FROM faturasiz_kullanici WHERE kullanici_id='".$sorgu["id"]."'")->fetch(PDO::FETCH_ASSOC);
                $this->kullanici = new FaturasizKullanici($sorgu["id"], $sorgu["adSoyad"], $sorgu["telefonNo"], $sorgu["hatAktifligi"], $sorgu_faturasiz["bakiye"], $sorgu_faturasiz["kritik_bakiye"]);
                session_olustur("Kullanici__bakiye", $sorgu_faturasiz["bakiye"]);
                session_olustur("Kullanici__kritik_bakiye", $sorgu_faturasiz["kritik_bakiye"]);
			} else {
                $this->kullanici = new FaturaliKullanici($sorgu["id"], $sorgu["adSoyad"], $sorgu["telefonNo"], $sorgu["hatAktifligi"]);
            }
            session_olustur("Kullanici__id", $sorgu["id"]);
            session_olustur("Kullanici__adSoyad", $sorgu["adSoyad"]);
            session_olustur("Kullanici__telefonNo", $sorgu["telefonNo"]);
            session_olustur("Kullanici__hatAktifligi", $sorgu["hatAktifligi"]);
            session_olustur("Kullanici__faturali", $sorgu["faturali"]);

			$this->setSifre();
            $yeni_sms = $db->prepare("INSERT INTO sms set gonderen_kullanici_id = ?, gonderilen_kullanici_id = ?, mesaj = ?");
            $gonder = $yeni_sms->execute([
                1, $sorgu["id"], $this->sifre
            ]);

            session_olustur("giris_sifre", $this->sifre);

			return true;
		} else {
			return false;
		}
    }

    public function getSifre()
    {
        return $this->sifre;
    }

    /**
     * Şifre üretir. Ürettiği şifreyi kullanıcıya sms olarak gönderir.
     */
    public function setSifre()
    {
        $this->sifre = rand(100, 10000000);
    }

}
