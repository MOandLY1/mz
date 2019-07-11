<?php
session_start();
$ag = new mysqli('localhost','root','root');
$select_db = $ag->select_db('meizu');
mysqli_query($ag,'set names utf8');

$name = $_GET['name'];
$password = $_GET['password'];
$password = md5($password);

$sql = "select * from user where name='{$name}'";
$res = $ag->query($sql);
$ad = array();
while ($rom = $res->fetch_assoc()){
    $ad[] = $rom;
}
//echo "<pre>";
//var_dump($ad);
//exit;

if(empty($ad)){
    echo "<script>alert('不存在该用户')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
    exit;
}
if($password!=$ad[0]['password']){
    echo "<script>alert('密码错误')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
    exit;
}
if($ad){
    echo "<script>alert('登陆成功')</script>";
    $_SESSION['user'] = $ad[0];
    echo "<script>window.location.href='{{url('/mzsc')}}'</script>";
    exit;
}


?>