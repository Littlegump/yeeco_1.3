<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
require_once('../../conf/connect.php');
$sId=$_SESSION['sId'];
$sSchool=$_SESSION['sSchool'];
//获取表单数据
$leader_team=$_POST['leader_team'];
$position=$_POST['position'];
$dep_name=$_POST['dep_name'];
$position_1=$_POST['position_1'];
$position_2=$_POST['position_2'];
$position_3=$_POST['position_3'];
$manager_1=$_POST['manager_1'];
$manager_2=$_POST['manager_2'];
$manager_3=$_POST['manager_3'];
$tel_1=$_POST['tel_1'];
$tel_2=$_POST['tel_2'];
$tel_3=$_POST['tel_3'];
//将队名和领导人的职位名称存入数据库
$updatetsql=mysql_query("update society set team_name='$leader_team',position='$position' where sId='$sId'");
//删除以前部门信息
mysql_query("delete from department where societyId='$sId'");
//录入部门信息
for($i=0;$i<count($dep_name);$i++){
//将第一条部门、职位、负责人，电话插入数据库
mysql_query("insert into department(depName,depManager_1,tel_1,position_1,societyId) values('$dep_name[$i]','$manager_1[$i]','$tel_1[$i]','$position_1[$i]','$sId')");
$depid = mysql_insert_id();
//将邀请信息存入pre_user表中
$res1=mysql_fetch_array(mysql_query("select uId from user where userTel='$tel_1[$i]'"));
	if(!$res1){
		mysql_query("insert into pre_user(userName,userTel,userSchool) values('$manager_1[$i]','$tel_1[$i]','$sSchool')");
		$pid1 = mysql_insert_id();
		mysql_query("insert into preuser_society_relation(pid,sid,isDepManager) values('$pid1','$sId','$depid')");
	}else{
		$uId1=$res1['uId'];
		mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$uId1','$sId','1','$depid')");
		}
if($position_2[$i]){
	$res2=mysql_fetch_array(mysql_query("select uId from user where userTel='$tel_2[$i]'"));
	if(!$res2){
				mysql_query("insert into pre_user(userName,userTel,userSchool) values('$manager_2[$i]','$tel_2[$i]','$sSchool')");
				$pid2 = mysql_insert_id();
				mysql_query("insert into preuser_society_relation(pid,sid,isDepManager) values('$pid2','$sId','$depid')");
	}else{
		$uId2=$res2['uId'];
		mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$uId2','$sId','1','$depid')");
		}
		//第二条职位、负责人、电话信息插入数据库
		mysql_query("update department set depManager_2='$manager_2[$i]',tel_2='$tel_2[$i]',position_2='$position_2[$i]' where id='$depid'");
}
if($position_3[$i]){
	$res3=mysql_fetch_array(mysql_query("select uId from user where userTel='$tel_3[$i]'"));	
	if(!$res3){
				mysql_query("insert into pre_user(userName,userTel,userSchool) values('$manager_3[$i]','$tel_3[$i]','$sSchool')");
				$pid3 = mysql_insert_id();
				mysql_query("insert into preuser_society_relation(pid,sid,isDepManager) values('$pid3','$sId','$depid')");
	}else{
		$uId3=$res3['uId'];
		mysql_query("insert into user_society_relation(userId,societyId,isManage,depBelong) values('$uId3','$sId','1','$depid')");
		}
		//第三条职位、负责人、电话信息插入数据库
		mysql_query("update department set depManager_3='$manager_3[$i]',tel_3='$tel_3[$i]',position_3='$position_3[$i]' where id='$depid'");
	}	
}
?>