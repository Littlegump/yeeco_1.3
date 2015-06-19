<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('../background/conf/connect.php');
$sId=$_GET['sId'];
$uId=$_GET['uId'];
//查找社团信息
$sInfo=mysql_fetch_array(mysql_query("select * from society where sId='$sId'"));
//查找纳新信息
$fInfo=mysql_fetch_array(mysql_query("select * from society_fresh where sId='$sId'"));
//查看是否关注此社团
$concern=mysql_fetch_array(mysql_query("select isManage from user_society_relation where societyId='$sId' and userId='$uId'"));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>社团详情</title>
<link href="css/main.css" type="text/css" rel="stylesheet">
<link href="css/society_visitor.css" type="text/css" rel="stylesheet">
</head>

<body>
<!--顶部--> 
<div class="top_back">
  <div class="top">
      <ul>
        <li class="a"><?php echo $sInfo['sName']?></li>
        <li class="b">返回&nbsp&nbsp;<a href="square.php">易可广场>></a></li>
      </ul>
  </div>
</div>
<div style="clear:both;"></div>

<!--封面--> 
<div class="head">
	<div class="cover"><img src="<?php echo substr($sInfo['sImg'],3)?>"/></div>
    <div class="summary">
    	<ul>
          <li>
            <span>当前状态</span>
        <?php 
			if($sInfo['isFresh']){		
		?>
            	<em>正在纳新</em>           
        <?php
			}else{
		?>
        		<em>纳新关闭</em>
        <?php 		
			}
		?>
          </li>
          <li>
            <span>申请人数</span>
            <em><?php echo $fInfo['fNum']?></em>
          </li>
          <li class="course_hour">
            <span>现有成员</span>
            <em><?php echo $sInfo['sNum']?></em>
          </li>
        </ul>
    </div>
    <div class="head_handle">

        <div class="concern" id="concern">
        	<a href="javascript:concern();" class="handle_1">
            	<i></i>
            	<em class="concerned-icon">关注此社团</em>
            </a>
        </div>
        <div class="join">
             <a href="javascript:apply_form();" class="handle_2">申请加入</a>
        </div>
        
    </div>
</div>
<div style="clear:both;"></div>

<!--主体-->
<div class="body">
	<div class="main">
    	<!--基本信息-->
    	<div class="page" id="page_1">
        	<div class="cover_pic"><img src="<?php echo substr($sInfo['sImg'],3)?>"/></div>
        	<div class="base_info">
              <ul>
                <li><label style="margin-top:7px;">社团名称：</label><strong><?php echo $sInfo['sName']?></strong></li>
                <li><label>创建人：</label><p><?php echo $sInfo['sPrincipal']?></p></li>
                <li><label>社团性质：</label><p><?php echo $sInfo['sCate']?></p></li>
                <li><label>社团简介：</label><p><?php echo $sInfo['sDesc']?></p></li>
              </ul>
            </div>
        </div>
        
    	<!--纳新公告--纳新详情-->
    	<div class="page">
        	<strong>纳新公告：</strong>
        <?php if($sInfo['isFresh']){
		?>
               <p><?php echo $fInfo['fAnn']?></p>
        	<strong>纳新详情：</strong><a class="more" href="javascript:detail()"></a>
            	<p id="detail"><?php echo $fInfo['fDetail']?></p>			
		<?php 
			  }else{
		?>
        		<p>还未开启纳新！</p>
        	<strong>纳新详情：</strong><a class="more" href="javascript:detail()"></a>
            	<p id="detail">无</p>
		<?php 
		      } 
		?>
 
        </div>
        
        <!--评论-->
    	<div class="page">
        	<strong>评论：</strong>
        </div>
    </div>
    
    <div class="right">
    <!--公告栏-->
    	<div class="board">
            <strong>公告栏</strong>
				<br/><textarea name="board" id="board_text" placeholder="不超过140个字符" readonly="readonly"><?php echo $sInfo['Board']?></textarea>
            
        </div>
    <!--社团二维码-->
    	<div class="society_code">
            <strong>社团二维码</strong>
				<div><img src="" /></div>
        </div>
    </div>
</div>


<!--查看、打印报名表--> 
    <input type="hidden" id="isManage" value="<?php echo $concern['isManage']?>">
    <input type="hidden" id="sId" value="<?php echo $sId?>">
    <input type="hidden" id="uId" value="<?php echo $uId?>">
    <input type="hidden" id="sName" value="<?php echo $sInfo['sName']?>">
    <input type="hidden" id="fQue_1" value="<?php echo $fInfo['fQue_1']?>">
    <input type="hidden" id="fQue_2" value="<?php echo $fInfo['fQue_2']?>">
    <input type="hidden" id="fQue_3" value="<?php echo $fInfo['fQue_3']?>">
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
<script src="js/jquery.form.js" type="text/javascript"></script>
<script src="js/pic_preview.js" type="text/javascript"></script>
<script src="js/society_visitor.js" type="text/javascript"></script>
<?php
	if($concern['isManage']){
		//已关注
		echo "<script>change_concern(1);</script>";
	}
	if(mysql_num_rows(mysql_query("select aId from apply_information_unselected where uId='$uId' and sId='$sId'"))){
		echo "<script>$('.handle_2').text('等待审核').removeAttr('href');</script>";
	}
?>
</body>
</html>