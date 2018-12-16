<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Викладач">
    <title>Редагування таблиць</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Викладач</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     
    </header>
   <?php require("../DB/connection.php");?>
   <?php require("adding.php");?>
   
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
      <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Головна</span></a></li>
        <li><a class="app-menu__item" href="files.php"><i class="app-menu__icon fa fa-file-o"></i><span class="app-menu__label">Файли</span></a></li>
        <li><a class="app-menu__item active" href="added.php"><i class="app-menu__icon fa fa-plus-square-o"></i><span class="app-menu__label">Додати</span></a></li>
        <li><a class="app-menu__item " href="studyhours.php"><i class="app-menu__icon fa fa-clock-o"></i><span class="app-menu__label">Розподіл навчальних годин</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil-square-o"></i>Редагування таблиць</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Таблиці</li>
          <li class="breadcrumb-item active"><a href="#">Редагування таблиць</a></li>
        </ul>
      </div>
      <div class="row">

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Виставити оцінку</h3>
            
            <form method=POST>

            <label for="ratstud">Оберіть студента</label>
            <select name="ratstud"  class="livesearch" id="ratstud">

<?php
$query ="SELECT * FROM `students` WHERE 1";
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
  while ($row = mysqli_fetch_row($result)) {
      echo "<option value=".$row[2].">".$row[1].", ".$row[0].", ".$row[3]." курс,".$row[4]."</option>";

  }
  mysqli_free_result($result);
}
?>
</select>
<br>

<label for="ratsubject">Оберіть предмет </label>
 <select name="ratsubject"  class="livesearch" id="ratsubject">

<?php
$query ="SELECT * FROM `subject` ";
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
  while ($row = mysqli_fetch_row($result)) {
      echo "<option value=".$row[0].">".$row[1]."</option>";

  }
  mysqli_free_result($result);
}
?>
</select>
<br>
<input type=number name="rat" placeholder="Введіть оцінку"><br>
<br>
<label for="rattype">Тип оцінки</label>
 <select name="rattype"  id="rattype">
<option value="Практична робота">Практична робота</option>
<option value="Лабораторна робота">Лабораторна  робота</option>
<option value="I модуль">I модуль</option>
<option value="II модуль">II модуль</option>
<option value="Екзамен">Екзамен</option>
<option value="Залік">Залік</option>
</select>
<br>
<button type="submit" name="ratingstud" class="btn btn-outline-dark" >Поїхали</button>
            </form>


          </div>
        </div>
               

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Додати пару</h3>
           <form method="POST" >
           <label for="group">Оберіть групу </label>
            <select name="group" id="group">

<?php
$query ="SELECT * FROM `group` ";
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
  while ($row = mysqli_fetch_row($result)) {
      echo "<option value=".$row[1]."|".$row[2]."|".$row[4].">".$row[1].",".$row[2]."курс,".$row[4]."</option>";
  }
  mysqli_free_result($result);
}
?>
</select>
<br>
<label for="subject">Оберіть предмет </label>
            <select name="subject" id="subject">

<?php
$query =" SELECT * FROM `subject` ";
$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
  while ($row = mysqli_fetch_row($result)) {
      echo "<option value=".$row[1].">".$row[1]."</option>";

  }
  mysqli_free_result($result);
}
?>
</select>
<br>
<label for="weekd">Оберіть день тижня </label>
<select  name="weekd" id="weekd">
<option value="Понеділок">Понеділок</option>
<option value="Вівторок">Вівторок</option>
<option value="Середа">Середа</option>
<option value="Четвер">Четвер</option>
<option value="Пятниця">Пятниця</option>
<option value="Субота">Субота</option>
</select> 
<br>
<input type="number" name="seqnum" placeholder='Номер по порядку'><br>
<input type="number" name="audience" placeholder='Номер аудиторії'><br>
<button type=submit class="btn btn-outline-dark" name="addpara">Додати пару</button>

</form>
          </div>
        </div>
        <div class="clearfix"></div>



        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Додати студента</h3>

            <form method="POST"> 
            <label for="addstud">Оберіть групу </label>
            <select name="addstud" id="addstud">

<?php
$query ="SELECT * FROM `group` ";

$result = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{

  while ($row = mysqli_fetch_row($result)) {
      echo "<option value=".$row[1]."|".$row[2]."|".$row[4].">".$row[1].",".$row[2]."курс,".$row[4]."</option>";
  }
   
  mysqli_free_result($result);
}

?>
</select>
<br>
<label for="PIB">Введіть призвіще студента та ініціали</label>
<input type="text" name="PIB" id="PIB" >
<br>
<button type=submit class="btn btn-outline-dark" name="plusstud">Додати</button>

</form>
          
          </div>
        </div>
       


       
       
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
	
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->

<script type="text/javascript">
	      $(".livesearch").chosen();
	</script>


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