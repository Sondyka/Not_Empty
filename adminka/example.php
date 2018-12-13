<?php
$dir = $_SERVER['DOCUMENT_ROOT'].'/Home/adminka/example/';
$cdir = scandir($dir); 
foreach ($cdir as $value) {
    // если это "не точки" и не директория
    if (!in_array($value,array(".", "..")) 
        && !is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
         
        $result[] = $value;
     }
} 


foreach ($result as &$value) {
    
    echo' <img width="50" src="'.$dir.$value.'down.png" />
    <br><div><a style="font-size:2vmin !important;"href="'.$dir.$value.'" >'.$value.'</a></div>';
}


?>