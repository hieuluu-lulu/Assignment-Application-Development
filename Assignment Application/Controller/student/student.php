	<?php 
	if(isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
		else
		{
			$action = '';
		}

	switch($action){
		case 'login_student':{
			#....
			require 'View/students/login_student.php';
			break;
		}


		case 'add_student':
		{
			if (isset($_POST['add_student']))
			{
				$stu_username 	= $_POST['student_username'];
				$stu_password 	= $_POST['student_password'];
				$stu_email 		= $_POST['student_email'];
				$stu_fullname 	= $_POST['student_fullname'];
				$msv 			= $_POST['msv'];
				$chuyennganh 	= $_POST['chuyennganh'];
				if(empty($stu_username) or empty($stu_password) or empty($stu_email) or empty($stu_fullname) or empty($msv) or empty($chuyennganh))
				{
					echo "<h1 style='color:black; text-align:center;'>Please do not leave any boxes blank!!</h1>";
				}
				else
				{
					if($db->InsertStudentData($stu_username, $stu_password, $stu_email, $stu_fullname, $msv, $chuyennganh))
					{
						echo '<h2 style="color: Green;  text-align:center;">Success!</h2>';
					}
					else
					{
						echo '<h3 style="color:red; text-align:center;">Fail Insert!</h3>';
					}
				}
			}
			require_once('View/students/add_student.php');
			break;
		}
		case 'edit_student':
		{	
			if(isset($_GET['stuid']))
			{	
				$stuid = $_GET['stuid'];
				$tblTable = "students";
				$dataStudentID = $db->getDataStudentID($tblTable, $stuid);

				if (isset($_POST['update_student']))
				{
						// Lấy dữ liệu cần sửa:
						$stu_username = $_POST['student_username'];
						$stu_password = $_POST['student_password'];
						$stu_email = $_POST['student_email'];
						$stu_fullname = $_POST['student_fullname'];
						$msv = $_POST['msv'];
						$chuyennganh = $_POST['chuyennganh'];
						// Truyền dữ liệu lấy từ view sang Model:
						if($db->UpdateStudentData($stuid, $stu_username, $stu_password, $stu_email, $stu_fullname, $msv, $chuyennganh))
						{
							header('location:  management.php?controller=student&action=list_student');
						}
				}
			}
			require_once('View/students/edit_student.php');
			break;
		}
		case 'delete_student':
		{
			if(isset($_GET['stuid']))
			{
				$stuid = $_GET['stuid'];
				$tblTable = "students";
				if($db->DeleteStudentID($stuid, $tblTable))
				{
					header('location: management.php?controller=student&action=list_student');
				}
			}
		}
		case 'list_student':
		{
			$tblTable = "students";	
			$data = $db->getAllData($tblTable);
			require_once('View/students/list_student.php');
			break;
		}

		case 'search_student':
		{
			if(isset($_GET['keyword']))
			{
				$key = $_GET['keyword'];
				$tblTable = "students";
				if(empty($key))
				{
					echo "<h1 style='color:black; text-align:center;'>Please enter keyword!</h1>";
				}
				else
				{
				//Lay du lieu tu Model{

					$data_Search = $db->SearchData($tblTable, $key);

				}
					
			}
			require_once('View/students/search_student.php');
			break;
		}
		default:{
			require_once('View/students/list_student.php');
			break;
		}
			
		
	}
?>