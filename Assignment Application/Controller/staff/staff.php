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
		case 'login_staff':{
			require 'View/staffs/login_staff.php';
			break;
		}
			

		case 'add_staff':
		{
			if (isset($_POST['add_staff']))
			{
				$sta_username 	= $_POST['staff_username'];
				$sta_password 	= $_POST['staff_password'];
				$sta_email 		= $_POST['staff_email'];
				$sta_fullname 	= $_POST['staff_fullname'];
				$sta_namsinh 	= $_POST['staff_namsinh'];
				if(empty($sta_username) or empty($sta_password) or empty($sta_email) or empty($sta_fullname) or empty($sta_namsinh))
				{
					echo "<h1 style='color:red; text-align:center;'>Please do not leave fields blank!</h1>";
				}
				else
				{
					if($db->InsertstaffData($sta_username, $sta_password, $sta_email, $sta_fullname, $sta_namsinh))
					{
						echo '<h2 style="color: Green;  text-align:center;">Success!</h2>';
					}
					else
					{
						echo '<h3 style="color:red; text-align:center;">Fail Insert!</h3>';
					}
				}
			}
			require_once('View/staffs/add_staff.php');
			break;
		}
		case 'edit_staff':
		{	
			if(isset($_GET['staffid']))
			{	
				$staffid = $_GET['staffid'];
				$tblTable = "staff";
				$datastaffID = $db->getDatastaffID($tblTable, $staffid);

				if (isset($_POST['update_staff']))
				{
						// Lấy dữ liệu cần sửa:
						$sta_username = $_POST['staff_username'];
						$sta_password = $_POST['staff_password'];
						$sta_email = $_POST['staff_email'];
						$sta_fullname = $_POST['staff_fullname'];
						$sta_namsinh = $_POST['staff_namsinh'];
						// Truyền dữ liệu lấy từ view sang Model:
						if($db->UpdatestaffData($staffid, $sta_username, $sta_password, $sta_email, $sta_fullname, $sta_namsinh))
						{
							header('location:  management.php?controller=staff&action=list_staff');
						}
				}
			}
			require_once('View/staffs/edit_staff.php');
			break;
		}
		case 'delete_staff':
		{
			if(isset($_GET['staffid']))
			{
				$staffid = $_GET['staffid'];
				$tblTable = "staff";
				if($db->DeletestaffID($staffid, $tblTable))
				{
					header('location: management.php?controller=staff&action=list_staff');
				}
			}
		}
		case 'list_staff':
		{
			$tblTable = "staff";	
			$data = $db->getAllData($tblTable);
			require_once('View/staffs/list_staff.php');
			break;
		}

		case 'search_staff':
		{
			if(isset($_GET['keyword']))
			{
				$key = $_GET['keyword'];
				$tblTable = "staff";
				if(empty($key))
				{
					echo "<h1 style='color:black; text-align:center;'>Please enter keyword!</h1>";
				}
				else
				{
				//Lay du lieu tu Model{

					$data_Search = $db->SearchstaffData($tblTable, $key);

				}
					
			}
			require_once('View/staffs/search_staff.php');
			break;
		}
		default:{
			require_once('View/staffs/list_staff.php');
			break;
		}
			
		
	}
?>