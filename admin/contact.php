<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="luot_xemport" content="width=device-width, initial-scale=1">
    <meta name="mo_ta" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Admin Website</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <!-- <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        /* màu bên trái */
        .custom-color{
            background-color:#b3d9ff;
            color: black;
        }
        body{
            background-color:white;
        }
    </style>
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>
<main>
    <?php include('sidebar.php') ?>
    <div class="mx-5 my-5 card w-100" style="width:1000px">
        <div class="card-header" style="background-color: #FFEFD5;">
            <div class="d-flex justify-content-between" >
        
           <form  method="post" >
                    <input type="search" id="search" name="search" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <form action="excel.php" method="post">
             <button type="submit" name="xuat_excel" class="btn btn-primary" value="xuất excel">Xuất exel</button>
    </form>
           
            
            
                
            </div>

        </div>
        <div class="card-body" style="background-color: #FFEFD5;">
            <?php 
                require('ketnoidb.php');
                
                $bai_viet=mysqli_query($connect,"SELECT * FROM `contact` ORDER BY `STT` ASC ")
            
            
            ?>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Email</th>
                <th scope="col">SDT</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col"> Nội dung</th>

                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; while ($blog = mysqli_fetch_array($bai_viet)) {  ?>
                <tr>
                    <th scope="row"><?php echo $stt ?></th>
                    <td style="width:10%"><?php echo $blog['Hovaten'] ?></td>
                    <td style="width:15%"><?php echo $blog['Email'] ?></td>
                    <td style="width:10%"><?php echo $blog['SDT'] ?></td>
                    <td style="width:15%"><?php echo $blog['Diachi'] ?></td>
                    <td style="width:50%"><?php echo $blog['Noidung'] ?>  </td>
                </tr>
                <?php $stt++; } ?>
            </tbody>
        </table>
        
        </div>
    </div>
    
    
</main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="sidebars.js"> </script> 
</body>
</html>