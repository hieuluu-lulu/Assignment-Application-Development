<?php
session_start();
 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="View/images/favicon.ico">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>Home Page</title>
      <style type="text/css">
      body{
        background-image: url('View/images/anhbia.JPG');
        background-repeat: no-repeat;
        background-size: cover;
          }
  </style>
  </head>
  <body>
 <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;color: rgb(230, 8, 8);" href="management.php">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;" href="management.php?controller=staff&action=list_staff">Staff Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;" href="management.php?controller=teacher&action=list_teacher">Trainer Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;" href="management.php?controller=student&action=list_student" >Trainee Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;" href="management.php?controller=cource&action=list_cource" name="view-list-cource">Course Management</a>
        </li>
      </ul>
    </div> 
<a href="logout.php" ><img style="width: 30px; margin: 5px auto;float: right;" src="View/images/logout.png"></a>
</nav>
