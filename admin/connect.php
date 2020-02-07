<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_thor";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,$database);
mysqli_query($conn,"set names 'utf8'");
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

?>