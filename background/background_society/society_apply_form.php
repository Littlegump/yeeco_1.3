<?php
	error_reporting(E_ALL & ~E_NOTICE);
	require_once('../conf/connect.php');
	require_once('get_picture.php');
	//获取表单元素
	$uId=$_POST['uId'];
	$sId=$_POST['sId'];
	$aName=$_POST['aName'];
	$aSex=$_POST['aSex'];
	$aBirthday=$_POST['aBirthday'];
	$aNative=$_POST['aNative'];
	$aClass=$_POST['aClass'];
	$aTel=$_POST['aTel'];
	$aEmail=$_POST['aEmail'];
	$aQQ=$_POST['aQQ'];
	$aFavor=$_POST['aFavor'];
	$aStrong=$_POST['aStrong'];
	$aAnser_1=$_POST['aAnser_1'];
	$aAnser_2=$_POST['aAnser_2'];
	$aAnser_3=$_POST['aAnser_3'];
	$departmentId=$_POST['department'];
	$aSendTime=time();
	//上传图片
	$folder="user_photo";
	$aPhoto=getImg($folder);
	//根据ID找到部门名称
	$depRes=mysql_fetch_array(mysql_query("select depName from department where dId='$departmentId'"));
	$depName=$depRes['depName'];
	//插入数据到数据库
	$insertSql=mysql_query("insert into apply_information_unselected(uId,aName,aSex,aBirthday,aNative,aClass,aTel,aEmail,aQQ,aFavor,aStrong,aPhoto,aAnser_1,aAnser_2,aAnser_3,sId,sDepId,sDep,aSendTime) values('$uId','$aName','$aSex','$aBirthday','$aNative','$aClass','$aTel','$aEmail','$aQQ','$aFavor','$aStrong','$aPhoto','$aAnser_1','$aAnser_2','$aAnser_3','$sId','$departmentId','$depName','$aSendTime')");
	
?>