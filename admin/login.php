<?php
    session_start();
	$connect = mysqli_connect('localhost','root','','nhom2');
	mysqli_set_charset($connect,"utf8");
?>
<?php
		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$pass = $_POST['password'];
			$select = mysqli_query($connect,"SELECT * FROM member WHERE username = '$username' AND password = '$pass'");
			$row=mysqli_fetch_array($select);
            if (is_array($row))
            {
                $_SESSION["username"] = $row['username'];
                $_SESSION["pass"] = $row['pass'];
            }
            else
            {
                echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không chính xác!');window.location='login.php'</script>";	
            }
		}
        if (isset($_SESSION["username"]))
        {
            header("location:index.php");
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="luot_xemport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css.css">
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="passsword">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="login" class="btn btn-info btn-md" value="login">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>