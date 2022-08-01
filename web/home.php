<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="luot_xemport" content="width=device-width, initial-scale=1.0">
  <title>Two-Fashion</title>
  <!-- link file css -->
  <link rel="stylesheet" href="csshead.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- yêu cầu từ file ketnoidb.php -->
  <?php
  require('ketnoidb.php');
  if (isset($_POST['search']))
  {
    $search=$_POST["search"];
    $homes = $connect->query("SELECT * FROM `bai_viet` WHERE `bai_viet`.`name` LIKE '%".$search."%'");
    
  } else
  $homes = $connect->query("SELECT * FROM `bai_viet` WHERE `bai_viet`.`home` = 1");

  ?>
  <!-- Hiển thị bài viết-->
  
  <?php include('header.php') ?>

  <!-- Tìm kiếm-->
 



<div class="search" style="text-align: left;width: 800px;margin-left: 340px;">
  <form  method="post">
    <input type="search" id="search" name="search" />
    <button type="submit" class="icon" style="background-color: #FFDAB9;"><i class="fa fa-search"></i></button>
    </form>
</div>



  <hr width="75%" color="#FFDAB9">
  <?php foreach ($homes as $home) { ?>
    <!-- div về ảnh bài viết -->
    <div class="post">
      <div style="float:left;"><img src="<?php echo $home['image'] ?>" width="230px" height="280px" /></div>
      <br></br>
      <div class="title">
        <h2><?php echo $home['name'] ?></h2>
        <p style="font-size: 20px; font-family: Lobster"><?php echo $home['mo_ta'] ?></p>
        <a class="resume2" href="blog_info.php?id=<?php echo $home['id']  ?>">ĐỌC TIẾP &rsaquo; </a>
      </div>
    </div>
    <hr class="space-one" color="#FFDAB9" width="75%">
  <?php } ?>
  <!--Cột bên phải-->
  <div class="rightcolumn" style="float:right;">
    <div class="card">
      <table align="center" style="border: 3px solid #FFDAB9; width: 320px ; height: 175px;border-radius: 5px; margin-top:100px; font-family: Lobster">
        <tr>
          <td align="center">
            <h2 align="center" style="color:#5f402d;">LỜI NÓI ĐẦU</h2>
            <hr width="100px">
            Chào mừng tới với trang chia sẻ kiến thức về sức khỏe và làm đẹp của nhóm 2 chúng tôi, các bạn hãy cùng tham khảo các kiến thức cho đời sống của mình nhé! ^^
          </td>
        </tr>
      </table>
    </div>

    <div class="card">
      <table align="center" style="border: 3px solid #FFDAB9 ; width: 320px ; height: 175px;border-radius: 5px; font-family: Lobster">
        <td align="center">
          <h2 style="text-align: center;">CÓ THỂ BẠN CẦN</h2>
          <h3><U>Hướng dẫn sử dụng sữa rửa mặt!</U></h3>
          </a>
          <iframe width="300" height="200" src="https://www.youtube.com/embed/DFF31sewKVY" title="YouTube video player" frameborder="0"></iframe>
          <hr width="300px" />
          <h3><U>Cách thoa kem chống nắng!</U></h3>
          </a>
          <iframe width="300" height="200" src="https://www.youtube.com/embed/flD8dH2uu8Y" title="YouTube video player" frameborder="0"></iframe>

    </div>

    </td>
    </table>
  </div>
  <!---Các bài viết nổi bật--->

  </div>
  </div>
  </div>
  </div>
  <div>

  
  <!-- <div id="footer" style="text-align: center;">
    <p><b>2021 A WEBSITE BY WINX</b></p>
    <div class="author">
      <p style="font-size: large;">Author: Two-Life<br>
        <a href="mailto:toan01nb@gmail.com" style="text-decoration: none; color:black">GỬI MAIL CHO CHÚNG TÔI</a>
      </p>
    </div>
    <div class="adress" style="text-align:left">
      Văn phòng làm việc chính:
      <p>Trường Đại học Điện Lực</p>
      <p>235-Hoàng Quốc Việt-Bắc Từ Liêm-Hà Nội</p>    
    </div>
  </div> -->

</body>
