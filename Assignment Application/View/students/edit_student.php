<?php include_once 'permision_student.php'; ?>
  
<body>
  <div class="content">
  <div class="dangkystudent">
  
    <h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;">Edit Trainee Information</h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Username : </td>
          <td><input type="text" name="student_username" value="<?php echo $dataStudentID['username'];?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Password : </td>
          <td><input type="text" name="student_password"
          value="<?php echo $dataStudentID['password']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Email : </td>
          <td><input type="text" name="student_email"
          value="<?php echo $dataStudentID['email']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Full Name : </td>
          <td><input type="text" name="student_fullname"
          value="<?php echo $dataStudentID['fullname']; ?>" placeholder=""></td>
        </tr>
                <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">MSSV : </td>
          <td><input type="text" name="msv" value="<?php echo $dataStudentID['msv']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Specialize : </td>
          <td><input type="text" name="chuyennganh" value="<?php echo $dataStudentID['chuyennganh']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;"name="update_student" value="Update Trainee"></td>
        </tr>
        
      </table>
    </form>
  </div>
</div>
</body>
