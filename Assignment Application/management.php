
<?php require 'header.php'; ?>
<h2 style="text-align: center; color: black;"></h2>
<?php 
  include "Model/DBConfig.php";
  $db = new Database;
  $db->connect();

  if(isset($_GET['controller'])) {
    $controller = $_GET['controller'];
  }
  else{
    $controller = '';
  }

  switch($controller){
    case 'student':{
      require_once('Controller/student/student.php');
      break;
    }
    case 'teacher':{
      require_once('Controller/teacher/teacher.php');
      break;
    }
    case 'staff':{
      require_once('Controller/staff/staff.php');
      break;
    }
    case 'cource':{
      require_once('Controller/cource/cource.php');
      break;
    }
    case 'admin':{
      require('Controller/admin/admin.php');
      break;
    }
    case 'create_admin':{
      require('Controller/admin/admin.php');
    }
      # code...
      break;
  }
  
 ?>
<?php require 'footer.php'; ?>