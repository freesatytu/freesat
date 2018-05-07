<!DOCTYPE html>
<html lang="en">
<head>
	<?php tdk();?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Custom JS and CSS -->
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/style.css"; ?>">
	<script src="<?php echo URL."/sistem.js"; ?>"></script>
	<?php if (g('do') == 'fatura-ode') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/fatura_ode.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'lira-yukle') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/lira-yukle.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'lira-gonder') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/lira-gonder.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'sms-islemleri') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/mesaj.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'servis-islemleri') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/servis.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'numara-engelleme') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/engelle.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'rehber') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/rehber.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'istek-sikayet') {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/sikayet.css" ?>">
	<?php } ?>
	<?php if (g('do') == 'hat-kapatma' || g('do') == 'numara-degisikligi' || g('do') == "kayip-hat-bildir") {?>
	<link rel="stylesheet" href="<?php echo TEMA_URL."/css/hat.css" ?>">
	<?php } ?>
</head>
<body>
	<?php 
		require TEMA."/navbar.php"; 
	?>

	<?php
		tema_icerik();
	?>

</body>
</html>
