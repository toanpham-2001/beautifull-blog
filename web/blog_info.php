<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="luot_xemport" content="width=device-width, initial-scale=1.0">
	<title>Chi Tiết Bài Viết</title>
	<!-- link file css -->
	<link rel="stylesheet" href="bloginfor.css">
</head>

<body>
	<?php
	require('ketnoidb.php');

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$blog = $connect->query("SELECT * FROM `bai_viet` WHERE `bai_viet`.`id` = '$id'")->fetch_assoc();
		$luot_xem = intval($blog['luot_xem']);
		$luot_xem++;
		// die(var_dump($luot_xem));
		$connect->query("UPDATE `bai_viet` SET `luot_xem`= $luot_xem WHERE `bai_viet`.`id` = '$id'");
		$category = $connect->query("SELECT * FROM `the_loai` WHERE `the_loai`.`id` = '{$blog['id_the_loai']}'")->fetch_assoc();
	}
	?>
	<?php include('header.php') ?>
	<div class="postbody">
		<hr noshade width="75%" size="0.5 px" color="#FFDAB9">
		<div id="content">
			<h3 style="text-align:center; color:#F08080"><i><?php echo $blog['name'] ?></i></h3>
			<?php echo $blog['content'] ?>
		</div>
	</div>
	<div class="box2">
		<div class="6" style="border:3px solid #FFDAB9; border-radius: 3px; margin-bottom:-39px">
			<h2 style="color:#5f402d; text-align: center;">LỜI NÓI ĐẦU</h2>
			<hr width="100px">
			<p style="color:#5f402d; font-family: Lobster; padding: 5px 8px 5px 8px;">Chào mừng tới với trang chia sẻ kiến thức về sức khỏe và làm đẹp của nhóm 2 chúng tôi, các bạn hãy cùng tham khảo các kiến thức cho đời sống của mình nhé! ^^</p>
		</div>
		<br><br><br>
		<div class="5" style="border:3px solid #FFDAB9; border-radius: 3px">
			<h2 style="text-align: center;">CÓ THỂ BẠN CẦN</h2>
			<h3><U>Hướng dẫn sử dụng sữa rửa mặt!</U></h3>
			</a>
			<iframe width="300" height="200" src="https://www.youtube.com/embed/DFF31sewKVY" title="YouTube video player" frameborder="0"></iframe>
			<hr width="300px" />
			<h3><U>Cách thoa kem chống nắng!</U></h3>
			</a>
			<iframe width="300" height="200" src="https://www.youtube.com/embed/flD8dH2uu8Y" title="YouTube video player" frameborder="0"></iframe>

		</div>
	
</body>

</html>