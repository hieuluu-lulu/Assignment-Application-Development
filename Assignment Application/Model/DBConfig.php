<?php
	class Database {
		private $hostname = 'localhost';
		private $username = 'root';
		private $pass = '';
		private $dbname = 'mvc';


		private $conn = NULL;
		private $result = NULL;

		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
			if(!$this->conn){
				echo "Kết nối thất bại";
				exit();
			}
			else{
				mysqli_set_charset($this->conn, 'utf8');
			}
			return $this->conn;
		}

		// Chức năng thực thi câu lệnh truy vấn :
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		// Phương thức lấy dữ liệu :
		public function getData()
		{
			if($this->result){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;
		}

		// Phương thức lấy toàn bộ dữ liệu :
		public function getAllData($tblTable)
		{
			$sql = "SELECT * FROM $tblTable";
			$this->execute($sql);
			if($this->num_rows()==0)
			{
				$data = 0;
			}
			else
			{
				while($datas = $this->getData())
				{
					$data[] = $datas;
				}
			}
			return $data;
		}

		// Phương thức đếm số bản ghi :
		public function num_rows()
		{
			if($this->result){
				$num = mysqli_num_rows($this->result);
			}
			else{
				$num = 0;
			}
			return $num;
		}
		// Phương thức thêm dữ liệu :
		public function InsertStudentData($stu_username, $stu_password, $stu_email, $stu_fullname, $msv, $chuyennganh)
		{
			$sql = "INSERT INTO students(username, password, email, fullname, msv, chuyennganh)VALUES('$stu_username', '$stu_password','$stu_email','$stu_fullname', '$msv', '$chuyennganh')";
			return $this->execute($sql);
		}

		public function getDataStudentID($tblTable, $stuid)
		{
			$sql = "SELECT * FROM $tblTable WHERE stuid = '$stuid' ";
			$this->execute($sql);
			if($this->num_rows()!=0){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;

		}
		// Phương thức sửa dữ liệu :

		public function UpdateStudentData($stuid, $stu_username, $stu_password, $stu_email, $stu_fullname, $msv, $chuyennganh)
		{
			$sql = "UPDATE students SET username = '$stu_username', password = '$stu_password', email = '$stu_email', fullname = '$stu_fullname', msv = '$msv', chuyennganh = '$chuyennganh' WHERE stuid = '$stuid'";
			return $this->execute($sql);
		}

		// Phương thức xóa dữ liệu :

		public function DeleteStudentID($stuid, $tblTable)
		{
			$sql = "DELETE FROM $tblTable WHERE stuid = '$stuid'";
			return $this->execute($sql);
		}


		public function SearchData($table, $key)
		{
			$sql = "SELECT * FROM $table WHERE fullname like '%$key%' ORDER BY stuid DESC";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}
		
		///
		///
		///
		///
		///
		///
		public function InsertstaffData($sta_username, $sta_password, $sta_email, $sta_fullname, $sta_namsinh)
		{
			$sql = "INSERT INTO staff(username, password, email, fullname, namsinh)VALUES('$sta_username', '$sta_password','$sta_email','$sta_fullname', '$sta_namsinh')";
			return $this->execute($sql);
		}

		public function getDatastaffID($tblTable, $staffid)
		{
			$sql = "SELECT * FROM $tblTable WHERE staffid = '$staffid'";
			$this->execute($sql);
			if($this->num_rows()!=0){
				$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;

		}
		// Phương thức sửa dữ liệu :

		public function UpdatestaffData($staffid, $sta_username, $sta_password, $sta_email, $sta_fullname, $sta_namsinh)
		{
			$sql = "UPDATE staff SET username = '$sta_username', password = '$sta_password', email = '$sta_email', fullname = '$sta_fullname', namsinh = '$sta_namsinh' WHERE staffid = '$staffid'";
			return $this->execute($sql);
		}

		// Phương thức xóa dữ liệu :

		public function DeletestaffID($staffid, $tblTable)
		{
			$sql = "DELETE FROM $tblTable WHERE staffid = '$staffid'";
			return $this->execute($sql);
		}

		public function SearchstaffData($table, $key)
		{
			$sql = "SELECT * FROM $table WHERE fullname like '%$key%' ORDER BY staffid DESC";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}

		///
		///
		///
		///
		///
		public function InsertTeacherData($tea_username, $tea_password, $tea_email, $tea_fullname, $tea_chuyennganh)
		{
			$sql = "INSERT INTO teacher(username, password, email, fullname, chuyennganh)VALUES('$tea_username', '$tea_password','$tea_email','$tea_fullname', '$tea_chuyennganh')";
			return $this->execute($sql);
		}
		public function getDataTeacherID($tblTable, $teacherid)
		{
			$sql = "SELECT * FROM $tblTable WHERE teacherid = '$teacherid'";
				$this->execute($sql);
			if($this->num_rows()!=0){
					$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;	

		}
		// Phương thức sửa dữ liệu :

		public function UpdateTeacherData($teacherid, $tea_username, $tea_password, $tea_email, $tea_fullname, $tea_chuyennganh)
		{
			$sql = "UPDATE teacher SET username = '$tea_username', password = '$tea_password', email = '$tea_email', fullname = '$tea_fullname', chuyennganh = '$tea_chuyennganh' WHERE teacherid = '$teacherid'";
			return $this->execute($sql);
		}

		// Phương thức xóa dữ liệu :

		public function DeleteTeacherID($teacherid, $tblTable)
		{
			$sql = "DELETE FROM $tblTable WHERE teacherid = '$teacherid'";
			return $this->execute($sql);
		}
		public function SearchTeacherData($table, $key)
		{
			$sql = "SELECT * FROM $table WHERE fullname like '%$key%' ORDER BY teacherid DESC";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}
		//
		//
		//
		//
		//
		// COurces:
		public function InsertCourceData($title, $content, $poster, $createdate)
		{
			$sql = "INSERT INTO cources(title, content, poster, createdate) VALUES ( '$title', '$content', '$poster','$createdate')";
			return $this->execute($sql);
		}

		public function getDataCourceID($tblTable, $cources_id)
		{
			$sql = "SELECT * FROM $tblTable WHERE cources_id = '$cources_id'";
				$this->execute($sql);
			if($this->num_rows()!=0){
					$data = mysqli_fetch_array($this->result);
			}
			else{
				$data = 0;
			}
			return $data;	

		}
		public function UpdateCourceData($cources_id, $title, $content, $poster, $createdate)
		{
			$sql = "UPDATE cources SET title = '$title', content = '$content', poster = '$poster', createdate = '$createdate', is_public = '$is_public' WHERE cources_id = '$cources_id'";
			return $this->execute($sql);
		}
		public function DeleteCourceID($cources_id, $tblTable)
		{
			$sql = "DELETE FROM $tblTable WHERE cources_id = '$cources_id'";
			return $this->execute($sql);
		}
		public function SearchCourceData($table, $key)
		{
			$sql = "SELECT * FROM $table WHERE title like '%$key%' ORDER BY cources_id DESC";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}
	}

?>