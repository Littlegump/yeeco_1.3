<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	require_once('../conf/connect.php');
	$password=$_POST['password_1'];
	$userTel=$_POST['userTel'];
		
	//将pre_user信息移到user
	$query_1=mysql_query("select * from pre_user where userTel='$userTel'");
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
	exit;
					
?>