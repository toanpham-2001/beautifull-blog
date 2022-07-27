<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="luot_xemport" content="width=device-width, initial-scale=1.0">
	<title>NHÓM 2</title>
	<!-- link file css -->
	<link rel="stylesheet" href="csscategories.css">
</head>

<body>
	<!-- kết nối database -->
	<?php
	require('ketnoidb.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$bai_viet = $connect->query("SELECT * FROM `bai_viet` WHERE `bai_viet`.`id_the_loai` = '$id'")->fetch_all(MYSQLI_ASSOC);
		$category = $connect->query("SELECT * FROM `the_loai` WHERE `the_loai`.`id` = '$id'")->fetch_assoc();
		// die(var_dump($bai_viet));
	?>
		<?php include('header.php') ?>

		<hr noshade width="80%" size="3 px" color="#FFDAB9">
		<div id="content">
			<div class="box1">
				<h2 style="text-align: center;"><?php echo $category['name'] ?></h2>
				<?php foreach ($bai_viet as $blog) { ?>
					<div>
						<div style="float:left;"><img src="<?php echo $blog['image'] ?>" /></div>
						<h2><?php echo $blog['name'] ?></h2>
						<p style="font-size: 25px; font-family: Lobster"><?php echo $blog['mo_ta'] ?></p>
						<a class="resume" href="blog_info.php?id=<?php echo $blog['id'] ?>">
							ĐỌC TIẾP &rsaquo;</a>

					</div>
					<hr class="space-one" color="#FFDAB9" width="100%">
				<?php } ?>

			</div>


			<div class="box2">
				<div class="6" style="border:3px solid #FFDAB9; border-radius: 5px; margin-bottom: -30;">
					<h2 style="color:#5f402d; text-align: center;">LỜI NÓI ĐẦU</h2>
					<hr width="100px">
					<p style="color:#5f402d; font-family: Lobster; padding: 5px 8px 5px 8px;">Chào mừng tới với trang chia sẻ kiến thức về sức khỏe và làm đẹp của nhóm 2 chúng tôi, các bạn hãy cùng tham khảo các kiến thức cho đời sống của mình nhé! ^^</p>
				</div>
				<br><br><br>
				<div class="5" style="border:3px solid #FFDAB9; border-radius: 5px">
					<h2 style="text-align: center;">CÓ THỂ BẠN CẦN</h2>
					<h3><U>Hướng dẫn sử dụng sữa rửa mặt!</U></h3>
					</a>
					<iframe width="300" height="200" src="https://www.youtube.com/embed/DFF31sewKVY" title="YouTube video player" frameborder="0"></iframe>
					<hr width="300px" />
					<h3><U>Cách thoa kem chống nắng!</U></h3>
					</a>
					<iframe width="300" height="200" src="https://www.youtube.com/embed/flD8dH2uu8Y" title="YouTube video player" frameborder="0"></iframe>

				</div>
			</div>
		</div>
</body>
</html>
</body>

</html>
<?php  } ?>