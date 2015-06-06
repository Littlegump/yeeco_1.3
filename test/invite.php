<?php
require_once('../background/conf/connect.php');
error_reporting(E_ALL & ~E_NOTICE);
require_once('../background/background_society/get-excel.php');

$folder = "background/userFile";//	$folder表示文件上传的目标位置，它指由根目录开始的文件路径（相对路径）
$upload = get_excel($folder);
if($upload){
	echo "seccess";
	}
?>