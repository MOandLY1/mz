<?php
$ag = new mysqli('localhost','root','root');  //链接数据库
$select_db = $ag->select_db('meizu');     //链接库
mysqli_query($ag,'set names utf8');          //数据格式

$name = $_GET['name'];
$password = $_GET['password'];
$password = md5($password);
$password_ = $_GET['password_'];
$password_ = md5($password_);

$sql = "select * from user where name='{$name}'";
$res = $ag->query($sql);
$ad = array();
while ($rom = $res->fetch_assoc()){
    $ad[] = $rom;
}
//echo "<pre>";
//var_dump($ad);
//exit;

if(empty($name)){
    echo "<script>alert('用户名不能为空')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
    exit;
}
if(empty($password)){
    echo "<script>alert('密码不能为空')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
    exit;
}
if($password!=$password_){
    echo "<script>alert('两次输入密码不一致')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
    exit;
}
if($ad){
    echo "<script>alert('已有相同的用户名')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
    exit;
}
$sql = "insert into user(name,password,time) values('{$name}','{$password}',now())";
$res = $ag->query($sql);
if($res){
    echo "<script>alert('注册成功')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
}else{
    echo "<script>alert('注册失败')</script>";
    echo "<script>window.location.href='{{url('/register')}}'</script>";
}

?>