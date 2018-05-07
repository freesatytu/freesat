<?php

	require_once "ayar.php";
	
	global $_main;
	global $_giris_ekrani;

	if (p("tip")) {
		
		$response = [];

		$tip = p("tip");
			
		Switch($tip) {
			case "giris_tel_no":
				$telefon = p("telefon");
				if (empty($telefon)) {
					$response["error"] = "Giriş yapabilmek için telefon numaranızı girmelisiniz.";
				} else if (strlen($telefon) > L_TELEFON_NO) {
					$response["error"] = "Geçersiz telefon numarası girdiniz.";
				} else if (!($_main->getGirisEkrani()->setKullanici($telefon))) {
					$response["error"] = "Girdiğiniz numaraya sahip bir kullanıcı bulunmamaktadır.";
				} else {
					$response["success"] = "Lütfen telefon numaranıza gönderdiğimiz şifreyi giriniz.";
				}
				break;
			case "giris_sifre":
				$sifre = p("sifre");
				if (empty($sifre)) {
					$response["error"] = "Lütfen şifre kutusunu doldurarak gönderiniz.";
				} else {
					$gercek_sifre = session("giris_sifre");
									
					if ($gercek_sifre == $sifre) {
						$response["success"] = "Şifreyi doğru girdiniz, sisteme yönlendiriliyorsunuz.";
						session_olustur("login", true);
						$kullanici;
						if (session("Kullanici__faturali") == 1) {
							$kullanici = new FaturaliKullanici(session("Kullanici__id"), session("Kullanici__adSoyad"), session("Kullanici__telefonNo"), session("Kullanici__hatAktifligi"));
						} else {
							$kullanici = new FaturasizKullanici(session("Kullanici__id"), session("Kullanici__adSoyad"), session("Kullanici__telefonNo"), session("Kullanici__hatAktifligi"), session("Kullanici__bakiye"), session("Kullanici__kritik_bakiye"));
						}
					} else {
						$response["error"] = "Yanlış şifre, lütfen gönderdiğimiz SMS'teki şifreyi kontrol edip yeniden deneyiniz.";
					}
				}
				break;
		}
		
		echo json_encode($response);
	}
	
?>