<?php

// yönlendirme fonksiyonu
function Yonlendir($url,$zaman = 0){
	if($zaman != 0){
		header("Refresh: $zaman; url=$url");
	}
	else header("Location: $url");
}

Yonlendir("https://www.google.com/maps/@39.0876459,35.1777724,6z");

?>
