<?php
require "Classes/PHPExcel.php";
		/*$tmpfname = "test.xls";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		
		echo "<table>";
		for ($row = 11; $row <= ($lastRow); $row++) {
			if($worksheet->getCell('E'.$row)->getValue()=="Всього:"){ 
				break;
			}
			 echo "<tr><td>";
			 echo $worksheet->getCell('E'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('F'.$row)->getValue();
			 echo "</td><tr>";
		}
		echo "</table>";*/
		function isEmptyRow($row) {
			foreach($row as $cell){
				if (null !== $cell) return false;
			}
			return true;
		}
?>
<?php 
$array = array();
$mssiv=array();


$loadfile = "test.xls";
$excelReader = PHPExcel_IOFactory::createReaderForFile($loadfile);
$excelObj = $excelReader->load($loadfile);
$worksheet = $excelObj->getSheet(0);
$highestRow = $worksheet->getHighestRow(); // получаем количество строк
$highestColumn = $worksheet->getHighestColumn(); // а так можно получить количество колонок
  echo "<table  border=1>";
  for ($row = 10; $row <= $highestRow;  $row++) // обходим все строки
  {
	  echo"<tr>";
	for($i=4;$i<15;$i++){ 
		$rowData = $worksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
	
		if(isEmptyRow(reset($rowData))) { echo"pysto";
			continue; } 
	$cell0 = $worksheet->getCellByColumnAndRow($i, $row); //артикул
   /* $cell1 = $worksheet->getCellByColumnAndRow(5, $row); //артикул
    $cell2 = $worksheet->getCellByColumnAndRow(6, $row); //наименование
    $cell3 = $worksheet->getCellByColumnAndRow(7, $row); //количество
    $cell4 = $worksheet->getCellByColumnAndRow(8, $row); //цена
    $cell5 = $worksheet->getCellByColumnAndRow(9, $row); //валюта
	$cell6 = $worksheet->getCellByColumnAndRow(10, $row); //единица измерения
	$cell7 = $worksheet->getCellByColumnAndRow(11, $row); //валюта
	$cell8 = $worksheet->getCellByColumnAndRow(12, $row);
	$cell9 = $worksheet->getCellByColumnAndRow(13, $row); //валюта
	$cell10 = $worksheet->getCellByColumnAndRow(14, $row);*/
	if ($cell0=="Всього:"){
		break;
	}
	echo "<td>".$cell0."</td>";
//	array_push($array,$cell0);
	}
	//array_push($mssiv, $array);
	echo"</tr>";
	
	
	//echo "<tr><td>".$cell0."</td><td>".$cell1."</td><td>".$cell2."</td><td>".$cell3."</td><td>".$cell4."</td><td>".$cell5."</td><td>".$cell6."</td><td>".$cell7."</td><td>".$cell8."</td><td>".$cell9."</td><td>".$cell10."</td><tr>";
   /* $sql = "INSERT INTO `price` (`article`,`name`,`quantity`,`price`,`currency`,`unit`) VALUES
('$cell1','$cell2','$cell3','$cell4','$cell5','$cell6')";
	$query = mysql_query($sql) or die('Ошибка чтения записи: '.mysql_error());
	*/
  }
  echo "</table>";

  foreach ($array as $value) {
    echo $value;
}

?>


<?php 
/*$excel = PHPExcel_IOFactory::load('test.xls');
foreach($excel ->getWorksheetIterator() as $worksheet) {
	$lists[] = $worksheet->toArray();
   }

   foreach($lists as $list){
 echo '<table border="1">';
 // Перебор строк
 foreach($list as $row){
   echo '<tr>';
   // Перебор столбцов
   foreach($row as $col){
     echo '<td>'.$col.'</td>';
 }
 echo '</tr>';
 }
 echo '</table>';
}*/
?>
<?php




/*


$inputFileName = "test.xls";

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();
echo "<table border=1>";
//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                    NULL,
                                    TRUE,
									FALSE);
									if(isEmptyRow(reset($rowData))) { echo"pysto";
										continue; } 
	//  Insert row data array into your database of choice here
	echo "<tr><td>".$sheet->getCell('C'.$row)->getValue()."</td></tr>";
}
echo"</table>";*/
?>
