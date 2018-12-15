<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Викладач</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">Викладач</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
    
    </header>
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
        <li><a class="app-menu__item active" href="files.php"><i class="app-menu__icon fa fa-file-o"></i><span class="app-menu__label">Файли</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Таблиці</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.php"><i class="icon fa fa-circle-o"></i> Базові Таблиці</a></li>
            <li><a class="treeview-item" href="table-data-table.php"><i class="icon fa fa-circle-o"></i> Інші Таблиці</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Дічь якась</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="page-invoice.php"><i class="icon fa fa-circle-o"></i> Друкована дічь</a></li>
            <li><a class="treeview-item" href="page-calendar.php"><i class="icon fa fa-circle-o"></i> Календарна дічь</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class=" fa fa-file-excel-o"></i> Файли</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Файли</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">План на семестр</h3>
            <form method="post" action='down_excel.php' enctype="multipart/form-data">
                 
                 <div>
                   <label for="excel">Оберіть </label>
                   <input type="file" id="excel" name="excelfile" accept=".xls, .xlsx">
                 </div>
                 <div>
                   <button name='downexcel' class="btn btn-outline-dark" >Вперед</button>
                 </div>
               </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Розклад пар</h3>
            <form method="post" action='down_schedule.php' enctype="multipart/form-data">
                 
  <div>
    <label for="sched">Оберіть </label>
    <input type="file" id="sched" name="schedulefile" accept=".xls, .xlsx">
  </div>
  <div>
    <button name='downschedule' class="btn btn-outline-dark" >Вперед</button>
  </div>
</form>


          </div>
        </div>

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Список студентів</h3>
           
            <form method="post" action='down_students.php' enctype="multipart/form-data">
            <label for="select">Оберіть групу </label>
            <select name="select">
          <option value="PI">PI</option>
          <option value="ST">ST</option>
      </select>
  <div>
    <label for="stu">Оберіть </label>
    <input type="file" id="stu" name="studfile" accept=".txt, .xls, .xlsx">
  </div>
  <div>
    <button name='downstudent' class="btn btn-outline-dark" >Вперед</button>
  </div>
</form>
           
          </div>
        </div>




   <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Приклади</h3>
           
          <?php  require('example.php')?>

            
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