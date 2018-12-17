<style>
.search {
  width: 100%;
  position: relative
}

.searchTerm {
 
  width: 57%;
  border: 3px solid #223685;
  padding: 5px;
  font-size: medium;
  border-radius: 5px;
  outline: none;
  color: #454B56;
}

.searchTerm:focus{
  color: #223685;
}

.grp{
    text-align:center;
    color: #000B44;
    font-style: italic;
    font-size: medium;
    font-weight: 700;

}
.dy{
    font-weight: 500;
    text-align:center;
    font-style: oblique;
    color: #00126A;

}
.brd {
    border: 4px double black;
    height: 50px;
    }
    
</style>

<?php


echo'<div class="col-12  center"><input type="text" class = "searchTerm" id="Search" onkeyup="myFunction()" placeholder="Введіть пошукове слово" ></div>
<div class="col-10">';




echo'<div class="row ">
<div class="col-md-1 brd ">

</div>
<div class="col-md-3 brd ">ПІБ
</div>
<div class="col-md-3 brd ">Предмет
</div>
<div class="col-md-3 brd ">Тип оцінки
</div>
<div class="col-md-2 brd ">Оцінка(по 100 бальній )
</div>
</div>';
$res = mysqli_query($con, 'SELECT * FROM rating INNER JOIN subject ON subject.id_subject =rating.id_subject INNER JOIN students ON students.id_stud=rating.id_stud ') or die("Ошибка " . mysqli_error($link)); 
if($res)
{
 
  while($row = mysqli_fetch_assoc($res)){

   echo'<div class="row  target">
   <div class="col-md-1 brd ">
   <i class="fa fa-user-circle" aria-hidden="true"></i>
   </div>
   <div class="col-md-3 brd ">'.$row['PIB'].'
   </div>
   <div class="col-md-3 brd ">'.$row['name_subject'].'
   </div>
   <div class="col-md-3 brd ">'.$row['type'].'
   </div>
   <div class="col-md-2 brd ">'.$row['rat'].'
   </div>
   </div>';

  }

}


echo"</div> ";







?>
<script type="text/javascript">
function myFunction() {
    var input = document.getElementById("Search");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('target');
  
    for (i = 0; i < nodes.length; i++) {
      if (nodes[i].innerText.toLowerCase().includes(filter)) {
        nodes[i].style.display = "block";
      } else {
        nodes[i].style.display = "none";
      }
    }
  }

  </script>