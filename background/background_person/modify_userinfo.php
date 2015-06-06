<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once('../conf/connect.php');
$uId=$_SESSION['userId'];
$status = $_GET['status'];
//获取表单元素值
$password_old=$_POST['password_old'];
$password_1=$_POST['password_1'];
$userTel=$_POST['userTel'];
	if($userTel){
		if($status == 'unactive'){
			$f=mysql_query("update pre_user set userTel='$userTel' where pId='$uId'");
		}else{
			$f=mysql_query("update user set userTel='$userTel' where uId='$uId'");
		}		
	}
	if($status == 'unactive'){
		if($password_old == '123456'){
			$res=mysql_fetch_array(mysql_query("select * from pre_user where pId='$uId' limit 1"));
			$userName=$res['userName'];
			$userTel=$res['userTel'];
			$userSchool=$res['userSchool'];
			$regTime=time();
			$f=mysql_query("insert into user(userTel,password,userSchool,userName,regTime) values('$userTel','$password_1','$userSchool','$userName','$regTime')");
			$res1=mysql_fetch_array(mysql_query("select * from preuser_society_relation where pid='$uId' limit 1"));
			$pid=$res1['$pid'];
			$sid=$res1['$sid'];
			$isDepManager=$res1['$isDepManager'];
			if($isDepManager == '0'){
		$f1=mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$pid','$sid','0','0')");			
			}else{
		$f1=mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$pid','$sid','1','$isDepManager')");		
				}
			$f2=mysql_query("delete from pre_user where pId='$uId'");
			$f3=mysql_query("delete from preuser_society_relation where pid='$uId'");
			if($f && $f1 && $f2 && $f3){
				echo "<script>alert('修改密码成功！');</script>";
				}
		}else{
			echo "<script>alert('旧密码错误！');</script>";
			}
	}else{
		$f=mysql_query("update user set password='$password_1' where uId='$uId'");
		}
	if($f){
			echo "<script>alert('修改成功！');</script>";
		}
?>