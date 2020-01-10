<?php
	session_start();
	include 'connect.php';
	if (isset($_POST["add"])) {
		if(empty($_POST["name"]) || empty($_POST["pass"])){
			$mess = "Vui Lòng Điền Đẩy Đủ Thông Tin";
		}
		else{
			$name = $_POST["name"];
			$pass = $_POST["pass"];
			$sql = "INSERT INTO admin(TaiKhoan,MatKhau) 
			VALUES('$name','$pass')" ;
			$conn->exec($sql);
			$mess = "Thêm Thành Công";
		}
		$_SESSION["mess"] = $mess;
		
		header('location: admin.php?quan_ly=quan_tri');
	}
?>