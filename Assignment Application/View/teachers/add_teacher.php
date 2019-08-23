<?php require_once 'permision_teacher.php'; ?>
<body>
	<div class="content">
	<div class="dangkyteacher">
		
		<h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;">Add Trainer Information</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Username : </td>
					<td><input type="text" name="teacher_username" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Password : </td>
					<td><input type="text" name="teacher_password" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Email : </td>
					<td><input type="text" name="teacher_email" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Full Name : </td>
					<td><input type="text" name="teacher_fullname" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Specialize : </td>
					<td><input type="text" name="teacher_chuyennganh" placeholder=""></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="add_teacher" style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;"value="Add Trainer"></td>
				</tr>
				
			</table>
		</form>
	</div>
</div>
</body>
