<?php
include_once("./connect.php");
$name=trim($_POST['name']);
$pwd=md5(trim($_POST['password']));
$sex=trim($_POST['sex']);
$academy=trim($_POST['colle']);
$major=trim($_POST['major']);
$email=trim($_POST['email']);
$phone=trim($_POST['phone']);

$msg = array(
    'code'=>0 
);
  
$sql="INSERT INTO student"."(stu_id,stu_password, stu_name, stu_academy, stu_major, stu_sex, stu_email, stu_phone)". "VALUES ".
"(null,'$pwd','$name','$academy','$major','$sex','$email','$phone')";
$result=mysqli_query($conn,$sql);
//var_dump($result) ;
if($result )
{
  //die('无法插入数据: ' . mysqli_error($conn));
  $msg['code'] = 1;
}
echo json_encode($msg);
mysqli_close($conn);

?>