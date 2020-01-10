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
				<!-- <div>
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
					<label>Khoá:</label>
					<select name="" id="">
						<option value="">K60</option>
						<option value="">K59</option>
						<option value="">K58</option>
						<option value="">K57</option>
					</select>
				</div>  -->
			</div> 
			<div class="gv">
				<table>
					<?php
						$sql = "SELECT * FROM users WHERE level = 1";
						$query = $db->prepare($sql);
						foreach ($db->query($sql) as $row) {
					?>
					<tr>
						<th><a href="lichdaychitiet.php?giangvien=<?php echo $row['id'] ?>"><?php echo $row['USERNAME'] ?></a></th>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
		<footer>
			<?php
			include 'footer.php';
			?>
		</footer>
	</div>
</body>

</html>