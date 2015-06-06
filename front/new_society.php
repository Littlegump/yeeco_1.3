<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的社团</title>
<link href="css/new_society.css" type="text/css" rel="stylesheet">
<link href="css/main.css" type="text/css" rel="stylesheet">
<script src="js/main.js"></script>
<script src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script src="js/new_society.js" type="text/javascript"></script>
</head>

<body>

<div class="top_back">
  <div class="top">
      <ul>
        <li class="a">我的社团???</li>
        <li class="b">返回&nbsp&nbsp;<a href="square.php">易可广场>></a></li>
      </ul>
  </div>
</div>
<div style="clear:both;"></div>



<!--预备页，显示激活成功-->
<div class="page_pre" id="page_pre">
    <div class="hello_pic"></div>
    <div class="welcome">
        <p>恭喜您！您已经成功地激活了社团“####”</p>
        <p>下面跟随易可助手帮助完善您的社团资料！</p>
        <p>若<strong class="time">6</strong>秒后页面未自动跳转，点此<a id="begin" class="gray" href="javascript:turn()">跳转页面</a></p>
    </div>
</div>


<!--导航标题-->
<div class="guide" id="guide" style="display:none">
  <ul>
    <li class="on">组织架构</li>
    <li>添加成员</li>
    <li>专属二维码</li>
    <li>创建完成</li>
  </ul>
</div>


<!--第一页-->
<div class="page_1" id="0" style="display:none">
  <form class="framwork" id="form_1" action="actived.php" method="post">
  <div class="leader_team"><label>架构名称：</label><input type="text" name="leader_team" value="<?php echo $dd?>2015届领导班子" /></div>
  <div class="left"> 
      <input type="text" name="position" placeholder="职位" value="社长" onfocus="outline_new(this)" onblur="outline_old(this)"/>
      <input type="text" name="me" value="我" disabled="disabled"/>
      <div class="chestnut"><img src="../image/web_image/举例说明.png"></div>
  </div>
  <div class="right">
    <div class="example">
        <input type="text" name="dep_name" value="组织部" readonly="readonly"/>
        <input type="text" name="position_1" value="部长" readonly="readonly"/>
        <input type="text" name="position_2" value="副部长" readonly="readonly"/>
        <input type="text" name="position_3" placeholder="无" readonly="readonly"/>
        <input type="text" name="manager_1" value="张三" readonly="readonly"/>
        <input type="text" name="manager_2" value="李四" readonly="readonly"/>
        <input type="text" name="manager_3" placeholder="无" readonly="readonly"/>
        <input type="text" name="tel_1" value="136****6666" readonly="readonly"/>
        <input type="text" name="tel_2" value="138****8888" readonly="readonly"/>
        <input type="text" name="tel_3" placeholder="无" readonly="readonly"/>
    </div>
    <div id="all_dep">
      <div id="dep_1" class="new_dep"> 
        <input type="text" name="dep_name[]" placeholder="部门名称" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="position_1[]" placeholder="职位" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="position_2[]" placeholder="职位" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="position_3[]" placeholder="职位" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="manager_1[]" placeholder="姓名" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="manager_2[]" placeholder="姓名" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="manager_3[]" placeholder="姓名" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="tel_1[]" placeholder="联系方式" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="tel_2[]" placeholder="联系方式" onfocus="outline_new(this)" onblur="outline_old(this)"/>
        <input type="text" name="tel_3[]" placeholder="联系方式" onfocus="outline_new(this)" onblur="outline_old(this)"/>
      </div>
    </div>    
    <div class="add_new"> 
    <a href="javascript:insert();">+</a>
    </div>
  </div>
  <div style="clear:both;"></div>
  <div class="direction">
      <strong>说明：</strong>
      <p>·易可平台当前仅支持唯一社团负责人，如果有副级负责人，请另设“主席团”等部门；</p>
      <p>·每个部门最多可以有三个部长，不足三个可以不填；</p>
      <p>·请认真填写部门部长联系方式，易可平台将给该号码发送注册邀请短信；</p>
      <p>·接收到注册邀请短信的用户在注册后，将会收到“当选该部门部长”的通知，成为该部门的部长。</p>
  </div> 
  <div class="actions">
      <input type="submit" value="保存" class="button"/>
      <input type="button" value="跳过" class="button" onclick="page_to('1','0')"/>
  </div>   
  </form>
</div>
<div style="clear:both;"></div>


<!--第二页--> 
<div class="page_2" id="1" style="display:none">
	<div class="invite_1" onclick="add_1()"><img style="display:none" src="../image/web_image/逐一添加.png"></div>
    <div class="invite_2" onclick="add_2()"><img style="display:none" src="../image/web_image/批量导入.png"></div>
    <div style="clear:both;"></div>
<form class="new_member" id="form_" action="../background/background_society/invite.php" method="post" enctype="multipart/form-data">
    <div class="way_1" style="display:none">
        <strong>逐一添加：</strong>
        <ul id="member_all">
          <li id="mem_1">
            <input type="text" name="name[]" onfocus="outline_new(this)" onblur="outline_old(this)" placeholder="姓名"/>
            <input type="text" name="telnumber[]" onfocus="outline_new(this)" onblur="outline_old(this)" placeholder="联系方式"/>
            <a href="javascript:deleteMem('mem_1');">-</a><div style="clear:both;"></div>
          </li>         
        </ul>
        <a href="javascript:insert_mem();" class="go_on">继续添加</a>
    </div>
    <div class="way_2" style="display:none">
        <strong>批量导入：</strong>
        <p>·第一步：点此<a href="">下载Excel模板</a>；</p>
        <p>·第二部：严格按模板格式填写对应内容，每个成员为一行；</p>
        <p>·第三步：上传填写好的Excel模板</p>
        <input type="file" name="members" />
    </div>
  
  <div class="direction">
      <strong>说明：</strong>
      <p>·请填写有效的成员联系方式，易可平台将给该号码发送注册邀请短信；</p>
      <p>·接收到注册邀请短信的用户在注册后，将会收到“成为**社团成员”的通知，成为此社团的成员。</p>
  </div> 
  <div class="actions">
      <input type="submit" value="邀请" class="button"/>
      <input type="button" value="跳过" class="button" onclick="page_to('2','1')"/>
  </div> 
</form>  
</div>
<!--第三页--> 
<div class="page_3" id="2" style="display:none">
<div style="height:300px;width:300px;background:#CF0;margin:auto;"><input type="submit" value="生成二维码" class="button" onclick="getCode()"/>这一页我真的写不出来了，，以后再写吧。。。<a href="http://cli.im/api/qrcode">生成二维码</a>
</div></div>






<!--侧边快捷操作面板--> 
<div class="icon_box">
     <a href=""><div id="icon_1"></div></a>
     <a href="personal_center.php"><div id="icon_2"></div></a>
     <a href="../background/background_person/login.php?action=logout"><div id="icon_3"></div></a>
</div>

</body>
</html>

