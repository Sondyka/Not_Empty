<?php
$dir = $_SERVER['DOCUMENT_ROOT'].'/Home/adminka/example/';
$cdir = scandir($dir); 
$path='/Home/adminka/';
foreach ($cdir as $value) {
    // если это "не точки" и не директория
    if (!in_array($value,array(".", "..")) 
        && !is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
         
        $mmm[] = $value;
     }
} 
echo"<div class='row'>";

foreach ($mmm as &$value) {
    
    echo' 
   <div class="col-4"><center><img width="50" src="'.$path.'down.png" /><br><a style="font-size:2vmin !important;"href="'.$path."example/".$value.'" >'.$value.'</a></center></div>';
}

echo'</div>';
?>