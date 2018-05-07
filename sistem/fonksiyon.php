<?php

	function p($par){
		return htmlspecialchars(addslashes(trim($_POST[$par])));
	}
	
	function g($par){
		if (isset($_GET[$par])) {
			return strip_tags(trim(addslashes($_GET[$par])));
		}
	}
	
	function go($par, $time = 0){
		if ($time == 0) {
			header("Location: {$par}");
		} else {
			header("Refresh: {$time};url={$par}");
		}
	}
	
	function ss($par){
		return stripslashes($par);
	}
	
	function session($par){
		if (isset($_SESSION[$par])) {
			return $_SESSION[$par];
		} else {
			return false;
		}
	}
	
	function session_olustur($key, $value) {
		$_SESSION[$key] = $value;
	}
		
	function query($query){
		return $db->query($query);
	}
	
?>