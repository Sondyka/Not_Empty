<?php
if (isset($_POST['userfile'])&&isset($_POST['down_file'])){
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Home/uploads/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . 
	$_FILES['userfile']['name'])) {
    print "File is valid, and was successfully uploaded.";


    
} else {
    print "There some errors!";
}}
?>

    <form class="addfiles" enctype="multipart/form-data" method="post" >
<div class="form-inline">
  <input type="file" name="userfile" id="file" class="input-file">
  <label for="file" class="btn btn-tertiary js-labelFile">
   <i class="fas fa-download"></i>
    <span class="js-fileName">Оберіть файл</span>
  </label>
  <input type="submit" name='down_file' class="btn btn-outline-dark" >
</div>
     
</form>