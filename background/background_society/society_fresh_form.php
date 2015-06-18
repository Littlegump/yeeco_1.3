<?php 
session_start();
require_once('../conf/connect.php');
require_once('get_picture.php');
//上传纳新海报
$folder = "society/fresh";
$fImg = getImg($folder);
//获取表单信息
$notice=$_POST['notice'];
$detail=$_POST['detail'];
$que_1=$_POST['que_1'];
$que_2=$_POST['que_2'];
$que_3=$_POST['que_3'];
$sName=$_POST['sName'];
$sId = $_POST['sId'];
//执行插入语句
if(mysql_num_rows(mysql_query("select sId from society_fresh where sId='$sId'"))){
	echo "<script>alert('该社团已经开启纳新！');</script>";
	exit;
}else{
	$insertsql = mysql_query("insert into society_fresh(sName,fState,sId,fImg,fAnn,fDetail,fQue_1,fQue_2,fQue_3) values('$sName','报名开放中','$sId','$fImg','$notice','$detail','$que_1','$que_2','$que_3')");
    mysql_query("update society set isFresh=1 where sId='$sId'");
}

?>