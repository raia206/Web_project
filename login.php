<?php
$host='localhost';
$user='root';
$db_lo='login';
$conn=mysqli_connect($host,$user,'', $db_lo);

if ($conn) {

    $email = trim(strip_tags($_POST["adm_email"]));
    $password = trim(strip_tags($_POST["adm_password"]));

    $sql = "SELECT * FROM `signup` WHERE `Email` = '$email' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    //$count = mysqli_num_rows($select_email);
//    $found_email_count = $select_email->rowCount();
    if ($count == 1) {
        //$found_email = $result->fetch();
        $found_email = mysqli_fetch_assoc($result);
        $hash = $found_email["password"];
        $uid = $found_email["id"];
        if($uid==1)
        {
            $_SESSION["userID"] = $uid;
            header("location: dashboard.php");
        }

    } else {
        header("location: index.php?error=1");
    }
}else
{

}
?>