<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Викладач">
    <title>Розподіл навчальної роботи в годинах</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <style type="text/css">
   
    th {
     
     text-align: center; /* Выравнивание по левому краю */
    }
  
  </style>

  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Викладач</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     
    </header>
    <?php 
    require("../DB/connection.php");
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="1.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Ім'я викладча</p>
          <p class="app-sidebar__user-designation">Факультет океанології</p>
        </div>
      </div>

      <ul class="app-menu">
      <li><a class="app-menu__item " href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Головна</span></a></li>
        <li><a class="app-menu__item" href="files.php"><i class="app-menu__icon fa fa-file-o"></i><span class="app-menu__label">Файли</span></a></li>
        <li><a class="app-menu__item " href="added.php"><i class="app-menu__icon fa fa-plus-square-o"></i><span class="app-menu__label">Додати</span></a></li>
        <li><a class="app-menu__item active" href="studyhours.php"><i class="app-menu__icon fa fa-clock-o"></i><span class="app-menu__label">Розподіл навчальних годин</span></a></li>
      </ul>

      
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Розподіл навчальної роботи в годинах</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Розподіл навчальної роботи в годинах</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
            <table border=1>
  <tr>

<?php 

$query ="SELECT * FROM `commonheadline`";
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 

if($result)
{
  while ($row = mysqli_fetch_row($result)) {
      echo "<th rowspan='2' style='writing-mode: vertical-rl;'>".$row[0]."</th>";
  }

  mysqli_free_result($result);
}
?>


    <th colspan="17">Осінній семестр (І)</th>
    <th colspan="17">Весняний семестр(ІІ)</th>

  </tr>
  <tr>

<?php 
for($i=1;$i<3;$i++){
$query ="SELECT * FROM `otherheadlines`";
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
  while ($row = mysqli_fetch_row($result)) {
      echo "<td style='writing-mode: vertical-rl;'>".$row[1]."</td>";
  }
  mysqli_free_result($result);
 }
}
?>

    

  
  </tr>
  <tr>
  <?php
  $query ="SELECT COUNT(DISTINCT `id_row`) FROM comexcel";

$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
  $row = mysqli_fetch_row($result);
     $count= $row[0];
  
for ($i=1;$i<= $count;$i++){

 echo' <tr>';
  $res = mysqli_query($con, 'SELECT * FROM `comexcel` WHERE `id_row`='.$i) or die("Ошибка " . mysqli_error($link)); 
if($res)
{
  while($r = mysqli_fetch_row($res)){
   echo' <td>'. $r[2].'</td>';
 
  }
}

$res2 = mysqli_query($con, 'SELECT * FROM `excel` WHERE `id_row`='.$i) or die("Ошибка " . mysqli_error($link)); 
if($res2)
{
  while($r2 = mysqli_fetch_row($res2)){
   echo' <td>'. $r2[1].'</td>';
 
  }
}
  
 echo' </tr>';



}
 
}

?>

    
  </tr>
</table>
            </section>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>