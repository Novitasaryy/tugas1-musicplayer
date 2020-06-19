<?php 

// Kalau login error tampilkan notifikasi
if (isset($_SESSION['login_error'])) {
	echo '<p style="color:red">Login Tidak Ditemukan!</p>';
	unset($_SESSION['login_error']);
}

// Kalau sesi user_name ada, redirect
if (isset($_SESSION['user_name'])) {	
	header("location:dashboard.php"); 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/login.css">
</head>
<body>
	<div class="wrap">
        <div class="judul">
            <center>LOGIN</center>
        </div>

        <div class="content">
            <form action="index_proses.php" method="POST">
            <input type="text" name="user_name" placeholder="Isi Username" required="" autocomplete="off">
            <input type="password" name="user_password" placeholder="Isi Password" required="" autocomplete="off">
            <div class="right">
            	<input type="submit" name="btn-login" value="LOGIN"></button>
            	<input type="reset" name="btn-login" value="RESET"></button>
            </div>
            <div class="clear"></div>
            </form>
        </div>
    </div>
</body>
</html>