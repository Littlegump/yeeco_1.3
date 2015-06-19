<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('../background/conf/connect.php');
$sId=$_GET['sId'];
$freshResult=mysql_fetch_array(mysql_query("select * from society_fresh where sId='$sId'"));
$sinfoResult=mysql_fetch_array(mysql_query("select Board from society where sId='$sId'"));
$fImg=substr($freshResult['fImg'],3);
$fNum=$freshResult['fNum'];
$fAnn=$freshResult['fAnn'];
$fDetail=$freshResult['fDetail'];
$fBoard=$sinfoResult['Board'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>纳新详情</title>
<link href="css/main.css" type="text/css" rel="stylesheet">
<link href="css/fresh_detail.css" type="text/css" rel="stylesheet">
</head>

<body>
<!--顶部--> 
<div class="top_back">
  <div class="top">
      <ul>
        <li class="a"><?php  echo $freshResult['sName']?>&nbsp;·&nbsp;纳新</li>
        <li class="b">返回&nbsp&nbsp;<a href="society_home.php?sId=<?php echo $sId?>">我的社团>></a></li>
      </ul>
  </div>
</div>
<div style="clear:both;"></div>

<!--封面--> 
<div class="head">
	<div class="cover"><img src="<?php echo $fImg ?>"/></div>
    <div class="summary">
    	<ul>
          <li>
            <span>申请人数</span>
            <em><?php echo $fNum ?></em>
          </li>
          <li class="course_hour">
            <span>通过人数</span>
            <em>985</em>
          </li>
          <li>
            <span>课程难度</span>
            <em>初级</em>
          </li>
        </ul>
    </div>
    <div class="head_handle">

        <div class="read_form" id="read_form">
        	<a href="javascript:read_form();" class="handle_1">
            	<i></i>
            	<em class="read_form-icon">查看（打印）报名表</em>
            </a>
        </div>

        <div class="join">
             <a href="javascript:stopFresh()" class="handle_2">停止纳新</a>
        </div>
    </div>
</div>
<div style="clear:both;"></div>

<!--主体-->
<div class="body">
    <div class="main">
    	<!--纳新公告--纳新详情-->
    	<div class="page">
        	<strong>纳新公告：</strong>
                <p><?php echo $fAnn ?></p>
        	<strong>纳新详情：</strong><a class="more" href="javascript:detail()"></a>
            	<p id="detail" style="display:none;"><?php echo $fDetail ?></p>
        </div>
        <!--当前报名-->
    	<div class="page page_2">
        	<strong>当前报名：</strong>
            <div class="table">
              <ul>
                <li><span>选择</span><span>姓名</span><span>性别</span><span>专业班级</span><span>手机号码</span><span>部门</span><span>备注</span></li>
                
                <li><span><input type="checkbox" id="" value=""/></span><span><?php echo $value['aName']?></span><span><?php echo $value['aSex']?></span><span><?php echo $value['aClass']?></span><span><?php echo $value['aTel']?></span><span><?php echo $value['sDep']?></span><span><a href="">添加备注</a></span></li>
                <li><span><input type="checkbox" id="" value=""/></span><span><?php echo $value['aName']?></span><span><?php echo $value['aSex']?></span><span><?php echo $value['aClass']?></span><span><?php echo $value['aTel']?></span><span><?php echo $value['sDep']?></span><span><a href="">添加备注</a></span></li>
                <li><span><input type="checkbox" id="" value=""/></span><span><?php echo $value['aName']?></span><span><?php echo $value['aSex']?></span><span><?php echo $value['aClass']?></span><span><?php echo $value['aTel']?></span><span><?php echo $value['sDep']?></span><span><a href="">添加备注</a></span></li>
               
                <li><span><input type="checkbox" id="all" value=""/></span><span style="border-right:0;"><label for="all">全选</label></span></li>
              </ul>
            </div>
            <div class="handle">
            <ul>
                <li>操作：<a href="">发送通知</a><a href="">添加备注</a><a href="">打印当前页</a></li>
                <li><a href="">上一页</a><a href="">1</a><a href="">2</a><a href="">3</a><a href="">下一页</a></li>
            </ul>
            </div>
            <div style="clear:both;"></div>            
        </div>
        <!--评论-->
    	<div class="page">
        	<strong>评论：</strong>
        </div>
    </div>
    
    <div class="right">
    	<div class="board">
            <strong>公告栏</strong><a href="javascript:edit()" id="a1">编辑</a><a href="javascript:save()" style="display:none" id="a2">保存</a>
				<br/><input type="hidden" id="sId" value="<?php echo $sId?>"/><textarea name="board" id="board_text" placeholder="不超过140个字符" readonly="readonly"><?php echo $fBoard ?></textarea>
            
        </div>
        <div class="advertisement">
          <div class="ad_title">
            <li class="ad_title_li">推广链接</li>
          </div>
          <div class="ad_img"><img src="../image/web_image/测试图片/9.png"></div>
          <div class="ad_img"><img src="../image/web_image/测试图片/20.png"></div>
          <div class="ad_img"><img src="../image/web_image/测试图片/8.png"></div>
          <div class="ad_img"><img src="../image/web_image/测试图片/9.png"></div>
          <div style="clear:both;"></div>
      </div> 
    </div>
</div>

<!--查看、打印报名表--> 
<div class="app_form" id="form_box" style="display:none;">
	<strong>报名表<a href="javascript:return_main()">&times;</a></strong>
	
</div>
<!--侧边快捷操作面板--> 
<div class="icon_box">
	<a href=""><div id="icon_1"></div></a>
    <a href="personal_center.php"><div id="icon_2"></div></a>
    <a href="../background/background_person/login.php?action=logout"><div id="icon_3"></div></a>
</div>

<script src="js/jquery-1.11.1.js"></script>
<script src="js/main.js"></script>
<script src="js/fresh_detail.js" type="text/javascript"></script>

</body>
</html>