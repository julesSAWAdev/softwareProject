<!DOCTYPE html>
<?php
include("connection.php");  
$msg = "";

if(isset($_POST["submit"])){
if($_POST["pwd1"] != $_POST["pwd2"]){
     $msg = "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
		<button type='button' class='close' data-dismiss='alert'
		aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		<i class='mdi mdi-block-helper'></i>
		<strong>Error passwords don't match! </strong> Check Password.
		</div>";
}else{
    if(empty($_POST["pwd1"]) || empty($_POST["email"])){

        $msg = "<div class='alert alert-icon alert-white alert-warning alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert'
	aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	<i class='mdi mdi-alert'></i>
	<strong>Error !</strong> Please fill all the fields.
	</div>";

    }else{


        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['email'];
        $password=$_POST['pwd1'];
        $repass=$_POST['pwd2'];
        if ($password != $repass) {
             $msg = "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
		<button type='button' class='close' data-dismiss='alert'
		aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		<i class='mdi mdi-block-helper'></i>
		<strong>Error password don't match! </strong> Check Password.
		</div>";
        }else{
        $sql ="SELECT * FROM users_tbl WHERE email ='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) { 
          $msg = "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
		<button type='button' class='close' data-dismiss='alert'
		aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		<i class='mdi mdi-block-helper'></i>
		<strong>Error ! </strong> User Exist.
		</div>";
        }else{
         
        //$que = "INSERT INTO users_tbl(user_id,fname,lname,email,passwords) VALUES (NULL,'$fname','$lname',$username','$password')"; 
        $quer = "INSERT INTO `users_tbl`(`user_id`, `fname`, `lname`, `email`, `passwords`) VALUES (NULL,'$fname','$lname','$username','$password')";
        $res = mysqli_query($conn, $quer);
        
        if($res){
           echo "<script>window.location = 'index.php'</script>"; 
            }else{

                $msg = "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
        <button type='button' class='close' data-dismiss='alert'
        aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        <i class='mdi mdi-block-helper'></i>
        <strong>Error !</strong> An Error occured.
        </div>" ;

            }
            
        } 
    }
    }
}
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pelh is an educational helper tool">
    <meta name="author" content="Ansonika">
    <title>PELH | Personal Helper</title>

    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <link href="plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    

</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="#"><img src="img/pelh.png" width="90" height="70" data-retina="true" alt=""></a>
			</figure>
			<form autocomplete="off" action="register.php" method="POST">
			    <div class='message'>
                                        <?php if ($msg != "") echo $msg . "<br>" ?>
                                        </div>
				<div class="form-group">

					<span class="input">
					<input class="input_field" type="text" name ="fname">
						<label class="input_label">
						<span class="input__label-content">Your Name</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text"  name ="lname">
						<label class="input_label">
						<span class="input__label-content">Your Last Name</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email"  name ="email">
						<label class="input_label">
						<span class="input__label-content">Your Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password1" name="pwd1">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password2"  name ="pwd2">
						<label class="input_label">
						<span class="input__label-content">Confirm password</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<input type="submit" class="btn_1 rounded full-width add_top_30" value="Register to Pelh" name="submit"/>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="index.php">Sign In</a></strong></div>
			</form>
			<div class="copy">© 2020 euwimana - lkazenga - mmugisha - sylviaa</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
  
</body>
</html>