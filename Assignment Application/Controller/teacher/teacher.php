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
		case 'login_teacher':{
			#....
			require 'View/teachers/login_teacher.php';
			break;
		}
		case 'add_teacher':
		{
			if (isset($_POST['add_teacher']))
			{
				$tea_username 	= $_POST['teacher_username'];
				$tea_password 	= $_POST['teacher_password'];
				$tea_email 		= $_POST['teacher_email'];
				$tea_fullname 	= $_POST['teacher_fullname'];
				$tea_chuyennganh 	= $_POST['teacher_chuyennganh'];
				if(empty($tea_username) or empty($tea_password) or empty($tea_email) or empty($tea_fullname) or empty($tea_chuyennganh))
				{
					echo "<h1 style='color:black; text-align:center;'>Please do not leave any boxes blank!!</h1>";
				}
				else
				{
					if($db->InsertTeacherData($tea_username, $tea_password, $tea_email, $tea_fullname, $tea_chuyennganh))
					{
						echo '<h2 style="color: Green;  text-align:center;">Success!</h2>';
					}
					else
					{
						echo '<h3 style="color:red; text-align:center;">Fail Insert!</h3>';
					}
				}
			}
			require_once('View/teachers/add_teacher.php');
			break;
		}
		case 'edit_teacher':
		{	
			if(isset($_GET['teacherid']))
			{	
				$teacherid = $_GET['teacherid'];
				$tblTable = "teacher";
				$dataTeacherID = $db->getDataTeacherID($tblTable, $teacherid);

				if (isset($_POST['update_teacher']))
				{
						// Lấy dữ liệu cần sửa:
						$tea_username = $_POST['teacher_username'];
						$tea_password = $_POST['teacher_password'];
						$tea_email = $_POST['teacher_email'];
						$tea_fullname = $_POST['teacher_fullname'];
						$tea_chuyennganh = $_POST['teacher_chuyennganh'];
						// Truyền dữ liệu lấy từ view sang Model:
						if($db->UpdateTeacherData($teacherid, $tea_username, $tea_password, $tea_email, $tea_fullname, $tea_chuyennganh))
						{
							header('location:  management.php?controller=teacher&action=list_teacher');
						}
				}
			}
			require_once('View/teachers/edit_teacher.php');
			break;
		}
		case 'delete_teacher':
		{
			if(isset($_GET['teacherid']))
			{
				$teacherid = $_GET['teacherid'];
				$tblTable = "teacher";
				if($db->DeleteTeacherID($teacherid, $tblTable))
				{
					header('location: management.php?controller=teacher&action=list_teacher');
				}
			}
		}
		case 'list_teacher':
		{
			$tblTable = "teacher";	
			$data = $db->getAllData($tblTable);
			require_once('View/teachers/list_teacher.php');
			break;
		}

		case 'search_teacher':
		{
			if(isset($_GET['keyword']))
			{
				$key = $_GET['keyword'];
				$tblTable = "teacher";
				if(empty($key))
				{
					echo "<h1 style='color:black; text-align:center;'>Please enter keyword!</h1>";
				}
				else
				{
				//Lay du lieu tu Model{

					$data_Search = $db->SearchTeacherData($tblTable, $key);

				}
					
			}
			require_once('View/teachers/search_teacher.php');
			break;
		}
		default:{
			require_once('View/teachers/list_teacher.php');
			break;
		}
			
		
	}
?>