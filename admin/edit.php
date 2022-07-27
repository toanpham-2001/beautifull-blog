<?php
require('ketnoidb.php');
$the_loai = $connect->query("SELECT * FROM `the_loai`")->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $category = $_POST['category'];
    $mo_ta = $_POST['mo_ta'];
    $home = isset($_POST['home']) ? $_POST['home'] : '0';
    $content = $_POST['content'];
    $sql = "UPDATE `bai_viet` SET `name`='$name',`image`='$image',`mo_ta`='$mo_ta',`content` = '$content',`home`='$home',`id_the_loai`='$category' WHERE `bai_viet`.`id` = '$id'";
    // die('1');
    if ($connect->query($sql)) {
        header('location:index.php');
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $blog = $connect->query("SELECT * FROM `bai_viet` WHERE `bai_viet`.`id` = '$id'")->fetch_assoc();
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="luot_xemport" content="width=device-width, initial-scale=1">
    <title>Sửa Bài Viết</title>
    <!-- <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons -->



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
            background-color: #ADC785;
            color: black;
        }

        body {
            background-color: bisque;
        }
    </style>
    <link href="sidebars.css" rel="stylesheet">
</head>

<body>
    <main>
        <?php include('sidebar.php') ?>
        <div class="mx-5 my-5 card w-100">
            <div class="card-header">
                <h5>Sửa bài viết</h5>
            </div>
            <div class="card-body">
                <form class="needs-validation" method="POST" novalidate>
                    <div class="form-row">
                        <input type="hidden" name="id" value="<?php echo $blog['id'] ?>">
                        <div class="col-md-6 mb-3">
                            <label for="name">Tên Bài Viết</label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $blog['name'] ?>">
                            <div class="invalid-feedback">
                                Vui lòng không để trống 
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="category">Thể loại</label>
                            <select class="custom-select" id="category" name="category" required>
                                <option selected disabled value="">Chọn thể loại...</option>
                                <?php foreach ($the_loai as $category) { ?>
                                    <option value="<?php echo $category['id'] ?>" <?php echo $category['id'] == $blog['id_the_loai'] ? 'selected' : '' ?>><?php echo $category['name'] ?></option>
                                <?php  } ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn 
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image">Ảnh nổi bật</label>
                            <input type="text" class="form-control" id="image" name="image" required value="<?php echo $blog['image'] ?>">
                            <div class="invalid-feedback">
                                Vui lòng không để trống 
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mo_ta">Mô tả</label>
                            <textarea type="text" class="form-control" id="mo_ta" name="mo_ta" rows="3" required><?php echo $blog['mo_ta'] ?></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống 
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label for="content">Nội dung</label>
                            <textarea type="text" class="form-control" id="content" name="content" required><?php echo $blog['content'] ?></textarea>
                            <div class="invalid-feedback">
                                Vui lòng không để trống trường này
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="home" id="home" <?php echo $blog['home'] == 1 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="home">
                                    Hiển thị trên trang chủ
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Sửa blog</button>
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
            plugins: 'image imagetool',
            toolbar: "undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | image",
            height: '700px',
            content_style: "@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');",

        });
    </script>
</body>
</html>