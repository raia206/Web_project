<?php
require("isAuth.php");

$host='localhost';
$user='root';
$db_lo='login';
$conn=mysqli_connect($host,$user,'', $db_lo);

if ($conn) {
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `product` WHERE id = '$id'";
    $run = mysqli_query($conn,$query);
    if ($run) {
        $query = "DELETE FROM `images` WHERE product_id = '$id'";
        $run = mysqli_query($conn,$query);
if($run){
    header('location:practicetable.php');
}
    }
    }else{
        echo "Error: ".mysqli_error($conn);
    }
}
?>