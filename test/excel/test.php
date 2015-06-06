<?php
	/*
	应当符合下列规定使用phpexcel之前：

	* PHP 5.2.0或更高版本

	* PHP扩展php_zip启用*）

	* PHP扩展php_xml启用

	* PHP扩展php_gd2启用（如果不是编译）

	*）
	*/
	/*require_once('./PHPExcel.php'); 
	$file_name='./abc.xls';
	$php_excel_obj = new PHPExcel(); 
	$php_reader = new PHPExcel_Reader_Excel2007();

	if(!$php_reader->canRead($file_name)) 
	{ 
	$php_reader= new PHPExcel_Reader_Excel5(); 
	if(!$php_reader->canRead($file_name)) 
	{ 
	echo'NO Excel!'; 
	} 
	} 
	$php_excel_obj = $php_reader->load($file_name); 
	$current_sheet =$php_excel_obj->getSheet(0); */
	header('content-type:text/html;charset=utf-8');	 
	require_once('./PHPExcel.php'); 
	//$file_name='./excel/abc.xls';
	$excel_obj = new PHPExcel();
	//echo "<pre>";
	//var_dump($excel_obj);exit;
	$objWriter = new PHPExcel_Writer_Excel5($excel_obj); 
	$excel_obj->setActiveSheetIndex(0); 
	$act_sheet_obj=$excel_obj->getActiveSheet(); 

	$act_sheet_obj->setTitle('sheet'); 
	$act_sheet_obj->setCellValue('A1','abc');
	$act_sheet_obj->setCellValue('B1','大飞扬'); 
	$act_sheet_obj->setCellValue('A2', 126); 
	$act_sheet_obj->setCellValue('A3', 24446);
	$act_sheet_obj->setCellValue('B2','2'); 
	$act_sheet_obj->setCellValue('B3','3'); 
	$act_sheet_obj->setCellValue('C1','3'); 
	$file_name = "abc.xls"; 
	$objWriter->save($file_name); 
	echo "导出成功";
?>