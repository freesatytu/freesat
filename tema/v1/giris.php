<!-- <center>
    <div class="giris">
        <form style="border: 1px; margin: 20px;" id="giris-form1" onsubmit="return false;">
            <div class="table-responsive-sm">
                <h3 id="baslik">Giriş Yap</h3>
                <label id="tel_no">Telefon Numarası:</label>
                <input id="number" type="text" name="telefon"><br><br>
                <button id="btn_giris" name="tip" value="giris_tel_no">Devam Et</button>
            </div>
        </form>
        <form style="border: 1px; margin: 20px;" id="giris-form2" onsubmit="return false;">
            <div class="table-responsive-sm">
                <h3 id="baslik">Giriş Yap</h3>
                <label id="tel_no">Şifre:</label>
                <input id="number" type="password" name="sifre"><br><br>
                <button id="btn_sif" name="tip" value="giris_sifre">Giriş Yap</button>
            </div>
        </form>
    </div>
    <div class="alert alert-success" id="giris-form-success">
        <p id="alert_success"><p>
    </div>
    <div class="alert alert-danger" id="giris-form-error">
 	    <p id="alert_failed"></p>
    </div>
</center> -->

<div style="border: 1px; margin: 20px;">
    <div class="table-responsive-sm">
        <h3>Giriş Yap</h3>
        <form id="giris-form1">
        <div id="giris-1ekran">
            Telefon Numarası: <input type="text" name="telefon"><br><br>
            <input type="hidden" name="tip" value="giris_tel_no">
            <input type="submit" value="Devam Et" id="giris_tel">
        </div>
        </form>
        <form id="giris-form2">
        <div id="giris-2ekran">
            Şifre: <input type="password" name="sifre"><br><br>
            <input type="hidden" name="tip" value="giris_sifre">
            <input type="submit" value="Giriş Yap" id="giris_sif">
        </div>
        </form>
    </div>
</div>
<div class="alert alert-success" id="giris-form-success">

</div>
<div class="alert alert-danger" id="giris-form-error">

</div>
