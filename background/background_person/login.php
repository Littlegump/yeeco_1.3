<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
//连接数据库文件
require_once('../conf/connect.php');

//删除cookie和session，执行退出操作
if($_GET['action'] == 'logout'){
   logout();
}

//获取用户电话和密码
$usertel = $_POST['usertel'];
$password = $_POST['password'];
$remember = $_POST['remember'];

//检测用户名是否正确
$check_user = mysql_query("select * from user where userTel='$usertel' limit 1");
$result_user = mysql_fetch_array($check_user);
$check_pre_user = mysql_query("select * from pre_user where userTel='$usertel' limit 1");
$result_pre_user = mysql_fetch_array($check_pre_user);

//验证密码或加密后的密码是否正确，进行登录判断
if($result_user){
    if($_GET['action'] == 'auto'){
		
		if($result_user['passwordno'] == $password){
		    login();
		}else{
	        error();
		}
	}else{
		
		if($result_user['password'] == $password){
		    login();
		}else{
	        error();
		}
	}
	}else if($result_pre_user){
		if($password=='123456'){
			//执行登陆操作，修改密码，进行用户激活
			active_login();
			}else{
				error();
				}
	}else{
	 echo "<script>alert('登录失败，该用户不存在！');</script>";
	 logout();
}

//执行登陆操作，修改密码，进行用户激活
function active_login(){
	global $result_pre_user;
    $_SESSION['userId'] = $result_pre_user['pId'];
	//跳转到个人中心
	echo "<script>window.location.href='../../front/personal_center.php?action=account&status=unactive';</script>";
	}

//执行登录操作
function login(){ 
 	global $result_user;
    global $usertel;
    global $password;
    global $remember;
    $_SESSION['userName'] = $result_user['userName'];
    $_SESSION['userId'] = $result_user['uId'];
	$_SESSION['sschool']=$result_user['userSchool'];
	$uid=$result_user['uId'];
	//检测自动登录是否被选中
	if( !empty($remember)){		
		//对用户电话和密码进行加密
        $encryptuser=trim($usertel);
        $encryptpass=md5(trim($password));
		
		//更新cookie信息
		setcookie("usertelno", $encryptuser, time()+3600*24*365,"/yeeco_1.0/");  
		setcookie("passwordno", $encryptpass, time()+3600*24*365,"/yeeco_1.0/");
	    $updatetsql=mysql_query("update user set usertelno='$encryptuser',passwordno='$encryptpass' where uId='$uid'");				
		
	}
    echo "<script>window.location.href='../../front/square.php';</script>";
}
//登录失败报错
function error(){
	echo "<script>alert('登录失败，请检查密码是否输入错误！');</script>";
	logout();
}

function logout(){
    unset($_SESSION['userName']); 
	unset($_SESSION['userId']);
    if(!empty($_COOKIE['usertelno']) || !empty($_COOKIE['passwordno'])){  
    setcookie("usertelno", null, time()-3600*24*365,"/yeeco_1.0/");  
    setcookie("passwordno", null, time()-3600*24*365,"/yeeco_1.0/");  
	}
	echo "<script>window.location.href='../../index.php';</script>";
	exit;
}