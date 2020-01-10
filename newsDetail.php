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
				<?php
					$news = $_GET["news"];
					$sql = "SELECT * FROM news WHERE newId = $news";
					$query = $db->prepare($sql);
					foreach ($db->query($sql) as $row) {
				?>
				<h3><?php echo $row['newTitle'] ?></h3>
						<div style="font-size: 20px; margin-top: 20px">
							<?php echo $row['newContent'] ?>
						</div>
					<?php
						}
					?>
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