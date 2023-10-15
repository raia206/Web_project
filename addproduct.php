<?php
require("isAuth.php");
?>
<?php
$host='localhost';
$user='root';
$db_lo='login';
$conn=mysqli_connect($host,$user,'', $db_lo);

if ($conn) {
    $prod_name = $_POST["product_name"];
    $prod_price = $_POST["product_price"];
    $prod_desc = $_POST["product_description"];
    $prod_cat_id = $_POST["product_category"];

    if (empty($prod_name) || empty($prod_price) || empty($prod_cat_id)) {
        die("Please Fill All the Fields");
    }

    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF');
    $fileNames = array();

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if (!empty(array_filter($_FILES['product_image']['name']))) {
        foreach ($_FILES['product_image']['name'] as $key => $val) {
            // File upload path
            $fileName = basename($_FILES['product_image']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["product_image"]["tmp_name"][$key], $targetFilePath)) {
                    // Image db insert sql
                    array_push($fileNames, $fileName);
                    $insertValuesSQL = 1;
                } else {
                    $errorUpload .= $_FILES['product_image']['name'][$key] . ', ';
                }
            } else {
                $errorUploadType .= $_FILES['product_image']['name'][$key] . ', ';
            }
        }

        if ($insertValuesSQL == 1) {
            $sql = "INSERT INTO product(`name`, `price`, `cat`, `descreption`)VALUES('$prod_name',' $prod_price','$prod_cat_id', '$prod_desc')";
            $result = mysqli_query($conn, $sql);

            $last_insert_id = "";
            if ($result) {
                $statusMsg = "Files are uploaded successfully.";
                echo $statusMsg;
                // $last_insert_id = $conn->lastInsertId();
                $last_insert_id = mysqli_insert_id($conn);
                $_SESSION['prod_name']=$prod_name;
                $_SESSION['prod_price']=$prod_price;
                $_SESSION['prod_desc']=$prod_desc;

                foreach ($fileNames as $index => $value) {
                    // Insert image file name into database
                    $insert_images_stmt = $conn->prepare("INSERT INTO images (product_id, image_name) VALUES (?, ?)");
                    $images_uploaded = $insert_images_stmt->execute([$last_insert_id, $value]);
                    //   $images_uploaded = mysqli_query($conn, $insert_images_stmt);

                    if ($images_uploaded) {

                        $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . $errorUpload : '';
                        $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . $errorUploadType : '';
                        $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;


                        $sql = "select * from images where product_id = '$last_insert_id' ";
                        $result = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($result);

                        if($count == 1) {
                            $_SESSION['IsMember'] = 1;
                            $data = mysqli_fetch_assoc($result);
                            $_SESSION['image_name'] = $data['image_name'];
                            if ($prod_cat_id == "1") {
                                header("Location:eye1.php");
                                exit;

                            }
                            if ($prod_cat_id == "2") {
                                header("Location:hair1.php");
                                exit;

                            }
                            if ($prod_cat_id == "3") {
                                header("Location:skin&body1.php");
                                exit;

                            }
                            if ($prod_cat_id == "4") {
                                header("Location:teeth1.php");
                                exit;

                            }


                        }


                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }
            } else {
                die("Error Encountered while Adding Product!");
            }
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

    // Display status message
    echo $statusMsg;


}
else
{

}


?>