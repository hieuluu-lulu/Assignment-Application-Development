<?php include_once 'permision_cource.php'; ?>	

<?php include_once 'header.php'; ?>

<body>
	<div class="content">
	<div class="dangkycource">
		<h3 style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;"> Add Course Information</h3></td>

		<form action="" method="POST">
			<table>
				
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;"nowrap="nowrap">Semester :</td>
				<td><input type="text" id="title" name="title"></td>
			</tr>
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;" nowrap="nowrap">Subjects :</td>
				<td><input name="content" id="content" nowrap="nowrap" ></td>
			</tr>
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;" nowrap="nowrap">Teacher :</td>
				<td><input name="poster" type="text"></td>
			</tr>
			<tr>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold; text-align: center;" nowrap="nowrap">Day Start :</td>
				<td><input name="createdate" type="date" placeholder="yyyy-mm-dd "></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td style="font-family:  Comic Sans MS, sans-serif;font-style: oblique;  font-weight: bold;"><input type="submit" name="add_cource" value="Add Course"></td>
			</tr>
 
		</table>
		</form>
	</div>
</div>
</body>

<?php include_once 'footer.php' ;
?>
