<?php include_once 'permision_cource.php'; ?>
<link rel="stylesheet" href="style.css">
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; color: red;">List Course</h2>
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
      <div class="add-new-cource">
        <table> 
        <tr>
              <a href="management.php?controller=cource&action=add_cource" style="width: 250px; margin-left: 700px; " class="btn btn-danger">Add New cource</a>
        </tr>
        </table>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Tittle</th>
          <th>Content</th>
          <th>Teacher</th>
          <th>Post Date</th>
          
          <th>Action</th>
        </tr>
        <?php 
        $stt = 1;
        foreach($data_Search as $value)
          {
          ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['content']; ?></td>
            <td><?php echo $value['poster']; ?></td>
            <td><?php echo $value['createdate']; ?></td>
           
            <td>
              <a href="management.php?controller=cource&action=edit_cource&cources_id=<?php echo $value['cources_id']; ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this course?')" href="management.php?controller=cource&action=delete_cource&cources_id=<?php echo $value['cources_id']; ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php
            $stt++;
            }
        ?>
      </table>
    </div>
  </div>
</div>