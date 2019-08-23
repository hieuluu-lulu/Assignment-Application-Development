<?php require 'permision_cource.php';?>
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
              <td><input type="text" name="keyword" placeholder="Search Course"></td>
              <td><input type="submit" value="Search" class="btn btn-info"></td>
              <input type="hidden" name="action" value="search_cource_for_student">
            </tr>
          </table>
        </form>
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