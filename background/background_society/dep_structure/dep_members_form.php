<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('../../excel/UpLoad_Excel.php');
session_start();
$sId=$_SESSION['sId'];
$sSchool=$_SESSION['sSchool'];
//上传excel文件到服务器模块
$file = $_FILES['members']['name'];
$msg = uploadFile($sId,$file);
//手动添加模块
//获取表单值
$username=$_POST['name'];
$telnumber=$_POST['telnumber'];
if($username){
for($i=0;$i<count($username);$i++){
		mysql_query("insert into pre_user(userName,userTel,userSchool) values('$username[$i]','$telnumber[$i]','$sSchool')");
		$pid = mysql_insert_id();
		mysql_query("insert into preuser_society_relation(pid,sid,isDepManager) values('$pid','$sId','0')");
}
}
if(!($file || $username[0])){
		echo "<script>alert('请添加社团成员！');</script>";
	}
print_r($username);
?>
