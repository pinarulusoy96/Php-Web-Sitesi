<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
        
        <link rel="stylesheet" href="anasayfa.css" />
        <style type="text/css">

body{background-image:url(https://img.webme.com/pic/c/cunobag/arka11.jpg);background-attachment: fixed} 

</style>
    </head>
    <body>
        
        <nav>
            <ul class="fancyNav">
                <li id="news"><a href="hakkimizda.php">Hakkımızda</a></li>
                <li id="konu"><a href="konular.php">Konular</a></li>
                <li id="contact"><a href="iletisim.php">İletişim</a></li>
            </ul>
        </nav>
		<form action="index.php" method="post">
			<div class="inner_container">
                <button class="logout_button">Çıkış Yap</button>
			</div>
		</form>
	</div>

    </body>
</html>
