<?php

    /*
        # session names
        login
        Kullanici__id
        Kullanici__adSoyad
        Kullanici__telefonNo
        Kullanici__hatAktifligi
        Kullanici__faturali
        Kullanici__bakiye
        Kullanici__kritik_bakiye
        giris_sifre
    */

    $_main = new Main();
    if (!session("login")) {
        $_giris_ekrani = new GirisEkrani();
        $_main->setGirisEkrani($_giris_ekrani);
    }
    
    $_kullanici;
    $_sms_islemleri;
    $_numara_engelleme_islemleri;
    $_hat_islemleri;
    $_servis_islemleri;
    $_tarife_paket_islemleri;
    $_lira_islemleri;
    $_kisisel_islemler;
    if (session("login")) {
        if (session("Kullanici__faturali") == 1) {
            $_kullanici = new FaturaliKullanici(session("Kullanici__id"), session("Kullanici__adSoyad"), session("Kullanici__telefonNo"), session("Kullanici__hatAktifligi"));
        } else {
            $_kullanici = new FaturasizKullanici(session("Kullanici__id"), session("Kullanici__adSoyad"), session("Kullanici__telefonNo"), session("Kullanici__hatAktifligi"), session("Kullanici__bakiye"), session("Kullanici__kritik_bakiye"));
        }
        $_sms_islemleri = new SMSIslemleri($_kullanici);
        $_numara_engelleme_islemleri = new NumaraEngellemeIslemleri($_kullanici);
        $_hat_islemleri = new HatIslemleri($_kullanici);
        $_servis_islemleri = new ServisIslemleri($_kullanici);
        $_tarife_paket_islemleri = new TarifePaketIslemleri($_kullanici);
        $_lira_islemleri = new LiraIslemleri($_kullanici);
        $_kisisel_islemler = new KisiselIslemler($_kullanici);
    }
    
?>