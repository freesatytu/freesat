<?php

## TITLE - DESCRIPTION - KEYWORD Fonksiyonu ##
function tdk()
{
    $do = g("do");
    switch ($do) {

        case "tarife":
            $title = "Tarifeler";
            $desc = "Bu sayfayı kullanarak tarifeleri etkinleştirebilir / devre dışı bırakabilirsiniz.";
            $keyw = "tarife, islem";
            break;

        case "paket":
            $title = "Paketler";
            $desc = "Bu sayfayı kullanarak paketleri etkinleştirebilir / devre dışı bırakabilirsiniz.";
            $keyw = "paket, islem";
            break;

        case "kendin-yap":
            $title = "Kendin Yap";
            $desc = "Bu sayfayı kullanarak kendi tarifenizi oluşturabilirsiniz.";
            $keyw = "kendin, yap, tarife, islem";
            break;

        case "lira-yukle":
            $title = "Lira Yükle";
            $desc = "Bu sayfayı kullanarak hattınıza lira yükleyebilirsiniz.";
            $keyw = "lira, yukle, kontor";
            break;

        case "lira-gonder":
            $title = "Lira Gönder";
            $desc = "Bu sayfayı kullanarak kalan bakiyenizin bir kısmını başka bir faturasız hatlı kullanıcıya gönderebilirsiniz.";
            $keyw = "lira, gonder, kontor";
            break;

        case "fatura-ode":
            $title = "Fatura Öde";
            $desc = "Bu sayfayı kullanarak fatura ödeme işlemi yapabilirsiniz.";
            $keyw = "fatura, odeme";
            break;

        case "hat-islemleri":
            $title = "Kayıp Hat Bildir";
            $desc = "Bu sayfayı kullanarak hattınız kayıp olduğunu bildirebilirsiniz.";
            $keyw = "kayip, hat";
            break;

        case "sms-islemleri":
            $title = "SMS İşlemleri";
            $desc = "Bu sayfayı kullanarak SMS gönderebilirsiniz, mesajlaşma geçmişinizi inceleyebilirsiniz.";
            $keyw = "sms, gonder, gecmis";
            break;

        case "servis-islemleri":
            $title = "Servis İşlemleri";
            $desc = "Bu sayfayı kullanarak istediğiniz servisleri etkinleştirip devre dışı bırakabilirsiniz.";
            $keyw = "servis, islem";
            break;

        case "numara-engelleme":
            $title = "Numara Engelleme";
            $desc = "Bu sayfayı kullanarak istediğiniz numaraları engelleyebilir / engellerini kaldırabilirsiniz.";
            $keyw = "numara, engelleme";
            break;

        case "rehber":
            $title = "Rehber";
            $desc = "Bu sayfayı kullanarak rehber tutabilirsiniz.";
            $keyw = "rehber";
            break;

        case "istek-sikayet":
            $title = "İstek / Şikayet";
            $desc = "Bu sayfayı kullanarak bize istek / şikayet gönderebilirsiniz.";
            $keyw = "istek, şikayet";
            break;

        default:
            if (session("login")) {
                if (!g("do")) {
                    $title = ss(SITE_TITLE);
                    $desc = ss(SITE_DESC);
                    $keyw = ss(SITE_KEYW);
                } else {
                    $title = ss(SITE_TITLE) . " - Sayfa Bulunamadı";
                    $desc = "Sayfa bulunamadı.";
                    $keyw = "sayfa, bulunamadı";
                }
            } else {
                $title = "Giriş Yap";
                $desc = "Bu sayfayı kullanarak sisteme giriş yapabilirsiniz.";
                $keyw = "giris";
            }
            break;
    }
    echo "<title>" . strip_tags($title) . "</title>
		<meta name='description' content=\"" . strip_tags($desc) . "\">
		<meta name='keywords' content=\"" . strip_tags($keyw) . "\">";
}

## Tema İçerik Fonksiyonu ##
function tema_icerik()
{
    if (session("login")) {
        $do = g("do");
        switch ($do) {
            case "tarife":
                require TEMA . "/tarife.php";
                break;

            case "paket":
                require TEMA . "/paket.php";
                break;

            case "kendin-yap":
                require TEMA . "/kendin-yap.php";
                break;

            case "lira-yukle":
                require TEMA . "/lira-yukle.php";
                break;

            case "lira-gonder":
                require TEMA . "/lira-gonder.php";
                break;

            case "fatura-ode":
                require TEMA . "/fatura-ode.php";
                break;

            case "hat-islemleri":
                require TEMA . "/hat-islemleri.php";
                break;

            case "sms-islemleri":
                require TEMA . "/sms-islemleri.php";
                break;

            case "servis-islemleri":
                require TEMA . "/servis-islemleri.php";
                break;

            case "numara-engelleme":
                require TEMA . "/numara-engelleme.php";
                break;

            case "rehber":
                require TEMA . "/rehber.php";
                break;

            case "istek-sikayet":
                require TEMA . "/istek-sikayet.php";
                break;

            case "cikis":
                $_SESSION = array();
                session_destroy();
                go(URL);

            default:
                if (session("login")) {
                    if (!g("do")) {
                        require TEMA . "/tarife.php";
                    } else {
                        require_once TEMA . "/sayfa_bulunamadi.php";
                    }
                } else {
                    require TEMA . "/giris.php";
                }

                break;
        }
    } else {
		require TEMA . "/giris.php";
    }
}
