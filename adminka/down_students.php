<?php
require "../Classes/PHPExcel.php";
require("../DB/connection.php");
if (isset($_FILES['studfile'])&&isset($_POST['downstudent'])){
$filename=$_FILES['studfile']['name'];
$select= $_POST['select'];
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Home/adminka/uploads/';
$filepath= $uploaddir.$filename;
if (move_uploaded_file($_FILES['studfile']['tmp_name'],$filepath )) {
$type =  explode(".", $filename);
$type= end($type);
  if ($type=='txt'){
$lines = file($uploaddir.$filename);
$count=count($lines);

for($i=0;$i<$count;$i++){
 @mysqli_query($con,'INSERT INTO `students`(`group`, `PIB`, `id_stud`) VALUES ("'.$select.'","'.$lines[$i].'",NULL)');
}

  }elseif($type=='xls'||$type=='xlsx'){
    $excelReader = PHPExcel_IOFactory::createReaderForFile($filepath);
    $excelObj = $excelReader->load($filepath);
    $worksheet = $excelObj->getSheet(0);
     $highestRow = $worksheet->getHighestRow(); 
     $highestColumn = $worksheet->getHighestColumn();
     $highestColumn = PHPExcel_Cell::columnIndexFromString($highestColumn);

     for ($row = 3; $row <= $highestRow; $row++){ 
             for($i=0; $i<$highestColumn; $i++){ 

               $student = $worksheet->getCellByColumnAndRow($i, $row);
            echo $student;
            @mysqli_query($con,' INSERT INTO `students`(`group`, `PIB`, `id_stud`) VALUES ("'.$select.'","'.$student.'",NULL)');
           

              }
            }
    
}


}
unlink($filepath);
header('Location: http://localhost/Home/adminka/index.php');
}
  ?>