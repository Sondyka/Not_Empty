<?php
require "../Classes/PHPExcel.php";
if (isset($_FILES['studfile'])&&isset($_POST['downstudent'])){
    $filename=$_FILES['studfile']['name'];
   $select= $_POST['select'];
echo $filename;
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Home/adminka/uploads/';

if (move_uploaded_file($_FILES['studfile']['tmp_name'], $uploaddir . 
	$_FILES['studfile']['name'])) {
$type =  explode(".", $filename);
$type= end($type);
  if ($type=='txt'){
$lines = file($uploaddir.$filename);
$count=count($lines);

for($i=0;$i<$count;$i++){
 @mysqli_query($con,'INSERT INTO `students`(`group`, `PIB`, `id_stud`) VALUES ("'.$select.'","'.$lines[$i].'",NULL)');
}

  }elseif($type=='xls'||$type=='xlsx'){

echo "xls";



$excelReader = PHPExcel_IOFactory::createReaderForFile($uploaddir.$filename);
$excelObj = $excelReader->load($uploaddir.$filename);
$worksheet = $excelObj->getSheet(0);
$highestRow = $worksheet->getHighestDataRow(); // получаем количество строк
$highestColumn = $worksheet->getHighestDataColumn(); // а так можно получить количество колонок
for ($col=1; $col < 11;  $col++) 
{
   for ($row = 1; $row < $highestRow;  $row++) 
  {

	
    
		
			$cell= $worksheet->getCellByColumnAndRow($col, $row);
			echo $cell;
	  }
  }
  
 

}}}
  ?>