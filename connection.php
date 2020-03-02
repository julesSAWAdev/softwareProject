<?php
 

    $host="localhost";
    $user="expgrwmj_sawadev";
    $pass="julesle2020";
    $db="expgrwmj_software";

    $conn = mysqli_connect($host,$user,$pass,$db);
    if ( ! $conn->set_charset("utf8") )
{
   printf("Error loading character set utf8: %s\n", $mysqli->error);
}
?>