<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	require_once('../conf/connect.php');
	require_once('../conf/enc.php');
	//获取表单值
	$password=$_POST['password_1'];
	$userTel=decode($_POST['userTel']);
	//判断用户是否激活，如果是未激活用户，则进行激活
	$query_1=mysql_query("select * from pre_user where userTel='$userTel'");
	//ptint_r($userTel);exit;
if(mysql_fetch_array($query_1)){
	//将pre_user信息移到user
	if($query_1 && mysql_num_rows($query_1)){
	    while($row = mysql_fetch_assoc($query_1)){
			$pId[]=$row['pId'];
			$userName=$row['userName'];
			$userTel=$row['userTel'];
			$userSchool=$row['userSchool'];
		}			
	}
	$regTime=time();
	$f=mysql_query("insert into user(userTel,password,userSchool,userName,regTime) values('$userTel','$password','$userSchool','$userName','$regTime')");
	$newId=mysql_insert_id();
	//print_r($pId);exit;	
	//将preuser_society_relation移到user_society_relation
	foreach($pId as $value){		
	    $res=mysql_fetch_array(mysql_query("select * from preuser_society_relation where pid='$value' "));
	    $sid = $res['sid'];
		$isDepManager = $res['isDepManager'];
		if($isDepManager == '0'){
			$f1=mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$newId','$sid','0','0')");			
		}else{
			$f1=mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$newId','$sid','1','$isDepManager')");		
		}
		$f3=mysql_query("delete from preuser_society_relation where pid='$value'");	
	}					
	//删除pre_user和preuser_society_relation信息
	$f2=mysql_query("delete from pre_user where userTel='$userTel'");	
	if($f && $f1 && $f2 && $f3){
		$_SESSION['userName'] = $userName;
    	$_SESSION['userId'] = $newId;
	    echo "<script>window.location.href='../../front/square.php';</script>";
	}else{
		echo "<script>window.location.href='../../index.php';</script>";
	}
}else{
	//修改密码
	$f=mysql_query("update user set password='$password' where userTel='$userTel'");
	if($f){
		echo "<script>alert('修改成功，请重新登陆！');window.location.href='../../index.php';</script>";
	}else{
	   echo "<script>alert('修改失败，请重新修改！');window.location.href='../../front/personal_center.php?action=account';</script>";
	}
}
?>