<?php 
session_start(); 

require("DB/connection.php");
require("login.php");
require("authorization.php");
echo '<!DOCTYPE html>
<html lang="uk">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Automated Teachers Place</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/authorization.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

      <div class="brand">Автоматизоване місце <a href ="#" data-target="#LoginModal" data-toggle="modal"  id="log_in">викладача</a></div>

    
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Місце викладача</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Головна</a>
                    </li>
                    <li>
                        <a href="schedule.php">Розклад</a>
                    </li>
                    <li>
                        <a href="blog.php">Для студентів</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><i><b>Розклад занять</b></i>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">';
            
               echo' </div>
                <div class="col-md-6">';
                                  echo' </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>';
                
                $tbl='SELECT * FROM `rozklad` 
                INNER JOIN `group` ON `rozklad`.`id_group` = `group`.`id_group`
                INNER JOIN `subject` ON `rozklad`.`id_subject` = `subject`.`id_subject`
                INNER JOIN `audience` ON `rozklad`.`id_audience` = `audience`.`id_audience`
                INNER JOIN `weekday` ON `rozklad`.`id_week` = `weekday`.`id_week`
                WHERE `rozklad`.`id_week`=1';
                if ($result = $con->query($tbl)) {

                    /* fetch associative array */
                    while ($row = $result->fetch_assoc()) {

echo $row['name_group']." ".$row['name_subject']." ".$row['audience_number']." ".$row['weekday'];

                    }
                }
            
               echo' <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <p>Copyright &copy; Website 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
';?>