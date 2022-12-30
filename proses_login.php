<!DOCTYPE html>
<html lang="en">
<head>
<title>e-ST</title>
<link rel="icon" href="././assets/img/brand/favicon.png" type="image/png">
</head>
<body>
    <script src="././assets/js/sweetalert.min.js"></script>
</body>
</html>

<?php 
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo "<script>
    swal({
        title: 'Login Success',
        text: 'Sistem Akan Mengarahkan Selama 2 Detik...',
        icon: 'success',
        timer: 2000,
        buttons: false,
    })
    .then(() => {
        window.location = 'dashboard.php';
    })
    </script>";
	
}else{
    echo "<script>
    swal({
        title: 'Login Gagal',
        text: 'Username dan Password Salah...!',
        icon: 'error',
        timer: 2000,
        buttons: false,
    })
    .then(() => {
        window.location = 'login.php';
    })
    </script>";

}
?>