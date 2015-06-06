<?php 
session_start();
require_once('../conf/connect.php');
require_once('get_picture.php');
//上传纳新海报
$folder = "society/fresh";
$fImg = getImg($folder);

//获取表单信息
$begin_date=$_POST['begin_date'];
$end_date=$_POST['end_date'];
$begin_time=$_POST['begin_time'];
$end_time=$_POST['end_time'];
$notice=$_POST['notice'];
$detail=$_POST['detail'];
$que_1=$_POST['que_1'];
$que_2=$_POST['que_2'];
$que_3=$_POST['que_3'];
$fSetTime = time();
$sName=$_POST['sName'];
$fBelong = $_POST['sId'];
//执行插入语句
$insertsql = mysql_query("insert into society_fresh(sName,fState,fBelong,fImg,fBeginDate,fBeginTime,fEndDate,fEndTime,fAnn,fDetail,fQue_1,fQue_2,fQue_3,fSetTime) values('$sName','报名开放中','$fBelong','$fImg','$begin_date','$begin_time','$end_date','$end_time','$notice','$detail','$que_1','$que_2','$que_3','$fSetTime')");
	$fId = mysql_insert_id();
exit;
	 if($insertsql){
		echo "<script>window.location.href='../society-fresh-open-finish.php?sName=$sName&fId=$fId&fBelong=$fBelong'</script>";
	}else{
		echo "<script>alert('纳新开启失败！');window.location.href='../society-mycharge-fresh.php?id=$fBelong'</script>";
	}
?>