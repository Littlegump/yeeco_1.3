<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link href="css/register.css" type="text/css" rel="stylesheet">
<link href="css/main.css" type="text/css" rel="stylesheet">
<script src="js/main.js"></script>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/script_person.js" type="text/javascript"></script>

</head> 
<body> 
<div class="top_back">
  <div class="top">
      <ul>
        <li class="a">注&nbsp;册</li>
        <li class="b">已有账号？马上&nbsp;<a href="../index.php">登录</a></li>
      </ul>
  </div>
</div>
<div style="clear:both;"></div>

<div style="height:20px;"></div>
 
<form name="registerForm" id="registerForm" action="../background/background_person/form_register.php" method="post"><!--指向后台的登录模块.php-->
  <div class="register_box"> 
      <div class="page">
        <ul>  
          <li>
            <div class="icon"></div>
            <input type="text" id="usertel" name="usertel" class="text-input" onfocus="register_text_in(this)" onkeydown="disappear('span_1');disappear('otel');" onblur="register_text_out(this);checking_1(this)" placeholder="您的手机号码"/>
          </li>
          <span id="otel" style="display:none"></span>
          <span id="span_1" style="display:none">请输入合法的手机号码!</span>
          <li>
            <div class="icon"></div>
            <input type="password" id="password1" name="password1" class="text-input" onfocus="register_text_in(this)" onkeydown="disappear('span_2');" onblur="register_text_out(this);checking_2(this)" placeholder="设置密码"/>
          </li>
          <span id="span_2" style="display:none">密码长度至少6位！</span>
          <li>
            <div class="icon"></div>
            <input type="password" id="password2" name="password2" class="text-input" onfocus="register_text_in(this)" onkeydown="disappear('span_3');" onblur="register_text_out(this);checking_3(this)" placeholder="确认密码"/>
          </li>
          <span id="span_3" style="display:none">两次密码不一致！</span>
        </ul>
        <div style="clear:both;"></div>
      </div>
      <div class="page">  
        <ul>  
          <li>
            <div class="icon"></div>
            <input type="text" id="realname" name="realname" class="text-input" onfocus="register_text_in(this)" onblur="register_text_out(this)" onkeydown="disappear('span_4');" placeholder="您的真实姓名"/>
          </li>
          <span id="span_4" style="display:none">请输入您的真实姓名！</span>
          <li>
            <div class="icon"></div>
            <input type="text" id="school" name="school" class="text-input" onfocus="register_text_in(this)" onblur="register_text_out(this)" onkeydown="disappear('span_5');" placeholder="您所在的学校"/>
          </li>
          <span id="span_5" style="display:none">请选择您所在的学校！</span>
        </ul>
      </div>
      <div class="page_3"> 
        <ul> 
          <li>
            <label class="checkbox"><input type="checkbox" id="server" checked disabled>我同意<a href="#">《易可服务协议》</a></label>
          </li>
          <li>
            <input type="button" onclick="toTest()" class="register" value="注册" >
          </li>
        </ul>
        <div style="clear:both;"></div>
      </div>
  </div>

<div class="test" style="display:none;" >
    <div style="height:80px;"></div>
    <div class="left_pic"></div>
    <div class="right_test">
        <ul> 
          <li>
              <p>欢迎您加入易可社团的大家庭！！！</p>
              <p>验证码已发送至手机&nbsp;88888888888，</p>
          </li>
          <li>
              <p>若<strong class="time">60</strong>秒后您还未收到，请点击<a id="resend" class="gray">重新发送</a></p>
          </li>
          <li>
            <input type="text" id="test" placeholder="输入验证码继续完成注册" onfocus="outline_new(this)" onblur="outline_old(this)"/>
          </li>
          <li>
            <input type="button" onclick="toRegister()" class="register" value="返回" onclick=""/>
            <input type="submit" class="register" value="提交" />
          </li>
        </ul>    
    </div>
    <div style="clear:both;"></div>
</div>
</form>



</body>
</html>