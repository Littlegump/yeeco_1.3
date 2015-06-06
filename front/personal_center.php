<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
//获取页面信息，action表示要去往的页面，“”表示去往“我的动态”，“info”表示去往“个人资料”，“account”表示去往“账号信息”；
$action = $_GET['action'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心</title>
<link href="css/personal_center.css" type="text/css" rel="stylesheet">
<link href="css/main.css" type="text/css" rel="stylesheet">
<script src="js/main.js"></script>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/personal_center.js" type="text/javascript"></script>
<script type="text/javascript" src="js/pic_preview.js"></script>
</head>

<body>

<div class="top_back">
  <div class="top">
      <ul>
        <li class="a">个人中心</li>
        <li class="b">返回&nbsp&nbsp;<a href="square.php">易可广场>></a></li>
      </ul>
  </div>
</div>
<div style="clear:both;"></div>

<div class="body">

<!--左侧导航按钮--> 
  <div class="left">
      <div class="picture"></div>
      <div class="buttons" id="fixedSide">
          <a href="personal_center.php"><div><li>我的动态</li></div></a>
      	  <a href="personal_center.php?action=info"><div><li>个人资料</li></div></a>
          <a href="personal_center.php?action=account"><div><li>账号信息</li></div></a>
      </div>
  </div>

<?php
    if($action == ""){
?>
<!--我的动态页面-->   
<div class="main" id="main_1">
    <div class="page_title">
        <li class="title_left">我的动态</li>
    </div>
    <div class="contact">

    </div>  
</div>

<?php
	}else if($action == "info"){
?>
<!--个人资料页面-->   
<div class="main" id="main_2">

</div>

<?php
	}else if($action == "account"){
?>
<!--账号信息页面-->   
<div class="main" id="main_3">
    <div class="page_title">
        <li class="title_left">账号信息</li>
    </div>
    <div class="contact">
    	<form class="tel_form" action="#" method="post">
          <li>
            <label>当前账号：</label>
            <input name="userTel" type="text" value="88888888888" readonly="readonly" onfocus="outline_new(this)" onblur="outline_old(this)"  onkeydown="disappear('otel');"/>
          </li>
          <li><span id="otel" style="display:none"></span></li>
          <li><a class="gray" href="javascript:change_tel()">绑定其他手机号</a></li>
          <input type="button" class="button" value="发送验证码" style="display:none;" onclick="sendcode()"/>
          <li class="ver_code" style="display:none;">
            <p>我们给该号码发送了一条短信验证码</p>
            <p>若<strong class="time">60</strong>秒后您还未收到，请点击<a id="resend" class="gray">重新发送</a></p>
            <p><input type="text" id="test" placeholder="在这里输入验证码" onfocus="outline_new(this)" onblur="outline_old(this)"/></p>
          </li>
          <input type="submit" class="button" value="确认修改" style="display:none;"/>
        </form>
        <div style="width:750px;border-bottom:1px solid #f2f2f2;margin:35px auto;"></div>
        <form class="password_form" action="#" method="post">
        <ul>
          <li>
            <label>当前密码：</label>
            <input name="password_old" type="password" onfocus="outline_new(this)" onblur="outline_old(this)" onkeydown="disappear('span_1');"/>
          </li>
          <li><span id="span_1" style="display:none"></span></li>
          <li>
            <label>设置密码：</label>
            <input name="password_1" type="password"  placeholder="密码不得少于六位" onfocus="outline_new(this)"  onblur="outline_old(this);checking_2(this)"  onkeydown="disappear('span_2');"/>
          </li>
          <li><span id="span_2" style="display:none">密码长度至少6位！</span></li>
          <li>
            <label>确认密码：</label>
            <input name="password_2" type="password" onfocus="outline_new(this)" onblur="outline_old(this);checking_3(this)" onkeydown="disappear('span_3');"/>
          </li>
          <li><span id="span_3" style="display:none">两次密码不一致!</span></li>
          <input type="submit" class="button" value="修改密码" />
        </ul>
        </form>
    </div> 
</div>
<?php
	}
?>

</div>

<!--侧边快捷操作面板-->
<div class="icon_box">
     <a href=""><div id="icon_1"></div></a>
     <a href="personal_center.php"><div id="icon_2"></div></a>
     <a href="../background/background_person/login.php?action=logout"><div id="icon_3"></div></a>
</div>

</body>
</html>


