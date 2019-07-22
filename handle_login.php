<?php
session_start();
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('localhost','root','JIAfeng19961030','usersinfo');//链接数据库
mysqli_set_charset($link,'utf8'); //设定字符集
$idnumber=$_POST['idnumber'];
$psd=$_POST['password'];

echo "$idnumber,$psd";
if($idnumber==''){
	echo "<script>alert('请输入用户名');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
	exit;
}
if($psd==''){
	
	echo "<script>alert('请输入密码');location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
	exit;
	
}
$stmt=mysqli_stmt_init($link);
    if(mysqli_stmt_prepare($stmt,"select idnumber,username,password from usersinfo where idnumber= ?")){
	//绑定参数
	mysqli_stmt_bind_param($stmt,'s',$idnumber);
	//执行查询
	mysqli_stmt_execute($stmt);
	//获取结果变量
	$result=mysqli_stmt_get_result($stmt);
	//获取值
	$row=mysqli_fetch_assoc($result);
	
	if($row){
		if($psd !=$row['password'] || $idnumber !=$row['idnumber']){
			
			echo "<script>alert('密码错误，请重新输入');</script>";
			header("Refresh:0;url=page_login.php");
			exit;
		}
		else{
			$_SESSION['username']=$row['username'];
			$_SESSION['idnumber']=$row['idnumber'];
			echo "<script>alert('登录成功');</script>";
			header("Refresh:0;url=index.php");
		}
		
	}else{
		echo "<script>alert('您输入的用户名不存在');'</script>";
		header("Refresh:0;url=page_login.php");
		exit;
	};
} 
mysqli_close($link);
?>