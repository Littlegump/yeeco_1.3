<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
    require_once('../conf/connect.php');
	require_once('get_emailbody.php');
	require_once('../conf/mail_parameter.php');
	require_once('get_picture.php');
	//获取表单属性
	$sName = $_POST['society_name'];
	$sSchool = $_POST['school'];
	$sPrincipal = $_POST['principal'];
	$principalId = $_POST['principalId'];
	$email=$_POST['email'];
	foreach($_POST['type'] as $n){
		$str = $n.'/'.$str;}
	$sCate = substr($str,0,strlen($str)-1);
	$sDesc = $_POST['describe'];
	$folder = "society";
	$sImg = getImg($folder);//执行图片上传操作，并且返回图片上传后的路径及文件名。
	//生成加密字符，用来验证激活社团
	$flag=md5(rand());
	//向数据库插入社团注册信息
	$insertsql = mysql_query("insert into pre_society(sName,sSchool,sPrincipal,uId,sCate,sDesc,sImg,email,flag) values('$sName','$sSchool','$sPrincipal','$principalId','$sCate','$sDesc','$sImg','$email','$flag')");
	$id = mysql_insert_id();//此id为新增社团的主键id
	$_SESSION['sName'] = $sName;
    $_SESSION['sId'] = $id;
	$_SESSION['sSchool']=$sSchool;
	//发送邮件
	$smtpemailto=$email;
	$mailbody = getEmailBody($id,$flag);
	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
	exit;
	//返回“我管理的社团”
	 if($insertsql){
		echo "<script>alert('您已经成功创建了一个社团！');window.location.href='../society-mycharge-information.php?id=$id'</script>";
	}else{
		echo "<script>alert('社团创建失败！');window.location.href='../society-establish.php'</script>";
	}
?>