<?php
require "../Classes/PHPExcel.php";
require("../DB/connection.php");
if (isset($_FILES['schedulefile'])&&isset($_POST['downschedule'])){
$filename=$_FILES['schedulefile']['name'];
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Home/adminka/uploads/';
$filepath= $uploaddir.$filename;
if (move_uploaded_file($_FILES['schedulefile']['tmp_name'],$filepath )) {
$elem = array();
   $excelReader = PHPExcel_IOFactory::createReaderForFile($filepath);
           $excelObj = $excelReader->load($filepath);
           $worksheet = $excelObj->getSheet(0);
            $highestRow = $worksheet->getHighestRow(); 
            $highestColumn = $worksheet->getHighestColumn();
            $highestColumn = PHPExcel_Cell::columnIndexFromString($highestColumn);
           
            for ($row = 3; $row <= $highestRow; $row++){ 
                    for($i=0; $i<$highestColumn; $i++){ 

                      $cell0 = $worksheet->getCellByColumnAndRow($i, $row);
                  echo trim($cell0) ;
                  if (trim($cell0)!==""){
                  if($i>=0 && $i<4){
                  $weekday='Понеділок';
                  if($i==2){$pieces=explode(",",$cell0);
                   array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                    }else 
                    array_push($elem,(string)$cell0);   
                    }         
   
                   
                    
                    if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                       @mysqli_query($con,$query);
                       $elem=array();}
                    


                     if($i>=4 && $i<8){
                       
                       
                       $weekday='Вівторок';
                       if($i==6){$pieces=explode(",",$cell0);
                         array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                        }else 
                        array_push($elem, (string)$cell0);   
                         }  

                         if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                          @mysqli_query($con,$query);
                          $elem=array();}

                         if($i>=8 && $i<12){
                                                
                          $weekday='Середа';
                          if($i==10){$pieces=explode(",",$cell0);
                            array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                           }else 
                           array_push($elem, (string)$cell0);   
                            }  

                            if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                              @mysqli_query($con,$query);
                              $elem=array();}

                            if($i>=12 && $i<16){                             
                              $weekday='Середа';
                              if($i==14){$pieces=explode(",",$cell0);
                                array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                               }else 
                               array_push($elem, (string)$cell0);   
                                }  
                                if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                                  @mysqli_query($con,$query);
                                  $elem=array();}

                                if($i>=16 && $i<20){
                                 
                                  $weekday='Четвер';
                                  if($i==18){$pieces=explode(",",$cell0);
                                    array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                                   }else 
                                   array_push($elem, (string)$cell0);   
                                    } 
                                  
                                  
                                    if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                                      @mysqli_query($con,$query);
                                      $elem=array();}
                            
                                    if($i>=20 && $i<24){
                                      
                                      
                                      $weekday='П\'ятниця';
                                      if($i==22){$pieces=explode(",",$cell0);
                                        array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                                       }else 
                                       array_push($elem, (string)$cell0);   
                                        }  

                                        if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                                          @mysqli_query($con,$query);
                                          $elem=array();}
                                        
                                        if($i>=24 && $i<28){
                                                                                
                                          $weekday='Субота';
                                          if($i==26){$pieces=explode(",",$cell0);
                                            array_push($elem,$pieces[0],$pieces[1],$pieces[2]);                  
                                           }else 
                                           array_push($elem, (string)$cell0);   
                                            }  
                                            if (count($elem)==6){ $query='INSERT INTO `rozklad`(`weekday`, `subject`, `group`, `audience`, `seq_num`, `kurs`, `form`) VALUES ("'.$weekday.'", "'.$elem[1].'", "'.$elem[2].'", "'.$elem[5].'", "'.$elem[0].'", "'.$elem[3].'", "'.$elem[4].'")';
                                              @mysqli_query($con,$query);
                                              $elem=array();}
                                          }
            }

          }
         }
    
    
        unlink($filepath);
    }


?>