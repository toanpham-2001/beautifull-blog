<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="nhom2";
      
        
        $connect = new mysqli($servername,$username, $password, $dbname );

        if($connect->connect_error)
        {
            die("kết nối thất bại: " . $connect->connect_error);
            exit();
        }
        $connect->set_charset('utf8');
        mysqli_set_charset($connect,"utf8");
?>
