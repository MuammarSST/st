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
session_start();
session_destroy();
echo "<script>
    swal({
        title: 'Logout Success',
        text: 'Sistem Akan Mengarahkan Selama 2 Detik...',
        icon: 'success',
        timer: 2000,
        buttons: false,
    })
    .then(() => {
        window.location = 'login.php';
    })
    </script>";
?>