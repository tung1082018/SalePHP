<?php
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng</title>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <div style="margin: 0 auto">
            <h3>Quản lý khách hàng</h3>
        </div>

        <table class="table" style="margin-top: 20px; width: 1110px; margin-left: 300px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Mặt hàng</th>
                    <th>Giá niêm yết</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>tung</td>
                    <td>0912553106</td>
                    <td>Cau giay</td>
                    <td>MACBOOK AIR</td>
                    <td>27.880.000</td>
                    <td>3</td>
                    <td>83.640.000</td>
                    <td><a href="" class="btn btn-success">Xóa</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>kien</td>
                    <td>0121457270</td>
                    <td>Phuc Tho </td>
                    <td>Zflop-2</td>
                    <td>12.000.000</td>
                    <td>2</td>
                    <td>24.000.000</td>
                    <td><a href="" class="btn btn-success">Xóa</a></td>
                </tr>
            </tbody>
        </table>


    </div>
</body>
</html>
