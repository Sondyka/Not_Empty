<style>
.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
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
</style>

<?php

$grparr=array();
$weekd=array();
$res = mysqli_query($con, 'SELECT DISTINCT concat(`group`,"|",`kurs`,"|",`form`) as grp FROM `rozklad`') or die("Ошибка " . mysqli_error($link)); 
if($res)
{
  while($row = mysqli_fetch_row($res)){
    $grparr[] = $row[0];
 
  }
}


$res = mysqli_query($con, 'SELECT DISTINCT  `weekday` FROM `rozklad`') or die("Ошибка " . mysqli_error($link)); 
if($res)
{
  while($row = mysqli_fetch_row($res)){
    $weekd[] = $row[0];
 
  }
}



echo'<div class="col-12  center"><input type="text" class = "searchTerm" id="Search" onkeyup="myFunction()" placeholder="Введіть пошукове слово" ></div>
<div class="row">';


foreach ($grparr as &$value0) {
    $piec=explode("|",$value0);
    echo"<div class='col-sm-6 target'>";
    echo '<div class="grp">Група '.$piec[0].' '.$piec[1].' курс '.$piec[2].'</div>';
    foreach ($weekd as &$value) {
    $res = mysqli_query($con,'SELECT * FROM `rozklad` WHERE `weekday`= "'.$value.'" AND `group`="'.$piec[0].'" AND`kurs`="'.$piec[1].'" AND`form`="'.$piec[2].'"');
    echo'<table border=1 width="90%">';
    if(mysqli_num_rows($res) != 0)
    {
        
        
         echo'<tr> ';
        echo'<th colspan="3"class=" dy" >'.$value.'</th>
        </tr>';
   
  while($row = mysqli_fetch_row($res)){
    
    
    echo'
  <tr>
    <td>'.$row[4].'</td>
    <td>'.$row[1].'</td>
    <td>'.$row[3].'</td>
  </tr>
';
 
  }
       
 
}
echo'</table>'; 
}
echo"</div>";
}
echo"</div>";




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