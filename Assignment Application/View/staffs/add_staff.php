<?php include_once 'permision_staff.php'; ?>
<body>
	<div class="content">
	<div class="dangkystaff">
		<h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;">Add Staff Information</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;"> Username : </td>
					<td><input type="text" name="staff_username" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Password : </td>
					<td><input type="text" name="staff_password" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Email : </td>
					<td><input type="text" name="staff_email" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Full Name : </td>
					<td><input type="text" name="staff_fullname" placeholder=""></td>
				</tr>
				<tr>
					<td style="font-family:  Comic Sans MS, sans-serif;font-weight: normal;">Date Of Birth: </td>
					<td><input type="text" name="staff_namsinh" placeholder="yyyy-mm-dd"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input  style="font-family:  Comic Sans MS, sans-serif;font-weight: bold;"type="submit" name="add_staff" value="Add Staff"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
