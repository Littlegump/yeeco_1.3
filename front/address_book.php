<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的社团-通讯录</title>
<link href="css/main.css" type="text/css" rel="stylesheet">
<link href="css/address_book.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="top_back transparency"></div>
  <div class="top">
      <ul>
        <li class="a">logo</li>
        <li class="b">MT音乐俱乐部</li>
        <li class="c">返回&nbsp&nbsp;<a href="square.php">易可广场>></a></li>
      </ul>
      <div style="clear:both;"></div>
  </div>
  
<!--社团封面部分-->
<div class="head">
    <div class="head_in">
    	<div class="cover_pic"><img src=""/></div>
        <div class="name"><strong>MT音乐俱乐部</strong></div>
        <div class="description"><p>这是一个，值得你去追求梦想，不断前行，不断成长的地方。在这里，你会啦啦啦啦啦啦啦啦啦！</p></div>
    </div>
</div>

<div class="body">
    <!--左侧导航按钮-->
    <div class="left">
<?php
	if(0){
?>
    	<a href="fresh_open.php"><div class="fresh_button">开启纳新</div></a>
<?php
	}else{
?>
        <a href="fresh_detail.php"><div class="fresh_button">查看纳新</div></a>
<?php
	}
?>
        <div class="buttons" id="fixedSide">
        <a href="society_home.php"><div><li><img src=""/>社团动态</li></div></a>
        <a href="address_book.php"><div class="nav_on"><li><img src=""/>通讯录</li></div></a>
        <a href="activity.php"><div><li><img src=""/>活动</li></div></a>
        <a href="society_info.php"><div><li><img src=""/>社团资料</li></div></a>
        <a href="change_term.php"><div><li><img src=""/>换届</li></div></a>
        <a href="find_sponsor.php"><div><li><img src=""/>找赞助</li></div></a>
      </div>
    </div>
    <!--中间主体内容-->
    <div class="main">
    	<div class="page">
        	<div class="title"><strong>组织部</strong><a href="">展开<i></i></a><div style="clear:both;"></div></div>
<?php
	$dId = "1";
	$uId = "3";
?>            
            <ul class="table">
                <li><span>选择</span><span>姓名</span><span>专业班级</span><span>手机号码</span><span>部门</span><span>职位</span><span>操作</span></li>
               
                <li><span><input type="checkbox" id="" value="<?php echo $uId?>" name="member_<?php echo $dId?>[]"/></span><span><a href="javascript:void(0)" id="table_a"><img src=""/>屈煜晖<i>b</i></a></span><span>通信工程1214</span><span>13201865125</span><span>吃屎部</span><span>部长</span><span><a href="javascript:void(0)" id="table_b">删除</a><a href="javascript:void(0)" id="table_c">调换部门</a><a href="javascript:void(0)" id="table_d">发送通知</a></span></li>
                
                <li><span><input type="checkbox" id="all_<?php echo $dId?>" value="<?php echo $dId?>" onchange="select_all()"/></span><span style="border-right:0;"><label for="all_<?php echo $dId?>">全选</label></span><a href="" id="load_more">加载更多<i></i></a></li>
            </ul>
        	<div class="handle">
                <p>操作：</p><a href="" id="h1">删除</a><a href="" id="h2">调换部门</a><a href="" id="h3">发送通知</a>
            </div>
            <div style="clear:both;"></div> 
        </div> 
        <div class="page">
        	<div class="title"><strong>文娱部</strong><a href="">展开<i></i></a><div style="clear:both;"></div></div>

            <div style="clear:both;"></div> 
        </div> 
        <div class="page">
        	<div class="title"><strong>外联部</strong><a href="">展开<i></i></a><div style="clear:both;"></div></div>
            
            <div style="clear:both;"></div> 
        </div>      
    </div>
      
</div>

<!--查看成员报名表-->
<div class="app_form" id="form_box" style="display:none;">

</div>

<!--侧边快捷操作面板-->
<div class="icon_box">
     <a href=""><div id="icon_1"></div></a>
     <a href="personal_center.php"><div id="icon_2"></div></a>
     <a href="../background/background_person/login.php?action=logout"><div id="icon_3"></div></a>
</div>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/main.js"></script>
<script src="js/address_book.js" type="text/javascript"></script>
</body>