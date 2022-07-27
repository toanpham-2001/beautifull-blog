<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="luot_xemport" content="width=device-width, initial-scale=1">
    <meta name="mo_ta" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Thêm Blog cho WEBSITE</title>

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
        .custom-color {
            background-color: #FFC0CB;
            color: black;
        }

        body {
            background-color: bisque;
        }
    </style>
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>
<?php
require('ketnoidb.php');
$the_loai = $connect->query("SELECT * FROM `the_loai`")->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['submit'])) {
    // die('1');
    $name = $_POST['name'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $mo_ta = $_POST['mo_ta'];
    $home = isset($_POST['home']) ? $_POST['home'] : '0';
    $content = $_POST['content'];
    $sql = "INSERT INTO `bai_viet`(`id`, `name`,`image`, `mo_ta`, `content`, `home`,`luot_xem`, `id_the_loai`) VALUES ('','$name','$image','$mo_ta','$content','$home',0,'$category')";

    if ($connect->query($sql)) {
        header('location:index.php');
    }
}

?>
    <main>
        <?php include('sidebar.php') ?>
        <div class="mx-5 my-5 card w-100">
            <div class="card-header">
                <h5>Thêm Bài viết</h5>
            </div>
            <div class="card-body">
                <form class="needs-validation" method="POST" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Tên Bài Viết</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Vui lòng không để trống
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="category">Thể loại</label>
                            <select class="custom-select" id="category" name="category" required>
                                <option selected disabled value="">Chọn thể loại....</option>
                                <?php foreach ($the_loai as $category) { ?>
                                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                <?php  } ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image">Ảnh</label>
                            <input type="text" class="form-control" id="image" name="image" required>
                            <div class="invalid-feedback">
                                Vui lòng không để trống
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mo_ta">Mô tả</label>
                            <textarea type="text" class="form-control" id="mo_ta" name="mo_ta" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label for="content">Nội dung</label>
                            <textarea type="text" class="form-control" id="content" name="content" required></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="home" id="home">
                                <label for="home">
                                    Hiển thị trên trang chủ
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" style="background-color:red" name="submit">Thêm blog</button>
                </form>
            </div>
        </div>

    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./sidebars.js"></script>
    <script src="https://cdn.tiny.cloud/1/oqw30ghqa6j0o3dy7d3qoyaa54ug4up3omdgj56z0z7mgifo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: 'advlist autolink lists link image charmap print preluot_xem hr anchor pagebreak image imagetool',
            toolbar_mode: 'floating',
            // toolbar: 'image',
            height: '300px',
            width: '500px'
        });
    </script>
</body>

</html>