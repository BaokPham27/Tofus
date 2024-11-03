<?php
$host = "sql304.infinityfree.com";
$username = "if0_34359705";
$password = "xpTenhCnHeEtu";
$dbname = "if0_34359705_bwd";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error)
{
    die("kết nối không thành công:". $conn->connect_error);
}
?>