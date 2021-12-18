<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "book_shop";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("connection to this is failed due to ". mysqli_connect_error());
}

$Name = $_POST['Name'];
$Email_Address = $_POST['Email_Address'];              
$Password = $_POST['Password'];

$sql = "INSERT INTO `book_shop` (`Name`, `Email Address`, `Password`) VALUES ('$Name', '$Email_Address', '$Password');";

if(mysqli_query($con,$sql)){
// echo "done";

echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Data Inserted!</strong> Now you can login
</div>';
include "login1.php";
}
else echo "not register";

mysqli_close($con);
?>


<!-- INSERT INTO `book_shop` (`sno`, `Name`, `Email Address`, `Password`) VALUES ('1', 'Test name', 'this@this.com', '123456'); -->