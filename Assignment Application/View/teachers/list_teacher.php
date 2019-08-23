<?php require_once 'permision_teacher.php'; ?>
<link rel="stylesheet" href="style.css">
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
     <h2 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;color: red;">List Trainer</h2>
      <div class="timkiem">
        <form action="" method="GET"> 
          <table>
            <tr>
              <input type="hidden" name="controller" value="teacher">
              <td><input type="text" name="keyword" placeholder="Key word"></td>
              <td><input type="submit" value="Search" class="btn btn-info"></td>
              <input type="hidden" name="action" value="search_teacher">
            </tr>
          </table>
        </form>
      </div>
      <div class="add-new-teacher">
        <table> 
        <tr>
              <a href="management.php?controller=teacher&action=add_teacher" style="width: 250px; margin-left: 700px; " class="btn btn-danger">Add New Trainer</a>
        </tr>
        </table>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Password</th>
          <th>Email</th>
          <th>Full Name</th>
          <th>Specialize</th>
          <th>Action</th>
        </tr>
        <?php 
        $stt = 1;
        foreach($data as $value)
          {
          ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['username']; ?></td>
            <td><?php echo $value['password']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['fullname']; ?></td>
            <td><?php echo $value['chuyennganh']; ?></td>
            <td>
              <a href="management.php?controller=teacher&action=edit_teacher&teacherid=<?php echo $value['teacherid']; ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this Trainer?')" href="management.php?controller=teacher&action=delete_teacher&teacherid=<?php echo $value['teacherid']; ?>" class='btn btn-danger'>Delete</a>
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