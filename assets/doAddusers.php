<?php
header("content-type:text/html;charset=utf-8");
//判断并接受数据
$username = isset($_POST['username'])?$_POST['username']:'';
$idnumber = isset($_POST['idnumber'])?$_POST['idnumber']:'';
$workshop = isset($_POST['workshop'])?$_POST['workshop']:'';
$job = isset($_POST['job'])?$_POST['job']:'';
$tel = isset($_POST['tel'])?$_POST['tel']:'';
$address = isset($_POST['address'])?$_POST['address']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$password1 = isset($_POST['password1'])?$_POST['password1']:'';
$password2 = isset($_POST['password2'])?$_POST['password2']:'';

		
//测试php和mysql
//设置数据库信息
if($password1 === $password2){
	$password = $password1;
}else{
	echo "<script>alert('两次输入密码不同');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
}
$servername = "localhost";
$username = "root";
$password = "JIAfeng19961030";

//1.链接数据库
$conn = mysqli_connect($servername,$username,$password);

//检测链接
if(!$conn){
	die("连接失败：".mysqli_connect_error()."<br>");
	return 0;
}

//2.查询包含用户信息的数据库usersinfo是否存在，不存在就创建
$sql = "CREATE DATABASE IF NOT EXISTS usersinfo";

//检测数据库是已经创建,若成功则选择该数据库
if(!mysqli_query($conn,$sql)){
	echo "数据库连接失败：".mysqli_error($conn)."<br>";
	return 0;
}else{
	echo "数据库连接成功";
	mysqli_select_db($conn,"usersinfo");
}

//3.检查表是否存在，若不存在则创建新表
$sql = "CREATE TABLE IF NOT EXISTS usersinfo(
id INT(11) KEY AUTO_INCREMENT,
username VARCHAR(20) NOT NULL,
idnumber VARCHAR(10) NOT NULL,
workshop VARCHAR(10) NOT NULL,
job VARCHAR(10) NOT NULL,
tel VARCHAR(20) NOT NULL,
address VARCHAR(50),
email VARCHAR(30),
password VARCHAR(16) NOT NULL
)ENGINE=INNODB";

//检查表创建
if(!mysqli_query($conn,$sql)){
	echo "表连接失败：".mysqli_error($conn)."<br>";
	return 0;
}else{
	echo "表连接成功";
}

//准备sql语句
$sql = "INSERT usersinfo(username,idnumber,workshop,job,tel,address,email,password) values ('$username','$idnumber','$workshop','$job','$tel','$address','$email','$password')";

//发送sql语句
$obj = mysqli_query($conn,$sql);

if($obj){
	echo "添加成功！<br> <a href='addusers.php'>继续添加</a> | <a href='users.php'>用户列表</a>";
	
}else{
	echo "添加失败:".mysqli_error($conn)."<br>";
}
//关闭连接
mysqli_close($conn);