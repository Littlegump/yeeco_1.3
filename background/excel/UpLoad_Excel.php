<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once '../../conf/connect.php';
require_once 'PHPExcel.php';
require_once 'PHPExcel\IOFactory.php';
require_once 'PHPExcel\Reader\Excel5.php';
function uploadFile($sId,$file){	
if($file){
//上传到服务器上的临时文件名
$filetempname = $_FILES['members']['tmp_name'];
//自己设置的上传文件存放路径
$filePath = '../../excel/userExcel/';
$str = ""; 
//注意设置时区
$time=date("y-m-d-H-i-s");//去当前上传的时间 
    //获取上传文件的扩展名
$extend=strrchr ($file,'.');
//上传后的文件名
$name=$time.$extend;
$uploadfile=$filePath.$name;//上传后的文件名地址
//move_uploaded_file() 函数将上传的文件移动到新位置。若成功，则返回 true，否则返回 false。
$result=move_uploaded_file($filetempname,$uploadfile);//假如上传到当前目录下

if($result){
	$objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format
	$objPHPExcel = $objReader->load($uploadfile);
	$sheet = $objPHPExcel->getSheet(0);
	$highestRow = $sheet->getHighestRow(); // 取得总行数
	$highestColumn = $sheet->getHighestColumn(); // 取得总列数
	
	//循环读取excel文件,读取一条,插入一条
	for($j=2;$j<=$highestRow;$j++){
		for($k='A';$k<=$highestColumn;$k++)
			{
				$str .= iconv('utf-8','utf-8',$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()).'\\';//读取单元格
			}
		//explode:函数把字符串分割为数组。
			$strs = explode("\\",$str);
			mysql_query("insert into pre_user(userName,userTel,userSchool) values('$strs[0]','$strs[1]','$strs[2]')");
			$pid= mysql_insert_id();
			mysql_query("insert into preuser_society_relation(pid,sid,isDepManager) values('$pid','$sId','0')");
			$str="";	
		}
		unlink($uploadfile);//删除上传的excel文件
		return 1;//导入成功	
	}else{
		return 0;
		}
}else{
	return 0;
	}
}
?>