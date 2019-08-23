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
    case 'cource':{
      require_once('Controller/cource/cource.php');
      break;
    }
  }
  
 ?>
<link rel="stylesheet" href="style.css">
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2 style="font-family:  Comic Sans MS, sans-serif;font-weight: bold;font-style: oblique; color: red;">List Course</h2>
      <div class="timkiem">
        <form action="" method="GET"> 
          <table>
            <tr>
              <input type="hidden" name="controller" value="cource">
              <td><input type="text" name="keyword" placeholder="Key word"></td>
              <td><input type="submit" value="Search" class="btn btn-info"></td>
              <input type="hidden" name="action" value="search_cource">
            </tr>
          </table>
        </form>
      </div>
      <div class="add-new-course">
        <table> 
        
        </table>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Semester</th>
          <th>Subjects</th>
          <th>Teacher</th>
          <th>Day Start</th>
                
        </tr>
        <?php 
        $stt = 1;
        foreach($data as $value)
          {
          ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['content']; ?></td>
            <td><?php echo $value['poster']; ?></td>
            <td><?php echo $value['createdate']; ?></td>
            
            </tr>
        <?php
            $stt++;
            }
        ?>
      </table>
    </div>
  </div>
</div>