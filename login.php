<?php

require 'function.php';
    // cek login terdaftar apa tidak 
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // mencocokan data antara database dengan inputan user
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
    // hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

   if($hitung>0){
    $_SESSION['log']= 'true';
    header('location:index.php');
   } else {
    header('location:login.php');
   };
};
if(!isset($_SESSION['log'])){

} else {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi barang</title>
	<link rel="stylesheet" type="text/css" href="css/style_login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="background" src="img/background.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome Billy</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password">
            	   </div>
            	</div>
            	
            	<button class="btn btn-primary" name='login'>Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

