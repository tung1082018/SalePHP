<?php
require "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        ItShop.com
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="Owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="test.css">
    <script src="jquery.min.js"></script>
    <style>
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
        }
    </style>
</head>
<body>
<div id="header" class="myheader">
    <div id="serviceLeft" class="text-white">
        <ul>
            <li>
                <a href="Saler.html">Saler channel</a>
            </li>
            <li>
                <a href="Taiungdung.html">Download App</a>
            </li>
            <li>
                <div>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/itshopsaigon/">
                                <img id="icon1" src="img/fbicon.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/accounts/emailsignup/">
                                <img id="insIcon" src="img/instagramIcon.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div id="serviceRight" class="text-white">
        <ul>
            <li>
                <a href="#">
                    <img id="icon1" src="img/report.png">
                </a>
            </li>
            <li>
                <a href="#">Report</a>
            </li>
            <li>
                <a href="#">
                    <img id="icon1" src="img/sidebar-support.png">
                </a>
            </li>
            <li>
                <a href="#">Support</a>
            </li>

            <li>
                <div>
                    <ul>
                        <li>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEzy37KsQmCvQvjDeap4heO6hXR46cbpVfPw&usqp=CAU" style="width: 20px; height: 20px; border-radius: 8px">
                        </li>
                        <li>
                            <a href="loginAdmin.php">Login</a>
                        </li>|
                        <li>
                            <a href="loginAdmin.php">Admin Page</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <form id="logo" method="post" action>
        <img src="img/logoshop.png" style="border-radius: 20px">
        <input id="search" type="text" name="name" placeholder="Find product, trademark, and shop name" value="">
        <input id="submit" type="submit" value="Find">
        <img style="margin-left: 122px" id="icon2" src="img/cart-40016_960_720.webp">
    </form>
    <?php
        $search = isset($_GET['name']) ? $_GET['name'] : "";
        if ($search) {
            $where = "WHERE Name LIKE '%" . $search . "%'";
        }
        if ($search) {

        }
    ?>
    <div id="menuSidebar">
        <ul>
            <li>
                <a href="#">Apple</a>
            </li>
            <li>
                <a href="#">Laptop</a>
            </li>
            <li>
                <a href="#">Tablet</a>
            </li>
            <li>
                <a href="#">Phụ kiện</a>
            </li>
            <li>
                <a href="#">Zilofresh</a>
            </li>
            <li>
                <a href="#">Edc</a>
            </li>
            <li>
                <a href="#">Chia sẻ kinh nghiệm</a>
            </li>
            <li>
                <a href="#">Bảo hành</a>
            </li>
        </ul>
    </div>
</div>
<div class="wrapper">
    <div id="banner">
        <div class="slider">

            <div class="slides">

                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="banner/laptopBannner.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="banner/zflopvszflip.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="banner/tablet.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="banner/phukienSale.jpg" alt="">
                </div>

                <div class="slide">
                    <img src="banner/amazonClock.jpg" alt="">
                </div>

                <div class="slide">
                    <img src="banner/Televisonslat.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>

            </div>

        </div>
    </div>

    <div id="banner1">
        <div id="banner2">
            <img src="banner/Televisonslat.jpg" alt="">
        </div>

        <div id="banner3">
            <img src="banner/amazonClock.jpg" alt="">
        </div>
    </div>

</div>

<div id="prdk" style="margin-left: 200px; width: 400px; height: 300px;">
</div>
<div id="cod" style="margin-top: 50px; width: 1200px; height: 300px; margin-bottom: 200px">
<div id="prds" style="margin-left: 220px; width: 1200px">
    <h4 style="text-align: center">Sản phẩm nổi bật</h4>
    <hr style="width: 200px; margin-bottom: 50px">

    <?php
    $page = $_GET['page'] ?? 1;
    $perPage = 5;
    $offSet = ($page - 1) * $perPage;
    $sql = "select * from sanpham limit $perPage offset $offSet";
    $result = $connect->query($sql);
    ?>
    <table class="table" style="margin-top: 20px; width: 1110px; margin-left: 20px">
        <thead class="thead-dark">
        <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Ảnh</th>
            <th>Thương Hiệu</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Mô Tả</th>
            <th></th>
        </tr>
        </thead>
    <?php
        while ($row = $result->fetch_assoc()) {
    ?>
            <tr style="margin-top: 20px">
                <td><?php echo $row["ID"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><img class="content__img" style="width: 70px; height: 80px;border:4px ; border-radius: 4px;"src=<?php echo"imgs/".$row['IMG'].""; ?>></td>
                <td><?php echo $row["Brand"]; ?></td>
                <td><?php echo $row["Price"]; ?></td>
                <td><?php echo $row["Quantity"]; ?></td>
                <td><?php echo $row["Description"]; ?></td>
                <td>
                    <a href="categories.php" class="btn btn-primary">Mua hàng</a>
                </td>

            </tr>
    <?php
    }
    ?>
    </table>
    <div>
        <?php
        $sql = "select count(*) as total from sanpham";
        $result = $connect->query($sql);
        $resultObject = $result->fetch_object();
        $total = $resultObject->total;

        $totalPages = ceil($total / $perPage);
        for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a class='btn btn-success' style='margin-left: 20px' href='userPage.php?page=$i'>$i</a>|";
        }
        ?>
    </div>

</div>
    <div style="">
        <img src="banner/adress.png" style="width: 1581px; margin-top: 20px">
    </div>
</div>
</div>

</body>
<script src="jquery.min.js"></script>
<script src="sale.js"></script>
<script src="Owl-carousel/Js/owl.carousel.min.js"></script>
<script src="carousel.js"></script>
<script>
    window.onscroll = function() {myFunction()};

    var myheader = document.getElementById("header");
    var sticky = myheader.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
    }, 5000);
</script>
</html>
