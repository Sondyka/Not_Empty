<?php

	
		function isEmptyRow($row) {
			foreach($row as $cell){
				if (null !== $cell) return false;
				
			}
			return true;
		}
		@mysqli_query($con,'DELETE FROM `otherheadlines`');
		@mysqli_query($con,'DELETE FROM `commonheadline`');
		@mysqli_query($con,'DELETE FROM `group` ');
		@mysqli_query($con,'DELETE FROM `subject`');
?>
<?php 
require "../Classes/PHPExcel.php";
require("../DB/connection.php");
if (isset($_FILES['excelfile'])&&isset($_POST['downexcel'])){
$filename=$_FILES['excelfile']['name'];
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Home/adminka/uploads/';
$loadfile= $uploaddir.$filename;
if (move_uploaded_file($_FILES['excelfile']['tmp_name'],$filepath )) {
$excelReader = PHPExcel_IOFactory::createReaderForFile($loadfile);
$excelObj = $excelReader->load($loadfile);
$worksheet = $excelObj->getSheet(0);
$highestRow = $worksheet->getHighestDataRow(); // получаем количество строк
$highestColumn = $worksheet->getHighestColumn();
$highestColumn = PHPExcel_Cell::columnIndexFromString($highestColumn);
  echo "<table  border=1>";
  $rows=0;
  for ($row = 10; $row < $highestRow;  $row++) 
  {
	echo"<tr>";
	$j=1;
	$k=1;
	$o=1;
	
	for($i=1; $i<$highestColumn; $i++){ 
		$cell0 = $worksheet->getCellByColumnAndRow($i, $row);
		$rowData = $worksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
		if(isEmptyRow(reset($rowData))){break;} 
		
		if (($cell0=='Всього:')||($cell0=='Всього')) {
			$row=$highestRow;
			break;
		}else{
	if($i==2){
			$subject = $worksheet->getCellByColumnAndRow(4, $row);
			@mysqli_query($con,'INSERT INTO `subject`(`id_subject`, `name_subject`) VALUES (NULL,"'.$subject.'")');
			$group =$worksheet->getCellByColumnAndRow(5, $row);
			$kurs =$worksheet->getCellByColumnAndRow(6, $row);
			$count =$worksheet->getCellByColumnAndRow(7, $row);
			$form =$worksheet->getCellByColumnAndRow(8, $row);
			echo $form;
			echo $group;
			echo $kurs;
			echo $count;
			echo '<br>';
			@mysqli_query($con,'INSERT INTO `group`(`id_group`, `name_group`, `kurs`, `count`, `form`) VALUES (NULL,"'.$group.'","'.$kurs.'",'.$count.',"'.$form.'")');
	}
			
	if((string)$cell0=="") {$cell0="-";}
	     if ($i>3 && $i<11){
			@mysqli_query($con,'INSERT INTO `comexcel`(`id_row`, `id_cell`, `value`) VALUES ('.$rows.','.$o.',"'.$cell0.'")');
        // echo $cell0;
$o++;
			}

		if ($i>10 && $i<28){
	//	echo "<td>".$cell0."</td>";
		@mysqli_query($con,'INSERT INTO `excel`(`id_row`, `value`, `num_sem`, `id_cell`) VALUES ('.$rows.','.$cell0.',1,'.$j.')');
			$j++;
		}
		if ($i>28 && $i<46){

		@mysqli_query($con,'INSERT INTO `excel`(`id_row`, `value`, `num_sem`, `id_cell`) VALUES ('.$rows.','.$cell0.',2,'.$k.')');
			$k++;
	    }
	  }
	}
	
	echo"</tr>";
	
	$rows++;
  }
  echo "</table>";
 
for($i=11;$i<28;$i++){ 
  $headline = $worksheet->getCellByColumnAndRow($i, 9);
 // @mysqli_query($con,'INSERT INTO `otherheadlines` (`id_item`, `item`) VALUES (NULL,"'.$headline.'")');
}
for($i=4;$i<11;$i++){ 
	$comheadline = $worksheet->getCellByColumnAndRow($i, 8);
//	@mysqli_query($con,'INSERT INTO `commonheadline` (`id_item`, `item`) VALUES (NULL,"'.$comheadline.'")');
}


?>

