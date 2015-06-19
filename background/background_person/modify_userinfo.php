<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once('../conf/connect.php');
require_once('../background_society/get_picture.php');
$uId=$_SESSION['userId'];
$op = $_GET['op'];
/*
*个人资料模块
*
*/
if($op == 'info'){
	$username=$_POST['username'];
	$tel_number=$_POST['tel_number'];
	$face_pic=$_POST['pic'];
	$sex=$_POST['sex'];	
	$birthYear=$_POST['birthYear'];
	$birthMonth=$_POST['birthMonth'];
	$birthDay=$_POST['birthDay'];
	$native_por=$_POST['native_por'];
	$native_city=$_POST['native_city'];
	$major=$_POST['major'];
	$email=$_POST['email'];
	$qq	=$_POST['qq'];
	$userBirth=$birthYear.'-'.$birthMonth.'-'.$birthDay;
	$userPlace=$native_por.'-'.$native_city;
	//获取图片
	$folder = "user_face/defined_face";
	$userFace=substr(getImg($folder),6);
	//更新信息
	$updatesql1=mysql_query("update userextrainfo set userName='$username',userTel='$tel_number', userSex='$sex',userBirth='$userBirth',userPlace='$userPlace',userClass='$major',userEmail='$email',userQQ='$qq' where uId='$uId'");
	mysql_query("update user set userName='$username' where uId='$uId'");
	if($userFace){
		$updatesql2=mysql_query("update user set userFace='$userFace' where uId='$uId'");
	}
	if($updatesql1){
		echo "<script>alert('success');window.location.href='../../front/personal_center.php?action=info';</script>";
	}else{
		echo "<script>alert('failed');window.location.href='../../front/personal_center.php?action=info';</script>";
	}
}
/**
*账号信息模块
*
*/
//利用异步提交判断旧密码是否正确
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
	//获取表单电话号码的值
	$userTel=$_POST['userTel'];
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
//修改密码
if($op == 'pwd'){
	//获取表单新密码的值
	$password_1=$_POST['password_1'];
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