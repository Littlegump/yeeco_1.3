<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once('../conf/connect.php');
$uId=$_SESSION['userId'];
$op = $_GET['op'];


//获取表单元素值
$password_1=$_POST['password_1'];
$userTel=$_POST['userTel'];
if($_GET['action'] == 'isright'){
	$password_old=$_POST['password_old'];
	$result=mysql_fetch_array(mysql_query("select password from user where uId='$uId' limit 1"));
	if($password_old == $result['password']){
		exit;
	}else{
		echo "密码输入错误！";	
		exit;
	}
}


	//修改电话号码
if($op == 'tel'){
	if($userTel){
			$f=mysql_query("update user set userTel='$userTel' where uId='$uId'");
			if($f){
				logout();	
				echo "<script>alert('修改成功，请重新登陆！');window.location.href='../../index.php';</script>";
			}else{
				echo "<script>alert('修改失败，请重新修改！');window.location.href='../../front/personal_center.php?action=account';</script>";
			}
		}
	exit;		
}
if($op == 'pwd'){
	//修改密码
		$f=mysql_query("update user set password='$password_1' where uId='$uId'");
		if($f){
			logout();
			echo "<script>alert('修改成功，请重新登陆！');window.location.href='../../index.php';</script>";
		}else{
			echo "<script>alert('修改失败，请重新修改！');window.location.href='../../front/personal_center.php?action=account';</script>";
		}
	exit;
}

function logout(){
    unset($_SESSION['userName']); 
	unset($_SESSION['userId']);
    if(!empty($_COOKIE['usertelno']) || !empty($_COOKIE['passwordno'])){  
    setcookie("usertelno", null, time()-3600*24*365,"/yeeco_1.0/");  
    setcookie("passwordno", null, time()-3600*24*365,"/yeeco_1.0/");  
	}
}


?>