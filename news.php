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
	<title>News</title>
</head>

<body>
	<div class="wrapper">
		<header>
			<?php
			include 'header.php';
			?>
		</header>
		<div class="main">
			<div class="container news">
				<h3>Tin Tức Mới CSE</h3>
				<ul>
					<?php
					$sql = "SELECT * FROM news";
					$query = $db->prepare($sql);
					foreach ($db->query($sql) as $row) {
					?>
						<li>
							<img src="images/news/<?php echo $row['newImage'] ?>" alt="Ảnh">
							<div>
								<h4><a href="newsDetail.php?news=<?php echo $row['newId'] ?>"><?php echo $row['newTitle'] ?></a></h4>
								<p><?php echo $row['newContent'] ?></p>
							</div>
						</li>
					<?php
					}
					?>
				</ul>
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