<?php

// yönlendirme fonksiyonu
function Yonlendir($url,$zaman = 0){
	if($zaman != 0){
		header("Refresh: $zaman; url=$url");
	}
	else header("Location: $url");
}

Yonlendir("https://www.turktelekom.com.tr/destek/Sayfalar/iletisim.aspx");

?>
