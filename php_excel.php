<?php
	require_once( './PHPExcel_1.8.0/Classes/PHPExcel.php' );  

	$PHPExcel = new PHPExcel(); 

	//Set properties 设置文件属性 
	$PHPExcel->getProperties()->setCreator( 'wang dehui' ); 
	$PHPExcel->getProperties()->setLastModifiedBy( 'wdh' ); 
	$PHPExcel->getProperties()->setTitle( 'Office 2007 XLSX Test Document' ); 
	$PHPExcel->getProperties()->setSubject( 'Office 2007 XLSX Test Document' ); 
	$PHPExcel->getProperties()->setDescription( 'Test document for Office 2007 XLSX, generated using PHP classes.' ); 
	$PHPExcel->getProperties()->setKeywords( 'office 2007 openxml php' ); 
	$PHPExcel->getProperties()->setCategory( 'Test result file' ); 

	//设值 
	$PHPExcel->setActiveSheetIndex( 0 );
	$PHPExcel->getActiveSheet()->setTitle( 'wdh1' );
	$PHPExcel->getActiveSheet()->setCellValue( 'A1', '季度' ); 
	$PHPExcel->getActiveSheet()->setCellValue( 'B1', '名称' ); 
	//$PHPExcel->getActiveSheet()->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
	$PHPExcel->getActiveSheet()->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$PHPExcel->getActiveSheet()->setCellValue( 'C1', '数量' ); 
	
	//$PHPExcel->getActiveSheet()->getStyle('C1')->getAlignment()->setWrapText(true); 
	
	$PHPExcel->createSheet(); 
	$PHPExcel->setActiveSheetIndex( 1 );
	$PHPExcel->getActiveSheet()->setTitle( 'wdh2' );
	$PHPExcel->getActiveSheet()->setCellValue( 'A2', 12.4 ); 
	$PHPExcel->getActiveSheet()->setCellValue( 'B2', 3455551.2909031241 ); 
//	$PHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize( true );  
	$PHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth( 24 );
	$PHPExcel->getActiveSheet()->setCellValue( 'C2', 0.01 ); 
	$PHPExcel->getActiveSheet()->setCellValue( 'C3', '测试' ); 
	
	//设置导出文件名 
	$outputFileName = 'total.xls'; 
	$xlsWriter = new PHPExcel_Writer_Excel5( $PHPExcel ); 
	$xlsWriter->save( $outputFileName );
?>