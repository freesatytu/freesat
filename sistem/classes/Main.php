<?php class Main
{
    protected $oturum; // boolean
    protected $kullanici; // Kullanici
    protected $girisEkrani; // GirisEkrani
    protected $tarifePaket; // TarifePaketIslemleri
    protected $liraislemleri; // LiraIslemleri
    protected $hatIslemleri; // HatIslemleri
    protected $smsislemleri; // SMSIslemleri
    protected $numaraEngellemeIslemleri; // NumaraEngellemeIslemleri
    protected $servisislemleri; // Servisislemleri
    protected $kisiselIslemler; // KisiselIslemler
    public function __construct()
    {
        
    }
    public function getNumaraEngellemeIslemleri()
    {
        return $this->numaraEngellemeIslemleri;
    }
    public function setNumaraEngellemeIslemleri($numaraEngellemeIslemleri) // [NumaraEngellemeIslemleri numaraEngellemeIslemleri]

    {
        $this->numaraEngellemeIslemleri = $numaraEngellemeIslemleri;
    }
    public function getServisIslemleri()
    {
        return $this->servisIslemleri;
    }
    public function setServisislemleri($servisislemleri) // [Servisislemleri servisislemleri]

    {
        $this->servisIslemleri = $servisIslemleri;
    }
    public function getTarifePaket()
    {
        return $this->tarifePaket;
    }
    public function setTarifePaket($tarifePaket) // [TarifePaketislemleri tarifePaket]

    {
        $this->tarifePaket = $tarifePaket;
    }
    public function getLiraIslemleri()
    {
        return $this->liraIslemleri;
    }
    public function settiraIslemleri($liraIslemleri) // [Liralslemleri liralslemleri]

    {
        $this->liralslemleri = $liralslemleri;
    }
    public function getSmsIslemleri()
    {
        return $this->smsislemleri;
    }
    public function setSmsIslemleri($smsislemleri) // [SMSIslemleri smsislemleri]

    {
        $this->smsislemleri = $smsislemleri;
    }
    public function isOturum()
    {
        return $this->oturum;
    }
    public function setoturum($oturum) // [boolean oturum]

    {
        $this->oturum = $oturum;
    }
    public function getKullanici()
    {
        return $this->kullanici;
    }
    public function setKullanici($kullanici) // [Kullanici kullanici]

    {
        $this->kullanici = $kullanici;
    }
    public function getGirisEkrani()
    {
        return $this->girisEkrani;
    }
    public function setGirisEkrani($girisEkrani) // [GirisEkrani girisekrani]

    {
        $this->girisEkrani = $girisEkrani;
    }
    public function getTarifePaketEkrani()
    {
        return $this->tarifePaket;
    }
    public function setTarifePaketEkrani($tarifePaketEkrani) // [TarifePaketIslemleri tarifePaketEkrani]

    {
        $this->tarifePaket = $tarifePaketEkrani;
    }
    public function getLiraIslemleriEkrani()
    {
        return $this->liraIslemleri;
    }
    public function setLiraIslemleriEkrani($liraIslemleriEkrani) // [Liralslemleri liralslemleriEkrani]

    {
        $this->liraIslemleri = $liralslemleriEkrani;
    }
    public function getHatIslemleri()
    {
        return $this->hatIslemleri;
    }
    public function setHatIslemleri($hatIslemleri) // [HatIslemleri hatIslemleri]
    {
        $this->hatIslemleri = $hatIslemleri;
    }
    public function getKisiselIslemler()
    {
        return $this->kisiselIslemler;
    }
    public function setKisiselIslemler($kisiselIslemler) // [KisiselIslemler KisiselIslemler]
    {
        $this->kisiselIslemler = $kisiselIslemler;
    }
}
