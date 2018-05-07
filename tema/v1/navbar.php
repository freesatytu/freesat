<!--Start of NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo URL ?>">FreeSAT Online İşlemler</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
			if (session("login")) {
		?>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tarife ve Paket İşlemler </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=tarife">Tarifeler</a> 
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=paket">Paketler</a>
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=kendin-yap">Kendin Yap</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lira İşlemleri </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=lira-yukle">Lira Yükle</a>
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=lira-gonder">Lira Gönder</a>
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=fatura-ode">Fatura Öde</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL."/index.php"; ?>?do=hat-islemleri" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false"> Hat İşlemleri </a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> SMS/ Çağrı İşlemleri </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=sms-islemleri">SMS İşlemleri</a>
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=servis-islemleri">Servis İşlemleri</a>
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=numara-engelleme">Numara Engelleme</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kişisel İşlemler </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=rehber">Rehber</a>
						<a class="dropdown-item" href="<?php echo URL."/index.php"; ?>?do=istek-sikayet">İstek / Şikayet</a>
					</div>
                </li>
				<button type="button" class="btn btn-default btn-sm" onclick="window.location.href='<?php echo URL."/index.php?do=cikis"; ?>'">
                    <span class="glyphicon glyphicon-log-out"></span> 
                    Çıkış Yap
                </button>
			</ul>
		</div>
		<?php } ?>
	</nav>
    <!--End of NavBar -->
    