
<?php 
	//include "Model/DBConfig.php";

	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}
	switch($action){
		case 'list_cource':{
			$tblTable = "cources";	
			$data = $db->getAllData($tblTable);
			require_once('View/cources/list_cource.php');
			break;
		}

		case 'list_cource_for_student':{
			$tblTable = "cources";	
			$dataget = $db->getAllData($tblTable);
			require_once('View/students/page_student.php');
			break;
		}

		case 'add_cource':{
			if (isset($_POST['add_cource'])) 
			{
			//lấy thông tin từ các form bằng phương thức POST
			$title = $_POST["title"];
			$content = $_POST["content"];
			$poster = $_POST["poster"];
			$createdate = $_POST["createdate"];
			$is_public = $_POST["is_public"];

				if(empty($title) or empty($content) or empty($poster) or empty($createdate))
				{
					echo "<h1 style='color:black; text-align:center;'>Please do not leave any boxes blank!!</h1>";
				}
				else
				{
					if($db->InsertCourceData($title, $content, $poster, $createdate, $is_public))
					{
						echo '<h2 style="color: Green;  text-align:center;">Success!</h2>';
					}
					else
					{
						echo '<h3 style="color:red; text-align:center;">Fail Insert!</h3>';
					}
				}
			}
			require_once('View/cources/add_cource.php');
			break;
		}
		case 'edit_cource':{
			if(isset($_GET['cources_id']))
			{	
				$cources_id = $_GET['cources_id'];
				$tblTable = "cources";
				$dataCourceID = $db->getDataCourceID($tblTable, $cources_id);

				if (isset($_POST['update_cource']))
				{
						// Lấy dữ liệu cần sửa:
						$title = $_POST["title"];
						$content = $_POST["content"];
						$poster = $_POST["poster"];
						$createdate = $_POST["createdate"];
						$is_public = $_POST["is_public"];
						// Truyền dữ liệu lấy từ view sang Model:
						if($db->UpdateCourceData($cources_id, $title, $content, $poster, $createdate, $is_public))
						{
							header('location:  management.php?controller=cource&action=list_cource');
						}
				}
			}
			require_once('View/cources/edit_cource.php');
			break;
		}
		case 'delete_cource':
		{
			if(isset($_GET['cources_id']))
			{
				$cources_id = $_GET['cources_id'];
				$tblTable = "cources";
				if($db->DeleteCourceID($cources_id, $tblTable))
				{
					header('location: management.php?controller=cource&action=list_cource');
				}
			}
		}
		case 'search_cource':
		{
			if(isset($_GET['keyword']))
			{
				$key = $_GET['keyword'];
				$tblTable = "cources";
				if(empty($_GET['keyword']))
				{
					echo '<script type="text/javascript">alert("Please Enter Keyword !");</script>';
				}

				else
				{
				//Lay du lieu tu Model{

					$data_Search = $db->SearchCourceData($tblTable, $key);

				}
					
			}
			require_once('View/cources/search_cource.php');
			break;
		}
		case 'search_cource_for_student':
		{
			if(isset($_GET['keyword']))
			{
				$key = $_GET['keyword'];
				$tblTable = "cources";
				if(empty($_GET['keyword']))
				{
					echo '<script type="text/javascript">alert("Please Enter Keyword !");</script>';
				}

				else
				{
				//Lay du lieu tu Model{

					$data_Search_stu = $db->SearchCourceData($tblTable, $key);

				}
					
			}
			require_once('View/cources/search_cource_for_student.php');
			break;
		}
		default:{
			require_once('View/cources/list_cource.php');
			break;
		}
			
	}

 ?>