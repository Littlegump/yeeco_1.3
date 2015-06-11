<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('../conf/connect.php');
$ousertel=$_POST['ousertel'];
		$query_1=mysql_query("select uId from user where userTel='$ousertel'");
		if(!($query_1 && mysql_num_rows($query_1))){
			$query_2=mysql_query("select pId from pre_user where userTel='$ousertel'");	
			if(!($query_2 && mysql_num_rows($query_2))){
				echo "该用户不存在";
			}		
		}
		
?>