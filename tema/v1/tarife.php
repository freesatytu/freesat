<form style="border: 1px; margin: 20px;">
<div class="table-responsive-sm">
<h3>Sahip Olduğum tarifeler ve Kalan Miktar Durumu</h3>
<table class="table">
	<thead>
		<tr>
			<th scope="col">Tarife Adı</th>
			<th scope="col">Tutar</th>
			<th scope="col">Konuşma</th>
			<th scope="col">SMS</th>
			<th scope="col">İnternet</th>
			<th scope="col">Son Gün</th>
			<th scope="col">İşlem</th>
		</tr>
	</thead>
	<tbody>
		<?php
			global $_tarife_paket_islemleri;
			$sahip_olunan_harcama_kurallari = $_tarife_paket_islemleri->etkinlestirilenTarifeleriSorgula();
			if (count($sahip_olunan_harcama_kurallari) == 0) {
				?>
			<td colspan="5">Sahip olduğunuz tarife bulunmamaktadır.</td>
				<?php
			} else {
			foreach ($sahip_olunan_harcama_kurallari as $sahip_olunan_harcama_kurali) {
		?>
		<tr>
			<th scope="row"><?php echo $sahip_olunan_harcama_kurali->getFaturalandirmaSistemi()->getIsım(); ?></th>
			<td><?php echo $sahip_olunan_harcama_kurali->getFaturalandirmaSistemi()->getFiyat(); ?> TL</td>
			<td><?php echo $sahip_olunan_harcama_kurali->getKalanKonusma(); ?> DK</td>
			<td><?php echo $sahip_olunan_harcama_kurali->getKalanSMS(); ?> SMS</td>
			<td><?php echo $sahip_olunan_harcama_kurali->getKalanInternet(); ?> MB</td>
			<td>23/05/2018</td>
			<td>
			<button type="button" class="btn btn-outline-danger"
				onclick="cancel()" name="hk-<?php echo $sahip_olunan_harcama_kurali->getId(); ?>">İptal Et</button>
			</td>
		</tr>
			<?php }} ?>
	</tbody>
</table>
</div>

<div class="table-responsive-sm">
<h3>Diğer Tarifeler</h3>
<table class="table">
	<tr>
		<th scope="col">Tarife Adı</th>
		<th scope="col">Tutar</th>
		<th scope="col">Konuşma</th>
		<th scope="col">SMS</th>
		<th scope="col">İnternet</th>
		<th scope="col">Süre</th>
		<th scope="col">İşlem</th>
	</tr>
	<?php
		
	?>
	<tr>
		<th scope="row">Bol SMS Tarifesi</th>
		<td>30 TL</td>
		<td>1000 DK</td>
		<td>11000 SMS</td>
		<td>2 GB</td>
		<td>30 Gün</td>
		<td>
		<button type="button" class="btn btn-outline-success">Seç</button>
		</td>
	</tr>
	<tr>
		<th scope="row">Sosyal Tarife</th>
		<td>25 TL</td>
		<td>500 DK</td>
		<td>500 SMS</td>
		<td>8 GB</td>
		<td>30 Gün</td>
		<td>
		<button type="button" class="btn btn-outline-success">Seç</button>
		</td>
	</tr>
	<tr>
		<th scope="row">Babaanne Tarifesi</th>
		<td>20 TL</td>
		<td>3000 DK</td>
		<td>1000 SMS</td>
		<td>1 GB</td>
		<td>30 Gün</td>
		<td>
		<button type="button" class="btn btn-outline-success">Seç</button>
		</td>
	</tr>
</table>
</div>
</form>