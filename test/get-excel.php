<?php
//生成唯一字符串的文件名
function getUniName(){
    return md5(uniqid(microtime(true),true));	
}
//得到文件的后缀名
function getExt($file) { 
    return substr($file, strrpos($file, '.')+1); 
}
	
//	$folder表示文件上传的目标位置，它指由根目录开始的文件路径（相对路径）
function get_excel($folder){
	//把传递来的信息入库;
	$filename = $_FILES['members']['name'];
	$type = $_FILES['members']['type'];
	$tmp_name = $_FILES['members']['tmp_name'];
	$errow = $_FILES['members']['errow'];
	
	if($errow == UPLOAD_ERR_OK){
		$ext = getExt($filename);    //得到文件的后缀名
		$filename = getUniName().".".$ext;//得到唯一字符串的文件名		
		$destination = "../../".$folder."/".$filename;//要将文件上传的目标位置
		//***********************这里预留进行文件类型判断等操作
		
		//*********************************
		    if(is_uploaded_file($tmp_name)){
		        if(move_uploaded_file($tmp_name,$destination)){
		            return  $destination;
		        }else{
			        echo "<script>alert('文件移动失败！')</script>";
		        }
		    }else{
		        echo "<script>alert('文件上传方式错误！')</script>";
		    }
		
	}else{
	    echo "<script>alert('文件上传错误！');</script>";
	}
}	
	
	
?>