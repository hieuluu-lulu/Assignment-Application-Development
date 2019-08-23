<?php
session_start();
 
?>
<?php 
//Gọi file connection.php ở bài trước
require_once("Model/DBConnect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["login_admin"])) {
	// lấy thông tin người dùng
	$adm_username = $_POST["admin_username"];
	$adm_password = $_POST["admin_password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$adm_username = strip_tags($adm_username);
	$adm_username = addslashes($adm_username);
	$adm_password = strip_tags($adm_password);
	$adm_password = addslashes($adm_password);

	if (empty($_POST['admin_username']) or empty($_POST['admin_password'])) {
		echo "<h1> username hoặc password bạn không được để trống</h1>";
	}else{
		$sql = "SELECT * FROM admin where username = '$adm_username' and password = '$adm_password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["adminid"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: management.php');
		}
	}
}
?>	
<form method="POST" action="">
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="admin_username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="admin_password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="login_admin" value="Đăng nhập"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
