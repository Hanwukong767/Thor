<?php
include_once('./connect.php');

$names = trim($_POST['user']);
$pwd = trim($_POST['password']);

$msg = array(
  'code'=>0
);

$sql = "SELECT * FROM admin WHERE admin_name='".$names."' AND admin_password='".$pwd."'";

if ($result=mysqli_query($conn,$sql))
{
    $msg['code']=mysqli_num_rows($result);
}

echo json_encode($msg);

?>