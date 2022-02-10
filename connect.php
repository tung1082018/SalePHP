<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "banhangonline";

$connect =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect) {
   mysqli_query($connect,"SET NAMES'UTF8'");
   echo "kết nối không thành công";
}
else {
 echo"";
}
?>
