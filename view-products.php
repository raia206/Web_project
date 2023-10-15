<?php
//require 'isAuth.php';
$host='localhost';
$user='root';
$db_lo='login';
$conn=mysqli_connect($host,$user,'', $db_lo);

if ($conn) {
    $query = "select * from product";
    $run = mysqli_query($conn,$query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>View Products</title>

        <link rel="stylesheet" type="text/css" href="s.css">

    </head>
    <body>
    <header></header>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr class="heading">
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Operation</th>
        </tr>
        <?php
        $i=1;
        if ($num = mysqli_num_rows($run)>0) {
            while ($result = mysqli_fetch_assoc($run)) {
                echo "  
                          <tr class='data'>  
                               <td>".$result['id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['cat']."</td>  
                               <td>".$result['price']."</td>               
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";
            }
        }
        ?>
    </table>
    </body>
    </html>
    <?php
}?>