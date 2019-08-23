<?php include_once 'permision_student.php'; ?>
  
<body>
	<div class="content">
	<div class="dangkystudent">
		<h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;">Add Trainee Information</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Username : </td>
					<td><input type="text" name="student_username" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Password : </td>
					<td><input type="text" name="student_password" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Email : </td>
					<td><input type="text" name="student_email" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Full Name : </td>
					<td><input type="text" name="student_fullname" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">MSSV : </td>
					<td><input type="text" name="msv" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Specialize : </td>
					<td><input type="text" name="chuyennganh" placeholder=""></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit"  style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;"name="add_student" value="Add Trainee"></td>
				</tr>
			</table>
		</form>
		
	</div>
</div>
</body>
