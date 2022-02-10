<?php
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congnghe.vn</title>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <style>
        .container {
            width: 1200px;
            height: auto;
            border: 1px solid #ccc;
            margin: 0 auto;
        }
        .quan {
            width: 40px;
        }
    </style>
</head>
<body>


<?php

?>
<div class="container">

    <div class="title" style="width: 1100px; margin-top: 30px">
        <a class="btn btn-success" href="userPage.php">Trang chủ</a>
        <h4 style="margin-top: 30px">Hóa đơn của bạn 🎁</h4>
    </div>
    <div class="cart" style="width: 1100px; margin-top: 30px">
        <?php
        $ID = $_GET['ID'] ?? null ;
        $sql = "select * from sampham where id = '$ID'";
        $result = $connect->query($sql);
        ?>
        <form id="cart-form" action="categories.php?action=submit" method="post">
            <table class="table-bordered" style="width: 1100px; text-align: center">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>MACBOOK AIR</td>
                    <td><img src="imgs/macbookpro.jfif" style="width: 120px; height: 70px"></td>
                    <td>27.880.000</td>
                    <td><input class="quan" type="text" name="quantity[1]" /></td>
                    <td>83.640.000</td>
                    <td><a href="deleteOrder.php" class="btn btn-warning">Xóa</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Tổng: 83.640.000</td>
                    <td></td>
                </tr>
                </tbody>

            </table>
            <div id="form-button" style="margin-top: 30px">
                <input type="submit" name="update" class="btn btn-success" value="Cập nhật">
                <a href="userPage.php" class="btn btn-primary">Mua tiếp</a>
            </div>

            <hr>
            <div class="subInfo" style="margin-top: 20px"></div>

            <table style="width: 500px;margin-bottom: 15px">
                <thead>
                <tr>
                    <th><label for="nameCus">Tên của bạn:</label></th>
                    <th><input type="text" id="nameCus" name="nameCus" placeholder="Fill your name"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><label for="phoneCus"><b>Số điện thoại nhận hàng:</b></label></td>
                    <td><input type="text" id="phoneCus" name="phoneCus" placeholder="Fill your phone"</td>
                </tr>
                <tr>
                    <td><label for="addressCus"><b>Địa chỉ:</b></label></td>
                    <td><input type="text" id="addressCus" name="addressCus" placeholder="Fill your address"</td>
                </tr>
                </tbody>
            </table>
            <input type="submit" name="subCus" class="btn btn-info" value="Đặt hàng" style="margin-bottom: 20px; margin-left: 348px">
        </form>

    </div>
        <?php

        if (isset($_POST['subCus'])) {
            $nameCus = $_POST['nameCus'];
            $phoneCus = $_POST['phoneCus'];
            $addressCus = $_POST['addressCus'];

            if ($nameCus != "" && $phoneCus != "" && $addressCus != "") {
                $sql = "insert into customer(Name, Phone, Address) values ('$nameCus', '$phoneCus', '$addressCus')";
                $result = $connect->query($sql);
                if ($result) {
                    header('location: userPage.php');
                }
                else {
                    echo "Bug";
                }
            }
        }
        ?>
    </div>
</div>
</body>
</html>
