
include("controller/file.php");
<? 

function addfiles($idsubmenu) {
 if(is_dir( "files/".$idsubmenu)==false){
    mkdir("files/".$idsubmenu."/", 0777);
     }
 
 
           if (move_uploaded_file($_FILES['file']['tmp_name'], "files/".$idsubmenu."/".basename($_FILES['file']['name'])))
    {
        echo "файл успешно загружен";
    }
    }
    ?>

    <form class="addfiles" enctype="multipart/form-data" method="post" hidden>
<div class="form-inline">
  <input type="file" name="file" id="file" class="input-file">
  <label for="file" class="btn btn-tertiary js-labelFile">
   <i class="fas fa-download"></i>
    <span class="js-fileName">Оберіть файл</span>
  </label>
  <input type="submit" class="btn btn-outline-dark" onclick="';addfiles($id_submenu);echo'">
</div>
     
</form>