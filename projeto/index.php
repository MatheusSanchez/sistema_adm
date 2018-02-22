<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Administrativo</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="css/fontastic.css">
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> 


        
      </head>
      <body>
        <div class="page">
          <header class="header">
           <?php require "menus/menu_topo.html"; ?>
         </header>
         <div class="page-content d-flex align-items-stretch"> 
          <!-- Side Navbar -->
          <nav class="side-navbar" id="menu_lateral">
            <?php require "menus/menu_principal.html"; ?>
          </nav>

          <div class="content-inner" >

           <?php  

         
           if(isset($_GET['pg'])){
             require "conteudo/".$_GET['pg'].".html"; 
           }else{
             require "conteudo/home.html"; 
           }
          

           ?>


         </div>

       </div>
     </div>
     <!-- Javascript files-->
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="vendor/popper.js/umd/popper.min.js"> </script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
     <script src="vendor/chart.js/Chart.min.js"></script>
     <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
     <script src="js/charts-home.js"></script>
     <!-- Main File-->
     <script src="js/front.js"></script>
   </body>
   </html>