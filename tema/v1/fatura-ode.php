<div class="faturaOde" >
  <h4 id="baslik">Fatura Öde</h4>
    <div class="bakiye">
    <h6 id="kalan"> 3 Aylık Fatura Geçmişi</h6>
  </div>
    <form>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Ay/Yıl</th>
        <th>Tutar</th>
        <th>Ödendi Bilgisi</th>
        <th>Son Ödeme Tarihi</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>04/2018</td>
        <td>25.45 TL</td>
        <td>Ödenmedi</td>
        <td>08/05/2018</td>
      </tr>
      <tr>
       <td>03/2018</td>
        <td>26.12 TL</td>
        <td>Ödendi</td>
        <td>08/04/2018</td>
      </tr>
      <tr>
         <td>02/2018</td>
        <td>32.43 TL</td>
        <td>Ödendi</td>
        <td>08/03/2018</td>
      </tr>
    </tbody>
  </table>
    </form>

    <div class="OdemeYap">
    <h6 id="kalan">Ödememiş Faturaları Öde</h6>

     <div class="row-2">
        <label  class="colums">Toplam Borç</label>
          <input type="text" name="card" value="25.45 TL" disabled>
          </div> 
           <div class="row-2">
        <label  class="colums">Kart No</label>
          <input type="text" name="card">
          </div>     
               <div class="row-2">
        <label  class="colums">Kartın Üstünde Yazan Ad/Soyad</label>
          <input type="text" name="card">
          </div>     
                   <div class="row-2">
        <label class="colums">Geçerlik Süresi</label>
          <input type="month" name="ay"> 
        </div> 
          <div class="row-2">
          <label class="colums"> Güvenlik Numarası</label>
          <input type="text" name="security_code">
        </div> 
    
    <div class="checked">
       <input type="checkbox" id="checkbox">Bu kartı kullanarak bundan sonraki faturaları otomatik öde.
    </div>
        <div class="row-2">
          <button class="gonder"> Faturaları Öde</button>
            
  </div>
</div>