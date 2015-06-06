<?php
session_start();
require_once('../conf/connect.php');
error_reporting(E_ALL & ~E_NOTICE);
//获取表单数据
$userTel = $_POST['usertel'];
$password = $_POST['password1'];
$userName=$_POST['realname'];
$userSchool=$_POST['school'];
$regTime = time();


if($_POST['ousertel']){
	$ousertel=$_POST['ousertel'];
	$query_1=mysql_query("select uId from user where userTel='$ousertel'");
	$query_2=mysql_query("select pId from pre_user where userTel='$ousertel'");
	if($query_1 && mysql_num_rows($query_1)){
			echo "该用户已被注册！";
		}else if($query_2 && mysql_num_rows($query_2)){
			echo "该用户已被注册！";
			}
		exit;
	}
$insertsql=mysql_query("insert into user(userTel,password,userSchool,userName,regTime) values('$userTel','$password','$userSchool','$userName',$regTime)");
$uid = mysql_insert_id();
 if($insertsql){ 	
		$_SESSION['userName'] = $userName;
		$_SESSION['userId'] = $uid;
		$_SESSION['sschool']=$userSchool;
		echo "<script>window.location.href='../../front/square.php'</script>";
	}else{
		echo "<script>alert('注册失败！');window.location.href='../../index.php'</script>";
	}

?>