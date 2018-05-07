<?php 
class Kullanici
{
    protected $id; // int
    protected $adSoyad; // String
    protected $telefonNo; // String
    protected $hatAktifligi; // boolean
    protected $rehber; // RehberKaydi
    protected $engelliNumaralar; // EngelliNumara
    protected $harcamakurallari; // Harcamakurali
    protected $istekSikayet; // IstekSikayet
    protected $smsListesi; // SMS
    public function __construct($id, $adSoyad, $telefonNo, $hatAktifligi) // (int id, String adSoyad, String telefonNo, boolean hatAktifligi]

    {
        $this->id = $id;
        $this->adSoyad = $adSoyad;
        $this->telefonNo = $telefonNo;
        $this->hatAktifligi = $hatAktifligi;
    }
    public function getEngelliNumaralar()
    {
        return $this->engelliNumaralar;
    }
    public function setEngelliNumaralar($engelliNumaralar) // [EngelliNumara[] engelli Numaralar]

    {
        $this->engelliNumaralar = $engelliNumaralar;
    }
    public function getRehber()
    {
        return $this->rehber;
    }
    public function setRehber($rehber)
    { // [RehberKaydi[] rehber]
        $this->rehber = $rehber;
    }
    public function getTelefonNo()
    {
        return $this->telefonNo;
    }
    public function setTelefonNo($telefonNo)
    { // [String telefonNo]
        $this->telefonNo = $telefonNo;
    }
    public function isHatAktifligi()
    {
        return $this->hatAktifligi;
    }
    public function setHatAktifligi($hatAktifligi)
    { // [boolean hatAktifligi]
        $this->hatAktifligi = $hatAktifligi;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAdSoyad()
    {
        return $this->adSoyad;
    }
    public function getHarcamakurallari()
    {
        return $this->harcamakurallari;
    }
    public function setHarcamakurallari($harcamakurallari)
    { // [Harcamakurali[] harcamakurallari]
        $this->harcamakurallari = $harcamakurallari;
    }
    public function getIstekSikayet()
    {
        return $this->istekSikayet;
    }
    public function setIstekSikayet($SistekSikayet)
    { // [IstekSikayet istekSikayet]
        $this->istekSikayet = $istekSikayet;
    }
    public function getSmsListesi()
    {
        return $this->smsListesi;
    }
    public function setSmsListesi($smsListesi)
    { // [SMS smsListesi[]]
        $this->smsListesi = $smsListesi;
    }
}
