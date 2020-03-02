<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    
      echo "<script>window.location = 'index.php'</script>";
    }

?>