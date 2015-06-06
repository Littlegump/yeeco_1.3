<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开启纳新</title>
</head>
<link href="css/fresh_open.css" type="text/css" rel="stylesheet">
<link href="css/main.css" type="text/css" rel="stylesheet">
<script src="js/main.js"></script>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/fresh_open.js" type="text/javascript"></script>
<body>

<div class="body">   
  <div class="main">
    <div class="contact_title" id="contact_title">
        <li class="on">上传海报</li>
        <li>纳新详情</li>
        <li>创建报名表</li>
        <li>开启纳新</li>
    </div>
    
    <div class="contact">
    <form action="background/fresh-open-form.php" method="post" name="activity_establish" id="activity_form" enctype="multipart/form-data">
    <input type="hidden" name="sId" value="<?php echo $id?>">
    <input type="hidden" name="sName" value="<?php echo $sName?>">
      <div class="page_1" id="0">
          <ul>
            <li>
              <label>海报尺寸：</label>
              <input type="radio" checked/><label for="size_2">245*325px</label>
              <div style="clear:both;"></div>
            </li>
            <li>
              <label>选择文件：</label>
              <input type='text' name='fImg' id='textfield' readonly="readonly"/>
              <div class="photo">
                  <div class="ph_2">
                      <input type='button'/>
                      <input type="file" class="file" name="pic" onchange="document.getElementById('textfield').value=this.value" />
                  </div>
              </div>
            </li>
            <li>
              <label></label>
              <a href="">移除图片</a><span>（如果未上传将使用默认图片）</span>
            </li>
            <li><div class="button" onclick="javascript:page_to('1','0');">下一步</div></li>
          </ul>
      <div style="clear:both;"></div> 
      </div>
      
      <div class="page_2" id="1"  style="display:none;">
          <ul>
            <li>
              <label for="apply_time"><span>*</span>报名时间：</label>
              <input type="date" name="begin_date"  onfocus="outline_new(this)" onblur="outline_old(this)"/><input type="time" name="begin_time"  onfocus="outline_new(this)" onblur="outline_old(this)"/>-
              <input type="date" name="end_date"  onfocus="outline_new(this)" onblur="outline_old(this)"/><input type="time" name="end_time"  onfocus="outline_new(this)" onblur="outline_old(this)"/>
            </li>
            <li>
              <label for="notice"><span>*</span>纳新公告：</label>
              <textarea name="notice" placeholder="用一句话为你的社团吸引人气（10~40个字）" required  onfocus="outline_new(this)" onblur="outline_old(this)"></textarea>
            </li>
            <li>
              <label for="detail">&nbsp;详细说明：</label>
              <textarea name="detail" placeholder="输入纳新的详细说明，介绍社团详情或纳新规则等（0~500个字）" onfocus="outline_new(this)" onblur="outline_old(this)"></textarea>
            </li>
            <li><div style="width:304px;margin:auto;"><div class="button_2" onclick="javascript:page_to('0','1');">上一步</div><div class="button_2" onclick="javascript:page_to('2','1');">下一步</div></div></li>
          </ul>
      <div style="clear:both;"></div> 
      </div>
      
      <div class="page_3" id="2" style="display:none;">
          <ul>
            <li>
                <label for="aa"><span>*</span>基本信息</label><input type="checkbox" id="aa" checked disabled/>
            </li>
            <li>
                <img src="../image/web_image/纳新报名表.png" width="550"  /> 
            </li>
            <li>
                您还可以设置最多三个开放式问题<span class="gray">（回答字数不超过400字）</span>： 
            </li>
            <li>
                <label for="ques_1">设置问题一：</label><input type="checkbox" id="set_1" checked onclick="javascript:judge_check('1');"/>
                <input type="text" name="que_1" placeholder="在这里输入问题（4~25字）" id="ques_1" onfocus="outline_new(this)" onblur="outline_old(this)"/><br/>
                <label for="ques_2">设置问题二：</label><input type="checkbox" id="set_2"  onclick="javascript:judge_check('2');"/>
                <input type="text" name="que_2"  placeholder="在这里输入问题（4~25字）" id="ques_2" style="display:none;" onfocus="outline_new(this)" onblur="outline_old(this)"/><br/>
                <label for="ques_3">设置问题三：</label><input type="checkbox" id="set_3"  onclick="javascript:judge_check('3');"/>
                <input type="text" name="que_3"  placeholder="在这里输入问题（4~25字）" id="ques_3" style="display:none;" onfocus="outline_new(this)" onblur="outline_old(this)"/>
            </li>
            <li><div style="width:304px;margin:auto;"><div class="button_3" onclick="javascript:page_to('1','2');">上一步</div><div class="button_3" onclick="javascript:submit_btn();">开启纳新</div></div></li>
          </ul>
      <div style="clear:both;"></div>
      </div>
    </form>  
     
    </div>
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

</body>
</html>
