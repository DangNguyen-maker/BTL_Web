<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/">
	<!-- <script src="js/jquery-3.4.1.min.js"></script>
	<script src="sv.js"></script> -->
    <title>document</title>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="top">
					<ul></ul>
					<ul>
						<li><a href="login.php">Login</a></li>
						<li><a href="#">Register</a></li>
						<li>
							<form>
								<svg class="search rtl-flip" width="20px" height="20px" viewBox="0 0 20 20"
									version="1.1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<g>
											<path
												d="M8.5025,15 C4.9225,15 2.0025,12.08 2.0025,8.5 C2.0025,4.92 4.9225,2 8.5025,2 C12.0825,2 15.0025,4.92 15.0025,8.5 C15.0025,12.08 12.0825,15 8.5025,15 L8.5025,15 Z M8.5025,3 C5.4625,3 3.0025,5.46 3.0025,8.5 C3.0025,11.54 5.4625,14 8.5025,14 C11.5425,14 14.0025,11.54 14.0025,8.5 C14.0025,5.46 11.5425,3 8.5025,3 L8.5025,3 Z M17.5025,18 C17.3825,18 17.2425,17.96 17.1425,17.86 L13.6425,14.36 C13.4625,14.16 13.4625,13.84 13.6425,13.64 C13.8425,13.46 14.1625,13.46 14.3625,13.64 L17.8625,17.14 C18.0425,17.34 18.0425,17.66 17.8625,17.86 C17.7625,17.96 17.6225,18 17.5025,18 L17.5025,18 Z"
												id="z"></path>
										</g>
									</g>
								</svg>
								<input type="text" name="txtSearch" placeholder="Tìm Kiếm">
							</form>
						</li>
					</ul>
				</div>
				<div class="logo">
					<a href="sinhvien.php">
						<img src="images/logo.jpg" alt="logoCSE">
					</a>
				</div>
				<div class="menu">
					<ul>
						<li><a href="sinhvien.php">TRANG CHỦ</a></li>
						<li>
							GIỚI THIỆU
							<ul class="show">
								<li><a href="#">Logo Khoa CNTT</a></li>
								<li><a href="#">Lời chào mừng</a></li>
								<li><a href="#">Tổ chức</a></li>
								<li><a href="#">Hợp tác liên kết</a></li>
							</ul>
						</li>
						<li>KẾ HOẠCH GIẢNG DẠY
							<ul class="show">
								<li><a href="#">Các đề tài , dự án</a></li>
								<li><a href="#">Thông tin seminar</a></li>
								<li><a href="#">Công trình công bố</a></li>
								<li><a href="#">Các phòng thí nghiệm</a></li>
							</ul>
						</li>
						<li>LỊCH TRÌNH GIẢNG DẠY
							<ul class="show">
								<li><a href="#">Thông báo</a></li>
								<li><a href="#">TB đào tạo</a></li>
								<li><a href="#">Nghiên cứu khoa học</a></li>
								<li><a href="#">Tuyển dụng</a></li>
								<li><a href="#">Học bổng</a></li>
								<li><a href="#">Thông báo khác</a></li>
							</ul>
						</li>
						<li>ĐÀO TẠO
							<ul class="show">
								<li><a href="#">Đào tạo đại học</a></li>
								<li><a href="#">Đào tạo sau đại học</a></li>
								<li><a href="#">Chuẩn đầu ra</a></li>
								<li><a href="#">Định hướng ngành nghề</a></li>
								<li><a href="#">Mô hình đào tạo</a></li>
								<li><a href="SVDeCuongMonHoc.php">Đề cương môn học</a></li>
							</ul>
						</li>
						<li>BỘ MÔN - TRUNG TÂM
							<ul class="show">
								<li><a href="#">Công nghệ phần mềm</a></li>
								<li><a href="#">Hệ thống thông tin</a></li>
								<li><a href="#">Khoa học máy tính</a></li>
								<li><a href="#">Kỹ thuật máy tính và mạng</a></li>
								<li><a href="#">Toán học</a></li>
								<li><a href="#">Tin học máy tính toán</a></li>
								<li><a href="#">Trung tâm tin học</a></li>
							</ul>
						</li>
						<li>SINH VIÊN
							<ul class="show">
								<li><a href="#">Tài liệu sinh viên</a></li>
								<li><a href="#">Tổ tư vấn học tập</a></li>
								<li><a href="#">Biểu mẫu ĐATN</a></li>
								<li><a href="#">Luận văn tôt nghiệp</a></li>
							</ul>
						</li>
						<li>TIN TỨC
							<ul class="show">
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">CSE trên báo</a></li>
							</ul>
						</li>
						
						<li>LIÊN HỆ
						</li>

					</ul>
				</div>
				<hr width="100%">
		
		</header>
		<div class="main">
			<!-- main -->
			<?php
				include 'news.php';
			?>





		<!-- end-main -->
		</div>
		
		<footer>
			
			<div class="nav-footer">
				<ul>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Logo của Khoa CNTT</a></li>
					<li><a href="#">Lời chào mừng</a></li>
					<li><a href="#">Tổ chức</a></li>
					<li><a href="#">Hợp tác liên kết</a></li>
				</ul>
				<ul>
					<li><a href="#">Đào tạo</a></li>
					<li><a href="#">Mô hình đào tạo</a></li>
					<li><a href="#">Đào tạo đại học</a></li>
					<li><a href="#">Định hướng ngành nghề</a></li>
					<li><a href="#">Đào tạo sau đại học</a></li>
				</ul>
				<ul>
					<li><a href="#">Nghiên cứu khoa học</a></li>
					<li><a href="#">Thông tin seminar</a></li>
					<li><a href="#">Các đề tài, dự án</a></li>
					<li><a href="#">Công trình công bố</a></li>
					<li><a href="#">Các phòng thí nghiệm</a></li>
				</ul>
				<ul>
					<li><a href="#">Công nghệ phần mềm</a></li>
					<li><a href="#">Hệ thống thông tin</a></li>
					<li><a href="#">Khoa học máy tính</a></li>
					<li><a href="#">Kỹ thuật máy tính và mạng</a></li>
					<li><a href="#">Toán học</a></li>
					<li><a href="#">Trung tâm tin học</a></li>
				</ul>
			</div>
			
		</footer>	
	</div>
</body>
</html>