<?php include_once 'permision_staff.php'; ?>
<body>
  <div class="content">
  <div class="dangkystaff">
  
    <h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;">Edit Staff Information</h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Username : </td>
          <td><input type="text" name="staff_username" value="<?php echo $datastaffID['username']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Password : </td>
          <td><input type="text" name="staff_password"
          value="<?php echo $datastaffID['password']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Email : </td>
          <td><input type="text" name="staff_email"
          value="<?php echo $datastaffID['email']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Full Name : </td>
          <td><input type="text" name="staff_fullname"
          value="<?php echo $datastaffID['fullname']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Date Of Birth : </td>
          <td><input type="text" name="staff_namsinh" value="<?php echo $datastaffID['namsinh']; ?>" placeholder="yyyy-mm-dd"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;" type="submit" name="update_staff" value="Update Staff"></td>
        </tr>
        
      </table>
    </form>
  </div>
</div>
</body>
