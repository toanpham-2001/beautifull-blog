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
                <a href="insert.php">
                    <button class="btn btn-primary" style="background-color:#0BB2D4">Thêm Bài Viết</button>
                </a>
             
                <form  method="post" >
                    <input type="search" id="search" name="search" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            
                
                <h5 class="btn btn-primary">Sửa, Xóa</h5>
                    
                
            </div>

        </div>
        <div class="card-body" style="background-color: #FFEFD5;">
            <?php 
                require('ketnoidb.php');
                if (isset($_POST['search']))
                    {
                        $search=$_POST["search"];
                        $bai_viet = $connect->query("SELECT *,`the_loai`.`name` AS 'category_name',`bai_viet`.`name` AS 'blog_name',`bai_viet`.`id` AS 'blog_id' FROM `bai_viet` INNER JOIN `the_loai` ON `bai_viet`.`id_the_loai` = `the_loai`.`id` WHERE `bai_viet`.`name` LIKE '%".$search."%'");
                    } else
                $bai_viet = $connect->query("SELECT *,`the_loai`.`name` AS 'category_name',`bai_viet`.`name` AS 'blog_name',`bai_viet`.`id` AS 'blog_id' FROM `bai_viet` INNER JOIN `the_loai` ON `bai_viet`.`id_the_loai` = `the_loai`.`id`")
            
            
            ?>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên bài viết</th>
                <th scope="col">Hiển thị trang chủ</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Thao Tác</th>

                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; foreach ($bai_viet as $blog) {  ?>
                <tr>
                    <th scope="row"><?php echo $stt ?></th>
                    <td style="width:70%"><?php echo $blog['blog_name'] ?></td>
                    <td><?php echo $blog['home'] == 0 ? 'Không' : 'Có' ?></td>
                    <td><?php echo $blog['category_name'] ?></td>
                    
                    <td>
                    <a href="edit.php?id=<?php echo $blog['blog_id'] ?>">
                        <button class="btn btn-success" style="background-color:#D65F0F">Sửa</button>
                    </a>  
                    
                    <a href="delete.php?id=<?php echo $blog['blog_id'] ?>">
                        <button class="btn btn-danger" style="background-color:#B50E11">Xóa</button>
                    </a>    
                </td>
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