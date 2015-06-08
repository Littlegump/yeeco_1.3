<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);
	$userTel=$_GET['userTel'];
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

<!--账号信息页面-->   
<div class="main" id="main_3">
    <div class="page_title">
        <li class="title_left">账号信息</li>
    </div>
    <div class="contact">
        <form class="password_form" action="../background/background_person/activate_user.php" method="post">
        <ul>
          <li>
          	<input name="userTel" type="hidden" value="<?php echo $userTel?>"/>
            <label>设置密码：</label>
            <input name="password_1" type="password"  placeholder="密码不得少于六位" onfocus="outline_new(this)"  onblur="outline_old(this);checking_2(this)"  onkeydown="disappear('span_2');" required="required"/>
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


</div>

</body>
</html>


