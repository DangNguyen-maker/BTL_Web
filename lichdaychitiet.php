<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>Lich Giang Day</title>
</head>

<body>
	<div class="wrapper">
		<header>
			<?php
			include 'header.php';
			?>
		</header>
		<div class="container">
			<h3>Lịch Trình Giảng Dạy</h3>
			<div class="control">
				<div>
					<label>Năm:</label>
					<select name="" id="">
						<option value="">2019-2020</option>
						<option value="">2018-2019</option>
						<option value="">2017-2018</option>
						<option value="">2016-2017</option>
						<option value="">2015-2106</option>
					</select>
				</div>
				<div>
					<label>Học Kỳ:</label>
					<select name="" id="">
						<option value="">1</option>
						<option value="">2</option>
						<option value="">Hè</option>
						<option value="">Song Song 1</option>
						<option value="">Song Song 2</option>
					</select>
				</div>
				<div>
					<label>Giai Đoạn:</label>
					<select name="" id="">
						<option value="">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div>
					<input type="submit" value="Xem Lịch" class="calendar_display" name="calendar_display">
				</div>
			</div>
			<div class="detail">

				<table>
					<tr>
						<th>Lớp học phần</th>
						<th>Học phần</th>
						<th>Thời gian</th>
						<th>Địa điểm</th>
						<th>Giảng viên</th>
						<th>Sĩ số</th>
					</tr>
					<tr>
						<td>Ngôn ngữ lập trình-1-16 (N02)</td>
						<td>CSE280</td>
						<td>Từ 29/08/2016 đến 23/10/2016: (1)
							Thứ 6 tiết 4,5,6 (LT) <br>
							Từ 07/11/2016 đến 01/01/2017: (2)
							Thứ 6 tiết 4,5,6 (LT)</td>
						<td>327 A2</td>
						<td>Lý Anh Tuấn</td>
						<td>100 </td>
					</tr>
					<tr>
						<td>Cấu trúc dữ liệu và giải thuật-2-16 (N04) </td>
						<td>CSE281</td>
						<td>Từ 17/04/2017 đến 11/06/2017:
							Thứ 2 tiết 9,10 (LT) <br>
							Thứ 4 tiết 9,10 (LT)</td>
						<td>421 A2</td>
						<td>Nguyễn Mạnh Hiển </td>
						<td>70</td>
					</tr>
					<tr>
						<td>Cơ sở dữ liệu-2-16 (N04)</td>
						<td> CSE484</td>
						<td> Từ 06/02/2017 đến 02/04/2017:
							Thứ 2 tiết 10,11,12 (LT) <br>
							Thứ 4 tiết 10,11,12 (LT)</td>
						<td>427 A2 </td>
						<td>Đặng Thị Thu Hiền </td>
						<td>70 </td>
					</tr>
					<tr>
						<td>Ngôn ngữ lập trình nâng cao-2-16 (N03) </td>
						<td>CSE0381</td>
						<td>Từ 06/02/2017 đến 19/03/2017:
							Thứ 2 tiết 7,8,9 (LT) <br>
							Thứ 4 tiết 7,8,9 (LT)</td>
						<td>[T2] 325 A2
							[T4] 339 A3</td>
						<td>Lý Anh Tuấn </td>
						<td>70 </td>
					</tr>
					<tr>
						<td>Phân tích và xử lý tín hiệu số-2-16 (N04) </td>
						<td>CSE451</td>
						<td>Từ 06/02/2017 đến 02/04/2017: (1)
							Thứ 5 tiết 10,11,12 (LT) <br>
							Từ 17/04/2017 đến 11/06/2017: (2)
							Thứ 5 tiết 10,11,12 (LT)</td>
						<td>(1) 335 A3 <br>
							(2) 303 B5
						</td>
						<td>Nguyễn Thị Phương Thảo</td>
						<td>70</td>
					</tr>
					<tr>
						<td>Hệ quản trị cơ sở dữ liệu-1-17 (57TH.04) </td>
						<td>CSE486</td>
						<td>Từ 04/09/2017 đến 29/10/2017:
							Thứ 2 tiết 7,8 (LT) <br>
							Thứ 5 tiết 7,8 (LT)</td>
						<td> [T2] 145 A3
							[T5] 235 A3 </td>
						<td>Lại Hiền Phương </td>
						<td>70</td>
					</tr>
					<tr>
						<td>Kiến trúc máy tính-1-17 (57TH.04) </td>
						<td>CSE370</td>
						<td> Từ 04/09/2017 đến 29/10/2017:
							Thứ 3 tiết 7,8,9 (LT) <br>
							Thứ 5 tiết 10,11,12 (LT)</td>
						<td>[T3] 233 A3
							[T5] 239 A3</td>
						<td>Nguyễn Hằng Phương</td>
						<td>70</td>
							 </tr> </table> </div> </div> <footer>
								<?php
								include 'footer.php';
								?>
								</footer>
			</div>
</body>

</html>