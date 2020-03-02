<?php
include('../session.php'); 
include('../connection.php');

$msg='';
if(isset($_POST["submit"])){

    if(empty($_POST["title"]) || empty($_POST["myEditor"])){

        echo "Both fields are required.";

    }else{

        $title=$_POST['title'];
        $content=$_POST['myEditor'];
        $mail = $_SESSION['username'];
        $datat='Text';
         
        $query = "INSERT INTO upload(title,content,user_mail,datat) VALUES ('$title','$content','$mail','$datat')";
        $result = mysqli_query($conn,$query);
        
        if($result){
             echo "<script>window.location = 'index.php'</script>";
        }
        else{
            $msg = "<div class='alert alert-icon alert-white alert-danger alert-dismissible fade in' role='alert'>
		<button type='button' class='close' data-dismiss='alert'
		aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		<i class='mdi mdi-block-helper'></i>
		<strong>Error ! </strong> Unknown Username and password.
		</div>" .$title .$content .$mail .$datat;
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
    <meta name="author" content=" =">
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
	
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  
  <!-- Your custom styles -->
  <link href="css/custom.css" rel="stylesheet"> 
	<style>  
.colors {
  padding: 2em; 
  display: none;
}
.red {
  background: #f8f8f8;
} 
.yellow {
  color: #000;
  background: #f8f8f8;
} 
.blue {
  background: #f8f8f8;
}
 </style>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a href="#"><img src="img/pelh.png" width="90" height="70" data-retina="true" alt="logo-pelh"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">  
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-user"></i>Account</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <br><br>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">New Upload</li>
      </ol>
      
      
		<!-- Example DataTables Card-->
		<div class="row"> 
		       <div class="col-lg-4">
		           <div class='message'>
                     <?php if ($msg != "") echo $msg . "<br>" ?>
                       </div>
		           
		                   	<label class="input_label">
						      <span class="input__label-content">Content Type</span>
					</label>
		                 
					<span class="input"> 
					<select id="selectContent" name="cd-dropdown" class="form-control input_field">
					<option value="" selected>Choose content</option>
                    <option value="red">Text</option>
                    <option value="yellow"> Audio</option>
                    <option value="blue">Video </option> 
                    </select>
					
					</span> 
			 
		       </div> 
		       </div>
		       <div class="row">
		           <div class="col-lg-7">
                  <div class="output">
                  <div id="red" class="colors red"> 
                  <form action="upload.php" method="POST">
                    <div class="form-group">
                       <label class="input_label">
						<span class="input__label-content">Title</span>
					</label>
					<span class="input">
					<input class="form-control" type="text" autocomplete="off" name="title" required> 
				    </div>
				    <div class="form-group">
                      <textarea id="myEditor" name="myEditor"></textarea>
				    </div>
				    <div class="form-group">
				        <input type="submit" class="btn_1 medium" value="submit" name="submit">
				    </div>
				  </form>
                  </div>
                  <div id="yellow" class="colors yellow"> “Art is the lie that enables us to realize the truth” Pablo Picasso</div>
                  <div id="blue" class="colors blue"> “If I don't have red, I use blue” Pablo Picasso</div>
                </div>
                </div>
		</div>
      
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>© 2020 euwimana - lkazenga - mmugisha - sylviaa</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="vendor/jquery.selectbox-0.2.js"></script>
	<script src="vendor/retina-replace.min.js"></script>
	<script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	<!-- Custom scripts for this page-->
    <script src="js/admin-datatables.js"></script>
    <script>
            $(function() {
          $('#selectContent').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
          });
        });
</script>
	<script src="ckeditor/ckeditor.js"></script>
	<script>
	    ClassicEditor.create(document.getElementById('myEditor'));
	</script>
</body>
</html>