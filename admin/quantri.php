<div class="acc">
	<div class="mess">
		<?php

		if (isset($_SESSION["mess"])){
			$message =  $_SESSION["mess"];
			echo "<script type='text/javascript'>alert('$message');</script>";
			unset($_SESSION["mess"]);
		}
		else{
			
		}
		?>
				</div>
	<h3>Quản Lý Quản Trị</h3>
	<form action="add_quantri.php" method="post">
		<input type="text" placeholder="Tài Khoản..." name="name">
		<input type="password" placeholder="Mật Khẩu..." name = "pass" >
		<input type="submit" value="+ Thêm Mới" name="add">
	</form>

	<table>

		<tr>
			<td>STT</td>
			<td>Tài Khoản</td>
			<td>Mật Khẩu</td>
		</tr>
<?php
    $sql = "SELECT * FROM admin";
    $query = $conn->prepare($sql);
?>
<?php
    foreach ($conn->query($sql) as $row){
?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['TaiKhoan'] ?></td>
			<td><?php echo $row['MatKhau'] ?></td>
		</tr>
<?php } ?>
	</table>
</div>