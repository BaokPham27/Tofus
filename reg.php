<?php
require 'db/connect.php';
if(isset($_POST['btn-reg']))
{
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    if(!empty($fullName))
    {
        $sql = "INSERT INTO `customer` (`fullName`,`phoneNumber`,`email`,`address`,`password`,`Admin`) VALUES('$fullName','$phoneNumber','$email','$address','$password','0')";
        if($conn->query($sql)===TRUE)
        {
            session_start();
                header("Location: Login.php");
        }
        else
        {
            echo "Lỗi {$sql}".$conn->error;
        }
    }
    else
    {
        session_start();
    header("Location: Login.php");
    }
}
?>