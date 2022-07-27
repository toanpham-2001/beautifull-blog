<?php
require('ketnoidb.php');

$output='';
if (isset($_POST["xuat_excel"]))
{
    $result=mysqli_query($connect,"SELECT * FROM `contact` ORDER BY `STT` ASC ");
    if (mysqli_num_rows($result) > 0)
    {
        $output .= '
        <table class="table" bordered="1">
        <tr> 
            <th>STT</th>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Nội dung</th>
        </tr>
        ';
        $i=1;
        while($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr> 
                <td>'.$i.'</td>
                <td>'.$row["Hovaten"].'</td>
                <td>'.$row["Email"].'</td>
                <td>'.$row["SDT"].'</td>
                <td>'.$row["Diachi"].'</td>
                <td>'.$row["Noidung"].'</td>
            </tr>
            ';
            $i++;
        }
        $output .='</table>';
        header("Content-Type:application/xls");
        header("content-Disposition:attachment; filename=contact.xls");
        echo $output;
    }
}
?>