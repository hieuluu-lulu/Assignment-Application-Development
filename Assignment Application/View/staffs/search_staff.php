<?php include_once 'permision_staff.php'; ?>
<link rel="stylesheet" href="style.css">

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; color: red;">List Staff</h2>
      <div class="timkiem">
        <form action="" method="GET"> 
          <table>
            <tr>
              <input type="hidden" name="controller" value="staff">
              <td><input type="text" name="keyword" placeholder="Key word"></td>
              <td><input type="submit" value="Search" class="btn btn-info"></td>
              <input type="hidden" name="action" value="search_staff">
            </tr>
          </table>
        </form>
      </div>
      <div class="add-new-staff">
        <table> 
        <tr>
              <a href="management.php?controller=staff&action=add_staff" style="width: 250px; margin-left: 700px; " class="btn btn-danger">Add New staff</a>
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
          <th>Date Of Birth</th>
          <th>Action</th>
        </tr>
        <?php 
        $stt = 1;
        foreach($data_Search as $value)
          {
          ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['username']; ?></td>
            <td><?php echo $value['password']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['fullname']; ?></td>
            <td><?php echo $value['namsinh']; ?></td>
            <td>
              <a href="management.php?controller=staff&action=edit_staff&staffid=<?php echo $value['staffid']; ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="management.php?controller=staff&action=delete_staff&staffid=<?php echo $value['staffid']; ?>" class='btn btn-danger'>Delete</a>
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