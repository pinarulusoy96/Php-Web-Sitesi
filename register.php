<?php
	session_start();
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Kaydolma Sayfası</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Kayıt Formu</h2></center>
		<form action="register.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/indir.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>Kullanıcı Adı</b></label>
				<input type="text" placeholder="Kullanıcı adı girin" name="username" required>
				<label><b>Şifre</b></label>
				<input type="password" placeholder="Şifre girin" name="password" required>
				<label><b>Şifreyi Onayla</b></label>
				<input type="password" placeholder="Şifre girin" name="cpassword" required>
				<button name="register" class="sign_up_btn" type="submit">Kayıt Ol</button>
				
				<a href="index.php"><button type="button" class="back_btn"><< Girişe Dön</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from users where username='$username'";
					
				$query_run = mysqli_query($con,$query);
			
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("Bu kullanıcı adı zaten var .. Lütfen başka bir kullanıcı adı deneyin!")</script>';
						}
						else
						{
							$query = "insert into users values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Kullanıcı Kayıtlı .. Hoşgeldiniz")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: tekrargiris.php");
							}


							else
							{
								echo '<p class="bg-danger msg-block">Kayıt Sunucu hatası nedeniyle başarısız oldu. Lütfen daha sonra tekrar deneyin</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("Veritabanı Hatası")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Şifre ve Şifreyi Onayla eşleşmiyor")</script>';
				}
				
			}
		?>
	</div>
</body>
</html>
