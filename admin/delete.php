<?php
require('ketnoidb.php');
if (isset($_GET['id'])){
    if ($connect->query("DELETE FROM `bai_viet` WHERE `bai_viet`.`id` = '{$_GET['id']}'")){
        header('location:index.php');
    }
}
?>