<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="luot_xemport" content="width=device-width, initial-scale=1.0">
	<title>Liên Hệ</title>
	<!-- link file css -->
	<link rel="stylesheet" href="contact.css">
	<script type="text/javascript" src="form.js"></script>
</head>

<body>
	<br>
	<?php include('header.php') ?>
	<hr noshade width="80%" size="3 px" color="#FFC0CB">

	<!--Bắt đầu từ đoạn này chia web thành 2 phần-->
	<div id="content">
		<div class="box1">
			<h2 align="center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
			<hr width="100px">
			<br>
		</div>
	</div>
	<div class="content1">
		<div class="noidung">
			<div class="phanhoi"><i>Gửi phản hồi</i></div>
			<div class="thongtin">
				<form method="POST" onsubmit="return validForm();">
					<div class="form-group">
						<p>Họ và tên&nbsp;*</p>
						<input type="text" maxlength="100" value="" name="Hovaten" id="ten" class="form-control">
						<span style="color:red" id="errorName"></span>
					</div>
					<div class="form-group">
						<p> Email&nbsp;*</p>
						<input type="email" maxlength="60" value="" id="mail" name="Email" class="form-control">
						<span style="color:red" id="erroremail"></span>
					</div>
					<div class="form-group">
						<p> Điện thoại</p>
						<input type="text" maxlength="60" value="" id="SDT" name="SDT" class="form-control">
						<span style="color:red" id="errorsdt"></span>
					</div>
					<div class="form-group">
						<p> Địa chỉ</p>
						<input type="text" maxlength="60" value="" id="diachi" name="Diachi" class="form-control">
						<span style="color:red" id="errordiachi"></span>
					</div>
					<div class="form-group">
						<p> Nội dung&nbsp;*</p>
						<textarea cols="10" name="Noidung" id="noidung" class="form-control" maxlength="1000" style="height: 100px;"></textarea>
						<span style="color:red" id="errornoidung"></span>
					</div>
					<br><br>
					<div class="text-center">
						<input class="gui" type="submit" value="Gửi đi" name="btsend">

					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function validForm() {
			var hten = document.getElementById('ten').value;
			var errorName = document.getElementById('errorName');
			var regName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

			var email = document.getElementById('mail').value;
			var erroremail = document.getElementById('erroremail');
			var regEmail = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;

			var SDT = document.getElementById('SDT').value;
			var errorSDT = document.getElementById('errorsdt');


			var diachi = document.getElementById('diachi').value;
			var errordiachi = document.getElementById('errordiachi');

			var noidung = document.getElementById('noidung').value;
			var errornoidung = document.getElementById('errornoidung');

			if (hten == '' || hten == null) {
				errorName.innerHTML = 'Tên không được để trống';
			} else if (!(regName.test(hten))) {
				errorName.innerHTML = 'Tên không hợp lệ';
			} else {
				errorName.innerHTML = '';
			}

			if (email == '' || email == null) {
				erroremail.innerHTML = 'Email không được để trống';
			} else if (!(regEmail.test(email))) {
				erroremail.innerHTML = 'Email không hợp lệ';
				email = '';
			} else {
				erroremail.innerHTML = '';
			}

			if (SDT == '' || SDT == null) {
				errorSDT.innerHTML = 'Chưa nhập số điện thoại!';
			} else {
				errorSDT.innerHTML = '';
			}

			if (diachi == '' || diachi == null) {
				errordiachi.innerHTML = 'Chưa nhập địa chỉ';
			} else {
				errordiachi.innerHTML = '';
			}

			if (noidung == '' || noidung == null) {
				errornoidung.innerHTML = 'Chưa nhập nội dung';
			} else {
				errornoidung.innerHTML = '';
			}
			if (hten && email && SDT && diachi && noidung) {
				confirm('Gửi thành công!');
				header('Location: lienhe.php');

			}
			return false;
		}
	</script>
	<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'nhom2';
	$conn = new mysqli($server, $username, $password, $dbname);
	if ($conn->connect_error) {
		die('Kết nối thật bại' . $conn->error);
		exit();
	}
	$Hovaten = '';
	$Email = '';
	$SDT = '';
	$Diachi = '';
	$Noidung = '';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["Hovaten"])) {
			$Hovaten = $_POST['Hovaten'];
		}
		if (isset($_POST["Email"])) {
			$Email = $_POST['Email'];
		}
		if (isset($_POST["SDT"])) {
			$SDT = $_POST['SDT'];
		}
		if (isset($_POST["Diachi"])) {
			$Diachi = $_POST['Diachi'];
		}
		if (isset($_POST["Noidung"])) {
			$Noidung = $_POST['Noidung'];
		}
		// thêm dữ liệu từ form vào csdl //
		$sql = "INSERT INTO contact(Hovaten,Email,SDT,Diachi,Noidung)
            VALUES ('$Hovaten', '$Email', '$SDT', '$Diachi', '$Noidung')";
		if ($conn->query($sql) == TRUE) {
			echo '';
		} else {
			echo 'Gửi thất bại!';
		}
	}
	$conn->close();
	?>
	</div>
  </div>
</body>

</html>