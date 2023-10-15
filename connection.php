<?php
$host='localhost';
$user='root';
$db_lo='login';
$conn=mysqli_connect($host,$user,'', $db_lo);

if ($conn) {
    // echo "Connection successfully";
}else{
     echo "Something Error";
}

?>
