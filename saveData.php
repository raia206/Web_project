<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$id = $_SESSION['USER_ID'];
//echo '<script>alert('.$id.')</script>';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 10) {
        echo 'Password should be at least 10 characters in length and should include at least one upper case letter, one number, and one special character.';
    } else {
        try {

            //echo '<script>alert('.$name.')</script>';
// Connect to the database
            $host = 'localhost';
            $user = 'root';
            $db_lo = 'login';
            $conn = mysqli_connect($host, $user, '', $db_lo);

            if ($conn) {

                // echo "Connection successfully";
                // Prepare the SQL statement and execute it
                $update = mysqli_query($conn, "UPDATE `signup` SET `Name`='$name' ,`Email`= '$email',`Pass`='$pass'   WHERE `id`= '$id' ");
                if ($update) {
                    echo"New Update Was Completed Successfully 🙂";
                    //echo "New Update Was Completed Successfully";
                } else {
                    echo "Error: " . $update . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);


            } else {
                die("Connection failed: " . mysqli_connect_error());
            }
        } catch (Exception $e) {

        }
    }
}
else
    {
        echo "Sorry! Invalid Email Or Password Format! 🙁<br>";
      //  echo "Sorry! Invalid Email Or Password Format!<br>";
    }

?>
